const Login = require('./Login');
const CSVDownloadFlow = require('./CSVDownloadFlow');
const appConfig = require('../config/config');

(async () => {
    const login = new Login(appConfig);

    // Zuerst versuchen wir, Session zu laden
    let loggedIn = await login.loadSession();
    if (!loggedIn) {
        // Session ungültig → neues Login
        await login.login();
    }

    // CSVDownloadFlow starten
    //const flow = new CSVDownloadFlow(login, './downloads');
    const flow = new CSVDownloadFlow(login, appConfig.csv.downloadPath);
    await flow.run(); // ruft execute() intern auf

    console.log('CSVDownloadFlow abgeschlossen.');

    // Browser schließen, falls du willst
    await login.close();
})();