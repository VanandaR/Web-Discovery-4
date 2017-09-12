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

    <title>Discovery 4 - Login</title>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login_page.min.css" />

</head>
<body class="login_page">
<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding">
            <a href="<?php echo base_url();?>authentication" class="uk-position-top-right uk-close uk-margin-right uk-margin-top"></a>
            <h2 class="heading_b uk-text-success">Terima kasih telah mendaftar!</h2>
            <p>Pendaftaranmu berhasil! Cek emailmu untuk mengkonfirmasi pendaftaran</p>
        </div>

    </div>

</div>
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
<script src="<?php echo base_url();?>assets/js/common.min.js"></script>
<!-- altair core functions -->
<script src="<?php echo base_url();?>assets/js/altair_admin_common.min.js"></script>

<!-- altair login page functions -->
<script src="<?php echo base_url();?>assets/js/pages/login.min.js"></script>
<!-- uikit functions -->
<script src="<?php echo base_url();?>assets/js/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script src="<?php echo base_url();?>assets/js/altair_admin_common.min.js"></script>

</body>
</html>