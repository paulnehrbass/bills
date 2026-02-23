const { chromium } = require('playwright');
const fs = require('fs');
const appConfig = require('../config/config');

class Login {
  constructor(config = appConfig) {
    this.config = config;
    this.browser = null;
    this.context = null;
    this.page = null;
  }

  // Versucht Session zu laden
  async loadSession() {
    const sessionFile = this.config.playwright.sessionFile;

    if (!fs.existsSync(sessionFile)) {
      console.log('Keine Session-Datei gefunden');
      return false;
    }

    console.log(`Session-Datei gefunden: ${sessionFile} → lade Session`);

    this.browser = await chromium.launch({ headless: false });
    this.context = await this.browser.newContext({
      storageState: sessionFile
    });

    this.page = await this.context.newPage();
    await this.page.goto(this.config.playwright.loginUrl);

    try {
      await this.page.waitForSelector(
          this.config.login.selectorDashboard,
          { timeout: 5000 }
      );
      console.log('Session ist gültig, Login nicht nötig');
      return true;
    } catch (err) {
      console.log('Session abgelaufen oder Dashboard nicht gefunden');
      await this.close();
      return false;
    }
  }

  // Initiales Login
  async login() {
    this.browser = await chromium.launch({ headless: false });
    this.context = await this.browser.newContext();
    this.page = await this.context.newPage();

    await this.page.goto(this.config.playwright.loginUrl);

    await this.page.fill(this.config.login.selectorUser, this.config.login.user);
    await this.page.fill(this.config.login.selectorPassword, this.config.login.password);
    await this.page.click(this.config.login.selectorButton);

    // Warten auf Dashboard → Login erfolgreich
    await this.page.waitForSelector(
        this.config.login.selectorDashboard,
        { timeout: this.config.login.waitForPush }
    );
    console.log('Login erfolgreich');

    await this.saveSession();
  }

  // Speichern der Session
  async saveSession() {
    if (!this.context) throw new Error('Kein Browser-Kontext vorhanden');
    await this.context.storageState({ path: this.config.playwright.sessionFile });
    console.log(`Session gespeichert in: ${this.config.playwright.sessionFile}`);
  }

  // Browser sauber schließen
  async close() {
    if (this.browser) {
      await this.browser.close();
      this.browser = null;
      this.context = null;
      this.page = null;
    }
  }
}

module.exports = Login;