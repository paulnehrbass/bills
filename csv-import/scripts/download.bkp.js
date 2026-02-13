const { chromium } = require('playwright');
const config = require('../config/config');

const fs = require('fs');
const path = require('path');

const storagePath = path.join(__dirname, '..', 'storageState.json');


(async () => {
  const browser = await chromium.launch({ headless: false });

  let context;
  
  if (fs.existsSync(storagePath)) {
    console.log('Bestehende Session gefunden – lade storageState');
    context = await browser.newContext({storageState: storagePath });
  } else {
    console.log('Keine Session-Datei gefunden – starte ohne Session');
    context = await browser.newContext();
  }
  
  const page = await context.newPage();

  console.log('Browser gestartet – Download CSV');
  await page.goto(config.playwright.loginUrl, { waitUntil: 'domcontentloaded' });

  // Optional noch kurz warten, falls SPA
  await page.waitForTimeout(2000);

  const title = await page.title();
  console.log('Seiten-Titel:', title);

  if (!fs.existsSync(storagePath)) {
  await page.fill(config.login.selectorUser, config.login.user);
  console.log('Login:', 'User set...');

  await page.fill(config.login.selectorPassword, config.login.password);
  console.log('Login:', 'Password set...');

  await page.click(config.login.selectorButton);
  console.log('Login:', 'Login clicked...');

  console.log('Login: 2FA-Push auf dem Handy bestätigen...');
  await page.waitForSelector(config.login.selectorDaschboard, { timeout: 0 }); // wartet auf erfolgreichen Login
  console.log('Login: Login erfolgreich – Dashboard geladen');
  //await browser.close();

  await context.storageState({ path: storagePath });
  console.log('Login: Session gespeichert – nächstes Mal wird Login übersprungen');
  } else{
    console.log('Login: Bestehende Session geladen – kein Login nötig');
  }

})();
