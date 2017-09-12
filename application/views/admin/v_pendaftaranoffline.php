<div id="page_content">
    <div id="page_content_inner">
        <h4 class="heading_a uk-margin-bottom">Pendaftaran Offline</h4>
        <div class="md-card uk-margin-medium-bottom ">
            <div class="md-card-content">
                <form method="post" action="<?php echo base_url();?>admin/insertpendaftaranoffline">
                    <?php if (isset($error)) : ?>
                        <div class="uk-alert uk-alert-danger" data-uk-alert>
                            <a href="#" class="uk-alert-close uk-close"></a>
                            <?= $error ?>
                        </div>
                    <?php endif; ?>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Username</label>
                            <input class="md-input" type="text" name="username" value="<?=set_value('username');?>" />
                            <?php if (form_error('username')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('username','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Password</label>

                            <input class="md-input" type="password" name="password" value="<?=set_value('password');?>" />
                            <?php if (form_error('password')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('password','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Email</label>

                            <input class="md-input" type="text" name="email" value="<?=set_value('email');?>" />
                            <?php if (form_error('email')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('email','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Nomor Telpon</label>
                            <input class="md-input" type="text" name="nomortelpon" value="<?=set_value('nomortelpon');?>" />
                            <?php if (form_error('nomortelpon')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('nomortelpon','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Nama Kelompok</label>

                            <input class="md-input" type="text" name="nama_kelompok" value="<?=set_value('nama_kelompok');?>" />
                            <?php if (form_error('nama_kelompok')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('nama_kelompok','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Asal Instansi</label>
                            <input class="md-input" type="text" name="asal_instansi"  value="<?=set_value('asal_instansi');?>"/>
                            <?php if (form_error('asal_instansi')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('asal_instansi','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Nama Ketua</label>

                            <input class="md-input" type="text" name="nama_ketua" value="<?=set_value('nama_ketua')?>" />
                            <?php if (form_error('nama_ketua')) : ?>
                                <div class="col-md-12">
                                    <?= form_error('nama_ketua','<span class="wrong_reason">','</span>') ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Nama Anggota 1</label>
                            <input class="md-input" type="text" name="nama_kelompok_1" value="<?=set_value('nama_kelompok_1')?>" />
                        </div>
                        <div class="uk-width-medium-1-1">
                            <label for="user_edit_uname_control">Nama Anggota 2</label>
                            <input class="md-input" type="text" name="nama_kelompok_2" value="<?=set_value('nama_kelompok_2')?>" />
                        </div>
                    </div>
                    <div class=" uk-text-right " style="border-top:1px solid rgba(0,0,0,.12)">
                        <div class=" uk-margin-top">
                            <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-flat-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>