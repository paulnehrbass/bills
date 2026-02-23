const Flow = require('./Flow');
const fs = require('fs');
const path = require('path');

class CSVDownloadFlow extends Flow {
    constructor(login, downloadPath) {
        super(login);
        this.downloadPath = downloadPath || path.resolve(__dirname, '../downloads');

        // Download-Ordner erstellen, falls er noch nicht existiert
        if (!fs.existsSync(this.downloadPath)) {
            fs.mkdirSync(this.downloadPath, { recursive: true });
        }
    }

    async execute() {
        console.log('Starte CSVDownloadFlow...');

        // Gehe zur Download-Seite
        await this.page.goto(this.login.config.csv.downloadUrl);

        // Warte auf den Download-Button
        await this.page.waitForSelector(this.login.config.csv.selectorDownloadButton);

        // Download abfangen und speichern
        const [download] = await Promise.all([
            this.page.waitForEvent('download'),
            this.page.click(this.login.config.csv.selectorDownloadButton),
        ]);

        const filePath = path.join(this.downloadPath, await download.suggestedFilename());
        await download.saveAs(filePath);

        console.log(`CSV-Datei heruntergeladen: ${filePath}`);
    }
}

module.exports = CSVDownloadFlow;