<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url('public/assets/img/navbar-logo.svg'); ?>" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Serviços</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfólio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallery">Galeria</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cursos">Cursos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Time</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url('auth/login'); ?>">Já sou cliente</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <!-- TradingView Widget BEGIN -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "description": "GBP/USD",
                    "proName": "OANDA:GBPUSD"
                },
                {
                    "description": "XAU/USD",
                    "proName": "OANDA:XAUUSD"
                },
                {
                    "description": "USD/BRL",
                    "proName": "FX_IDC:USDBRL"
                },
                {
                    "description": "NZD/USD",
                    "proName": "OANDA:NZDUSD"
                },
                {
                    "description": "IBOVESPA",
                    "proName": "INDEX:IBOV"
                },
                {
                    "description": "USD/CHF",
                    "proName": "OANDA:USDCHF"
                },
                {
                    "description": "MGLU3",
                    "proName": "BMFBOVESPA:MGLU3"
                },
                {
                    "description": "EUR/JPY",
                    "proName": "OANDA:EURJPY"
                },
                {
                    "description": "USD/CAD",
                    "proName": "FX:USDCAD"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "dark",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "br"
        }
    </script>
    <!-- TradingView Widget END -->

    <div class="masthead-subheading">Starterinvesting!</div>
    <div class="masthead-heading text-uppercase">Investir na bolsa pode ser para você</div>
    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Veja nosos Serviços</a>
</header>