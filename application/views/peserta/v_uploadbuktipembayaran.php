
<script>
    function preview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview_bukti_pembayaran').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<div id="page_content">

    <div id="page_content_inner">
        <div class="md-card">
            <div class="md-card-content">

                <h3 class="heading_a">
                    Tata cara upload bukti pembayaran
                </h3>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <p>1. Upload bukti pembayaran di tempat yang telah disediakan dengan syarat : file berformat jpg/png dengan ukuran tidak lebih dari 100 KB</p>
                        <p>2. Lihat preview bukti pembayaran</p>
                        <p>3. Apabila ingin melakukan perubahan terhadap file yang di upload, silahkan ulang kembali tata cara upload dari nomor 1</p>
                        <p>4. Bukti pembayaran yang tersimpan di database akan muncul di preview</p>
                        <p>5. Apabila terjadi error, silahkan hubungi kontak Discovery 4 di nomor : 08133664453 (Devi) atau  08234032272(Ainun)</p>
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
                    Upload Bukti Pembayaran
                    <span class="sub-heading">Pembayaran dapat dilakukan di Bank BNI : 039390095 a/n Ainun Khofiyatin atau Bank BRI : 611801000177507 a/n Chartin Wulan A</span>
                </h3>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div id="file_upload-drop" class="uk-file-upload">
                            <p class="uk-text">Drop file to upload</p>
                            <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                            <form method="post" action="<?php echo base_url();?>peserta/updatebuktipembayaran" id="updatebuktipembayaran" enctype="multipart/form-data">
                                <a class="uk-form-file md-btn">choose file<input id="file_upload-select" name="bukti_pembayaran" onchange="$('#updatebuktipembayaran').submit()" type="file"></a>
                            </form>
                        </div>
                        <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                            <div class="uk-progress-bar" style="width:0">0%</div>
                        </div>
                    </div>
                </div>
                <h3 class="heading_a">
                    Preview
                    <span class="sub-heading">Preview Bukti Pembayaran</span>
                    <div class="uk-width-2-3 uk-container-center uk-margin-top uk-margin-bottom" >
                        <img id="preview_bukti_pembayaran" src="<?= (empty($kelompok->bukti_bayar))?base_url()."assets/img/no_preview.jpg":base_url()."uploads/buktipembayaran/".$kelompok->bukti_bayar; ?>"  />
                    </div>

                </h3>
            </div>
        </div>

    </div>

</div>
