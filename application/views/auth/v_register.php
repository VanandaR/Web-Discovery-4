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
        <div class="md-card-content large-padding" id="login_form">
            <h2 class="heading_a uk-margin-medium-bottom">Daftar Peserta</h2>
            <?php if (isset($error)) : ?>
                <div class="uk-alert uk-alert-danger" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <?= $error ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url();?>authentication/register" method="post">
                <div class="uk-form-row">
                    <label for="login_username">Username</label>
                    <input class="md-input" type="text" id="username" name="username" value="<?= set_value('username') ?>" />
                    <?php if (form_error('username')) : ?>
                        <div class="col-md-12">
                            <?= form_error('username','<span class="wrong_reason">','</span>') ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-form-row">
                    <label for="login_password">Password</label>
                    <input class="md-input" type="password" id="password" name="password" value="<?= set_value('password') ?>" />
                    <?php if (form_error('password')) : ?>
                        <div class="col-md-12">
                            <?= form_error('password','<span class="help-block wrong_reason">','</span>') ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-form-row">
                    <label for="register_password_repeat">Repeat Password</label>
                    <input class="md-input" type="password" id="password_confirm" name="password_confirm" />
                    <?php if (form_error('password_confirm')) : ?>
                        <div class="col-md-12">
                            <?= form_error('password_confirm','<span class="help-block wrong_reason">','</span>') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-form-row">
                    <label for="register_email">E-mail</label>
                    <input class="md-input" type="text" id="email" name="email" value="<?= set_value('email') ?>" />
                    <?php if (form_error('email')) : ?>
                        <div class="col-md-12">
                            <?= form_error('email','<span class="help-block wrong_reason">','</span>') ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-form-row">
                    <label for="register_email">Nomor Telepon Ketua</label>
                    <input class="md-input" type="text" id="nomortelpon" name="nomortelpon" value="<?= set_value('nomortelpon') ?>" />
                    <?php if (form_error('nomortelpon')) : ?>
                        <div class="col-md-12">
                            <?= form_error('nomortelpon','<span class="help-block wrong_reason">','</span>') ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-margin-medium-top">
                    <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Daftar</button>
                </div>

            </form>
        </div>

    </div>

    <div class="uk-margin-top uk-text-center">
        <a href="<?php echo base_url();?>authentication/login">Login</a>
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