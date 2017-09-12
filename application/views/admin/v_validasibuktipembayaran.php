<div id="page_content">
    <div id="page_content_inner">
        <h4 class="heading_a uk-margin-bottom">Edit Data Training</h4>
        <div class="md-card uk-margin-medium-bottom ">
            <div class="md-card-content">
                <form method="post" action="<?php echo base_url();?>admin/updatebuktipembayaran">
                    <div class="uk-width-2-3 uk-container-center uk-margin-top uk-margin-bottom" >
                        <img id="preview_bukti_pembayaran" src="<?= (empty($kelompok->bukti_bayar))?base_url()."assets/img/no_preview.jpg":base_url()."uploads/buktipembayaran/".$kelompok->bukti_bayar; ?>"  />
                    </div>
                    <input type="hidden" class="md-input" type="text" name="id_kelompok" value="<?=$_GET['id'];?>" />

                        <div class=" uk-text-right " style="border-top:1px solid rgba(0,0,0,.12)">
                            <div class=" uk-margin-top">
                                <a href="<?php echo base_url();?>admin/daftarpeserta" class="md-btn md-btn-flat uk-modal-close">Close</a>

                                <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-success" value="4">Setuju</button>
                                <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-danger" value="3">Tidak Setuju</button>
                            </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>