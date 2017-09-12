<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-large-8-10 uk-container-center">
                <form action="<?php echo base_url();?>peserta/updateidentitas" method="POST" id="form_edit">
                    <div class="md-card">
                        <div class="user_heading" data-uk-sticky="{ top: 48, media: 960 }">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?php echo base_url();?>assets/img/avatars/avatar_11.png" alt="user avatar"/>
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate"><?= (!empty($kelompok->nama_kelompok))?$kelompok->nama_kelompok:"Belum ada nama kelompok"; ?></span><span class="sub-heading"><?= !empty(($kelompok->asal_instansi))?$kelompok->asal_instansi:"Belum ada asal instansi"; ?></span></h2>
                            </div>

                            <div class="md-fab-wrapper">
                                <div class="md-fab md-fab-toolbar md-fab-small md-fab-accent">
                                    <i class="material-icons">&#xE8BE;</i>
                                    <div class="md-fab-toolbar-actions">
                                        <button id="save" type="submit"  data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Save"><i class="material-icons md-color-white">&#xE161;</i></button>
                                        <a href="<?php echo base_url();?>peserta/identitas" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'bottom'}" title="Cancel"><i class="material-icons md-color-white">close</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">
                                <h3 class="full_width_in_card heading_c">
                                    Edit Identitas
                                </h3>
                                <div class="uk-grid" data-uk-grid-margin>
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
                                        <input class="md-input" type="text" name="nama_kelompok_2" value="<?=($kelompok->nama_kelompok_2)?$kelompok->nama_ketua:set_value('nama_kelompok_2')?>" />
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
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<script>
    $('#save').click(function() {
//        alert("Josh");
        $('#form_edit').submit();
    });
</script>