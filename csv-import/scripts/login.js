/**
 * login.js
 *
 * Öffnet den Browser, lädt bestehende Session aus storageState.json,
 * prüft, ob Dashboard erreichbar ist, führt nur bei abgelaufener Session
 * Login + 2FA durch, speichert Session danach.
 */

const { chromium } = require('playwright');
const config = require('../config/config');

const fs = require('fs');
const path = require('path');

const storagePath = path.join(__dirname, '..', 'storageState.json');

(async () => {
  const browser = await chromium.launch({ headless: false });
  let context;

  if (fs.existsSync(storagePath)) {
    console.log('Login: Bestehende Session gefunden – lade storageState');
    context = await browser.newContext({ storageState: storagePath });
  } else {
    console.log('Login: Keine Session-Datei gefunden – starte ohne Session');
    context = await browser.newContext();
  }

  const page = await context.newPage();
  console.log('Login: Browser gestartet');

  // Seite aufrufen
  await page.goto(config.playwright.dashboardUrl, { waitUntil: 'domcontentloaded' });
  await page.waitForTimeout(2000);

  // Prüfen, ob Dashboard sichtbar ist → Session noch gültig
  const loggedIn = page.url().includes(config.playwright.dashboardUrl);

  if (!loggedIn) {
    console.log('Login: Session abgelaufen – Login erforderlich');

    await page.goto(config.playwright.loginUrl, { waitUntil: 'domcontentloaded' });
    await page.fill(config.login.selectorUser, config.login.user);
    console.log('Login: User gesetzt');

    await page.fill(config.login.selectorPassword, config.login.password);
    console.log('Login: Password gesetzt');

    await page.click(config.login.selectorButton);
    console.log('Login: Login geklickt – 2FA-Push am Handy bestätigen');

    // Auf Dashboard-URL warten statt auf flüchtigen Selector
    await page.waitForURL(config.playwright.dashboardUrl + '*', { timeout: 0 });
    console.log('Login: Login erfolgreich – Dashboard geladen');

    // Session speichern
    await context.storageState({ path: storagePath });
    console.log('Login: Session gespeichert – nächstes Mal Login übersprungen');
  } else {
    console.log('Login: Bestehende Session noch gültig – kein Login nötig');
  }

  // Browser offen lassen oder schließen, je nach Bedarf
  // await browser.close();
})();
