const Flow = require('./Flow');

class TestFlow extends Flow {
    async execute() {
        console.log('Login erfolgreich, TestFlow läuft.');
        // Hier später CSV-Download implementieren
    }
}

module.exports = TestFlow;