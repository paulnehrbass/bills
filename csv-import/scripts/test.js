const Login = require('./Login');
const TestFlow = require('./TestFlow');
const appConfig = require('../config/config');

(async () => {
  const login = new Login(appConfig);
  const flow = new TestFlow(login);

  console.log('--- Starte Flow ---');
  await flow.run();
  console.log('Flow abgeschlossen.');

  // Browser offen lassen oder schließen
  // await login.close();
})();