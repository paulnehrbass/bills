class Flow {
    constructor(login) {
        this.login = login;
        this.browser = null;
        this.context = null;
        this.page = null;
    }

    async run() {
        const hasSession = await this.login.loadSession();

        if (!hasSession) {
            await this.login.login();
        }

        this.browser = this.login.browser;
        this.context = this.login.context;
        this.page = this.login.page;

        await this.execute();
    }

    async execute() {
        throw new Error('execute() muss in der Unterklasse implementiert werden');
    }
}

module.exports = Flow;