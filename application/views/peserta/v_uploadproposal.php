<div id="page_content">
    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">

                <h3 class="heading_a">
                    Tata cara upload proposal
                </h3>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <p>1. Pastikan data <a href="<?php echo base_url();?>peserta/identitas">identitas </a> telah benar</p>
                        <p>2. Ikuti tata aturan yang terdapat pada <a href="<?php echo base_url();?>assets/pedoman/pedoman_penulisan_discovery4.pdf">pedoman penulisan</a></p>
                        <p>3. Upload proposal di tempat yang telah disediakan dengan syarat : file berformat pdf dengan ukuran tidak lebih dari 5 MB</p>
                        <p>4. Format penulisan nama file : [Karya Tulis]_[Nama Tim]_[Nama produk]_[Asal institusi].pdf</p>
                        <p>5. Lihat preview proposal</p>
                        <p>6. Apabila ingin melakukan perubahan terhadap file yang di upload, silahkan ulang kembali tata cara upload dari nomor 1</p>
                        <p>7. Apabila terjadi error, silahkan hubungi kontak Discovery 4 di nomor : 08133664453 (Devi) atau  08234032272(Ainun)</p>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($error)) : ?>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-1-1">
                    <div class="uk-alert uk-alert-danger" data-uk-alert>
                        <a href="#" class="uk-alert-close uk-close"></a>
                        <?= $error;?>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <?php if (isset($sukses)) : ?>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-1-1">
                    <div class="uk-alert uk-alert-success" data-uk-alert>
                        <a href="#" class="uk-alert-close uk-close"></a>
                        <?= $sukses;?>
                    </div>
                </div>
            </div>
        <?php endif;?>
        <div class="md-card">
            <div class="md-card-content">
                <h3 class="heading_a">
                    Upload Proposal
                    <span class="sub-heading">Upload Proposal berformat pdf dengan maksimal ukuran 5 MB</span>
                </h3>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div id="file_upload-drop" class="uk-file-upload">
                            <p class="uk-text">Drop file to upload</p>
                            <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                            <form method="post" action="<?php echo base_url();?>peserta/updateproposal" id="updateproposal" enctype="multipart/form-data">
                                <a class="uk-form-file md-btn">choose file<input id="file_upload-select" name="proposal" onchange="$('#updateproposal').submit()" type="file"></a>
                            </form>
                        </div>
                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                            <div class="uk-progress-bar" style="width:0">0%</div>
                        </div>
                    </div>
                </div>
                <h3 class="heading_a">
                    Preview
                    <span class="sub-heading">Apabila terjadi kesalahan silahkan upload kembali file proposal, lalu tekan save</span>

                </h3>
                <div class="uk-grid">
                    <div class="uk-width-1-1">

                        <a href="<?= (empty($kelompok->proposal))?base_url()."assets/img/no_preview.jpg":base_url()."uploads/proposal/".$kelompok->proposal; ?>" class="uk-text-center md-btn md-btn-large md-btn-primary">Lihat Proposal Yang Tersimpan Saat Ini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>