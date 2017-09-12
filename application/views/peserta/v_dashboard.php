<div id="page_content">

    <div id="page_content_inner">
        <div class="md-card uk-width-medium-6-10 uk-container-center">
            <div class="md-card-content">

                <h3>
                    Selamat datang, <?= $_SESSION['username']?>
                </h3>
            </div>
        </div>
        <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
            <div class="uk-width-medium-6-10 uk-container-center">
                <div class="md-card">

                    <div class="md-card-content">
                        <h3 class="heading_a uk-margin-bottom">Timeline</h3>
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