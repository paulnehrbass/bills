/**
 * download.js
 * 
 * Öffnet den Browser, prüft bestehende Session oder führt Login + 2FA durch,
 * speichert die Session für zukünftige Starts und ermöglicht danach
 * den Zugriff auf die Bills-Seite für CSV-Downloads.
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

  console.log('Login: Browser gestartet – Download CSV');
  //await page.goto(config.playwright.loginUrl, { waitUntil: 'domcontentloaded' });
  await page.goto(config.playwright.dashboardUrl, { waitUntil: 'domcontentloaded' });


  // Optional noch kurz warten, falls SPA
  await page.waitForTimeout(2000);

  const title = await page.title();
  //console.log('Seiten-Titel:', title);

  // Prüfen, ob Dashboard bereits sichtbar ist (Session noch gültig)
  const loggedIn = await page.$(config.login.selectorDaschboard);

  if (!loggedIn) {
    console.log('Login: Session abgelaufen – Login erforderlich');

    await page.fill(config.login.selectorUser, config.login.user);
    console.log('Login:', 'User gesetzt...');

    await page.fill(config.login.selectorPassword, config.login.password);
    console.log('Login:', 'Password gesetzt...');

    await page.click(config.login.selectorButton);
    console.log('Login:', 'Login geklickt...');

    console.log('Login: 2FA-Push auf dem Handy bestätigen...');
    await page.waitForSelector(config.login.selectorDaschboard, { timeout: 0 }); // wartet auf erfolgreichen Login
    console.log('Login: Login erfolgreich – Dashboard geladen');

    // Session speichern
    await context.storageState({ path: storagePath });
    console.log('Login: Session gespeichert – nächstes Mal wird Login übersprungen');
  } else {
    console.log('Login: Bestehende Session noch gültig – kein Login nötig');
  }

  // Hier kannst du direkt mit der Bills-Seite / CSV-Download weitermachen
  // Beispiel: await page.goto(config.playwright.billsUrl);

  //await browser.close();
})();
