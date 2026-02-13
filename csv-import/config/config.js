module.exports = {
    playwright: {
      testUrl:      'https://www.spiegel.de',
      dashboardUrl: 'https://www.postfinance.ch/ap/ra/ob/html/finance/home',
      loginUrl:     'https://www.postfinance.ch/ap/ba/ob/html/finance/assets/balance-sheet?login',
    
    },
    login:{
        selectorUser:       '#p_username',
        selectorPassword:   '#p_passw',
        selectorButton:     '#submitLogin',
        selectorDaschboard: 'h2.ng-tns-c1730222737-1',
        user:               '126960062',
        password:           '.&Mamut4/321'

    }
  };
  