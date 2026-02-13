const { chromium } = require('playwright');
const config = require('../config/config');


(async () => {
  const browser = await chromium.launch({ headless: false });
  const page = await browser.newPage();
  await page.goto(config.playwright.testUrl);
  await page.waitForTimeout(3000);
  await browser.close();
})();
