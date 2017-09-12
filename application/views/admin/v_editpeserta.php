<div id="page_content">
    <div id="page_content_inner">
        <h4 class="heading_a uk-margin-bottom">Edit Peserta</h4>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-6-10"?>
            <div class="md-card uk-margin-medium-bottom ">
                <div class="md-card-content">
                    <form method="post" action="<?php echo base_url();?>admin/updatepeserta">
                        <h3 class="full_width_in_card heading_c">
                            Identitas Peserta
                        </h3>
                        <input type="hidden" class="md-input" type="text" name="id_kelompok" value="<?=$kelompok->id_user;?>" />
                        <div class="uk-grid" data-uk-grid-margin>

                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Username</label>

                                <input class="md-input" type="text" name="username" value="<?=($kelompok->username)?$kelompok->username:set_value('username')?>" />
                                <input type="hidden" class="md-input" type="text" name="username_awal" value="<?=$kelompok->username?>" />
                                <?php if (form_error('username')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('username','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Nama Kelompok</label>

                                <input class="md-input" type="text" name="nama_kelompok" value="<?=($kelompok->nama_kelompok)?$kelompok->nama_kelompok:set_value('nama_kelompok')?>" />
                                <input type="hidden" class="md-input" type="text" name="nama_kelompok_awal" value="<?=$kelompok->nama_kelompok?>" />
                                <?php if (form_error('nama_kelompok')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('nama_kelompok','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Asal Instansi</label>
                                <input class="md-input" type="text" name="asal_instansi"  value="<?= ($kelompok->asal_instansi)?$kelompok->asal_instansi:set_value('asal_instansi');?>"/>
                                <?php if (form_error('asal_instansi')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('asal_instansi','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Nama Ketua</label>

                                <input class="md-input" type="text" name="nama_ketua" value="<?=($kelompok->nama_ketua)?$kelompok->nama_ketua:set_value('nama_ketua')?>" />
                                <input type="hidden" class="md-input" type="text" name="nama_ketua_awal" value="<?=$kelompok->nama_ketua?>" />
                                <?php if (form_error('nama_ketua')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('nama_ketua','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Nama Anggota 1</label>
                                <input class="md-input" type="text" name="nama_kelompok_1" value="<?=($kelompok->nama_kelompok_1)?$kelompok->nama_kelompok_1:set_value('nama_kelompok_1')?>" />
                                <?php if (form_error('nama_kelompok_1')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('nama_kelompok_1','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Nama Anggota 2</label>
                                <input class="md-input" type="text" name="nama_kelompok_2" value="<?=($kelompok->nama_kelompok_2)?$kelompok->nama_kelompok_2:set_value('nama_kelompok_2')?>" />
                                <?php if (form_error('nama_kelompok_2')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('nama_kelompok_2','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">Nomer Telepon</label>
                                <input class="md-input" type="text" name="nomertelpon" value="<?=($kelompok->nomertelpon)?$kelompok->nomertelpon:set_value('nomertelpon')?>" />
                                <?php if (form_error('nomertelpon')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('nomertelpon','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="uk-width-medium-1-1">
                                <label for="user_edit_uname_control">E-mail</label>
                                <input class="md-input" type="text" name="email" value="<?=($kelompok->email)?$kelompok->email:set_value('email')?>" />
                                <?php if (form_error('email')) : ?>
                                    <div class="col-md-12">
                                        <?= form_error('email','<span class="help-block wrong_reason">','</span>') ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class=" uk-text-right " style="border-top:1px solid rgba(0,0,0,.12)">
                            <div class=" uk-margin-top">
                                <a href="<?php echo base_url();?>admin/daftarpeserta" class="md-btn md-btn-flat uk-modal-close">Close</a>
                                <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-flat-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <div class="uk-width-4-10"?>
                <div class="md-card  uk-margin-medium-bottom ">
                    <div class="md-card-content">
                        <form method="post" action="<?php echo base_url();?>admin/updatepassword">
                            <h3 class="full_width_in_card heading_c">
                                Password
                            </h3>
                            <input type="hidden" class="md-input" type="text" name="id_kelompok" value="<?=$_GET['id'];?>" />
                            <div class="uk-grid" data-uk-grid-margin>

                                <div class="uk-width-medium-1-1">
                                    <label for="user_edit_uname_control">Password baru</label>
                                    <input class="md-input" type="password" name="password" />
                                    <?php if (form_error('password')) : ?>
                                        <div class="col-md-12">
                                            <?= form_error('password','<span class="help-block wrong_reason">','</span>') ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class=" uk-text-right " style="border-top:1px solid rgba(0,0,0,.12)">
                                <div class=" uk-margin-top">
                                    <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-flat-primary">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>