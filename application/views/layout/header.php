<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png" sizes="32x32">

    <title>Discovery</title>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
    <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
<!-- main header -->
<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">

            <!-- main sidebar switch -->
            <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>

            <!-- secondary sidebar switch -->
            <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                <span class="sSwitchIcon"></span>
            </a>


            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav user_actions">
                    <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                        <a href="#" class="user_action_image"><img class="md-user-image" src="<?php echo base_url();?>assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav js-uk-prevent">
                                <li><a href="<?php echo base_url();?>authentication/logout">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header><!-- main header end -->
<!-- main sidebar -->
<aside id="sidebar_main">

    <div class="sidebar_main_header uk-container uk-container-center">
        <div class="uk-margin-medium-top">
        <img src="<?php echo base_url();?>assets/img/logo2.png">
        </div>
    </div>

    <div class="menu_section">
        <ul>

            <li title="Dashboard">
                <a href="<?php echo base_url();?>admin/dashboard">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
                <?php
                if($_SESSION['level'] == 1):
                    ?>
                    <a href="<?php echo base_url();?>admin/daftarpeserta">
                        <span class="menu_icon"><i class="material-icons">face</i></span>
                        <span class="menu_title">Daftar Peserta</span>
                    </a>
                    <a href="<?php echo base_url();?>admin/pendaftaranoffline">
                        <span class="menu_icon"><i class="material-icons">assignment</i></span>
                        <span class="menu_title">Pendaftaran Offline</span>
                    </a>
                    <?php
                elseif($_SESSION['level'] == 2):
                    ?>
                <?php if($kelompok->status<4){?>
                    <a href="<?php echo base_url();?>peserta/buktipembayaran">
                        <span class="menu_icon"><i class="material-icons">&#xe227;</i></span>
                        <span class="menu_title">Bukti Pembayaran</span>
                    </a>
                <?php }?>
                    <?php if($kelompok->status>=4){?>
                    <a href="<?php echo base_url();?>peserta/uploadproposal">
                        <span class="menu_icon"><i class="material-icons">&#xe24d;</i></span>
                        <span class="menu_title">Upload Proposal</span>
                    </a>
                    <a href="<?php echo base_url();?>peserta/identitas">
                        <span class="menu_icon"><i class="material-icons">face</i></span>
                        <span class="menu_title">Identitas</span>
                    </a>
                        <?php }?>

                    <?php

                endif;
                ?>
                <a href="<?php echo base_url();?>authentication/logout">
                    <span class="menu_icon"><i class="material-icons">power_settings_new</i></span>
                    <span class="menu_title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside><!-- main sidebar end -->

