<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
            <div class="uk-width-large-4-5 uk-container-center">
                <div class="md-card">
                    <div class="user_heading">
                        <div class="user_heading_avatar">
                            <img src="<?php echo base_url();?>assets/img/avatars/avatar_11.png" alt="user avatar"/>
                        </div>
                        <div class="user_heading_content">
                            <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate"><?= (!empty($kelompok->nama_kelompok))?$kelompok->nama_kelompok:"Belum ada nama kelompok"; ?></span><span class="sub-heading"><?= !empty(($kelompok->asal_instansi))?$kelompok->asal_instansi:"Belum ada asal instansi"; ?></span></h2>
                        </div>
                        <a class="md-fab md-fab-small md-fab-accent" href="<?php echo base_url();?>peserta/editidentitas">
                            <i class="material-icons">&#xE150;</i>
                        </a>
                    </div>
                    <div class="user_content">
                        <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                            <div class="uk-width-large-1-2">
                                <h4 class="heading_c uk-margin-small-bottom">Identitas Anggota</h4>
                                <ul class="md-list md-list-addon">
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-user-secret"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?= (!empty($kelompok->nama_ketua))?$kelompok->nama_ketua:"Belum ada ketua"; ?></span>
                                            <span class="uk-text-small uk-text-muted">Nama Ketua</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-user"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?= (!empty($kelompok->nama_kelompok_1))?$kelompok->nama_kelompok_1:"Belum ada anggota 1"; ?></span>
                                            <span class="uk-text-small uk-text-muted">Nama Anggota 1</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-user"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?= (!empty($kelompok->nama_kelompok_2))?$kelompok->nama_kelompok_2:"Belum ada anggota 2"; ?></span>
                                            <span class="uk-text-small uk-text-muted">Nama Anggota 2</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-addon-element">
                                            <i class="md-list-addon-icon uk-icon-phone"></i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading"><?= (!empty($kelompok->nomertelpon))?$kelompok->nomertelpon:"Belum ada anggota 2"; ?></span>
                                            <span class="uk-text-small uk-text-muted">Nomor Telepon</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="uk-width-large-1-2">
                                <h4 class="heading_c uk-margin-bottom">Timeline</h4>
                                <div class="timeline">
                                    <div class="timeline_item">
                                        <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                        <div class="timeline_content">Peserta telah mendaftar</div>
                                    </div>
                                    <div class="timeline_item">
                                        <?php if($kelompok->status>1):?>
                                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                            <div class="timeline_content">Peserta sudah mengunggah bukti pembayaran</div>
                                        <?php elseif($kelompok->status==1):?>
                                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">info</i></div>
                                            <div class="timeline_content">Peserta belum mengunggah bukti pembayaran</div>
                                        <?php elseif($kelompok->status<1):?>
                                            <div class="timeline_icon timeline_icon_danger disabled"><i class="material-icons">close</i></div>
                                            <div class="timeline_content">Peserta mengunggah bukti pembayaran</div>
                                        <?php endif;?>
                                    </div>
                                    <div class="timeline_item">
                                        <?php if($kelompok->status>2):?>
                                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                            <div class="timeline_content">Panitia telah melakukan validasi bukti pembayaran</div>
                                        <?php elseif($kelompok->status==2):?>
                                            <div class="timeline_icon timeline_icon_warning"><i class="material-icons">info</i></div>
                                            <div class="timeline_content">Panitia belum melakukan validasi bukti pembayaran</div>
                                        <?php elseif($kelompok->status<2):?>
                                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                            <div class="timeline_content">Validasi bukti pembayaran oleh panitia</div>
                                        <?php endif;?>
                                    </div>

                                    <?php if($kelompok->status>=4):?>
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                            <div class="timeline_content">Panitia menyetujui bukti pembayaran</div>
                                        </div>
                                    <?php elseif($kelompok->status==3):?>
                                        <div class="timeline_item">
                                            <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                            <div class="timeline_content">Panitia tidak menyetujui, silahkan hubungi panitia</div>
                                        </div>
                                    <?php endif;?>
                                    <?php if($kelompok->status!=3):?>
                                        <div class="timeline_item">
                                            <?php if($kelompok->status>4):?>
                                                <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                                <div class="timeline_content">Peserta telah mengunggah proposal</div>
                                            <?php elseif($kelompok->status==4):?>
                                                <div class="timeline_icon timeline_icon_warning"><i class="material-icons">info</i></div>
                                                <div class="timeline_content">Peserta belum mengunggah proposal</div>
                                            <?php elseif($kelompok->status<4):?>
                                                <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                                <div class="timeline_content">Pengunggahan proposal oleh peserta</div>
                                            <?php endif;?>
                                        </div>
                                        <div class="timeline_item">
                                            <?php if($kelompok->status>5):?>
                                                <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                                <div class="timeline_content">Panitia telah melakukan validasi proposal</div>
                                            <?php elseif($kelompok->status==5):?>
                                                <div class="timeline_icon timeline_icon_warning"><i class="material-icons">info</i></div>
                                                <div class="timeline_content">Panitia belum melakukan validasi proposal</div>
                                            <?php elseif($kelompok->status<5):?>
                                                <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                                <div class="timeline_content">Validasi proposal oleh panitia</div>
                                            <?php endif;?>
                                        </div>
                                        <?php if($kelompok->status==6):?>
                                            <div class="timeline_item">
                                                <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                                <div class="timeline_content">Panitia menyetujui proposal</div>
                                            </div>
                                        <?php elseif($kelompok->status==7):?>
                                            <div class="timeline_item">
                                                <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                                <div class="timeline_content">Panitia tidak menyetujui proposal, silahkan hubungi panitia</div>
                                            </div>
                                        <?php endif;?>
                                        <?php if($kelompok->status!=7):?>
                                            <?php if($kelompok->status<6):?>
                                                <div class="timeline_item">
                                                    <div class="timeline_icon timeline_icon_danger"><i class="material-icons">close</i></div>
                                                    <div class="timeline_content">Peserta belum resmi terdaftar Discovery 4</div>
                                                </div>
                                            <?php elseif($kelompok->status==6):?>
                                                <div class="timeline_item">
                                                    <div class="timeline_icon timeline_icon_success"><i class="material-icons">check</i></div>
                                                    <div class="timeline_content">Peserta telah resmi terdaftar Discovery 4, silahkan cek kembali identitas dan proposal yang telah terkirim</div>
                                                </div>
                                            <?php endif;?>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>