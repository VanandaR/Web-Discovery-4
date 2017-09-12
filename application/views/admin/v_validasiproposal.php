<div id="page_content">
    <div id="page_content_inner">
        <h4 class="heading_a uk-margin-bottom">Validasi Proposal</h4>
        <div class="md-card uk-margin-medium-bottom ">
            <div class="md-card-content">
                <form method="post" action="<?php echo base_url();?>admin/updateproposal">
                    <div class="uk-width-1-1 uk-container-center uk-margin-top uk-margin-bottom" >

                        <a href="<?= (empty($kelompok->proposal))?base_url()."assets/img/no_preview.jpg":base_url()."uploads/proposal/".$kelompok->proposal; ?>" class="uk-text-center md-btn md-btn-large md-btn-primary">Lihat Proposal</a>
                    </div>
                    <input type="hidden" class="md-input" type="text" name="id_kelompok" value="<?=$_GET['id'];?>" />
                    <div class=" uk-text-right " style="border-top:1px solid rgba(0,0,0,.12)">
                        <div class=" uk-margin-top">
                            <a href="<?php echo base_url();?>admin/daftarpeserta" class="md-btn md-btn-flat uk-modal-close">Close</a>
                            <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-success" value="6">Setuju</button>
                            <button type="submit" name="validasi" class="md-btn md-btn-flat md-btn-danger" value="7">Tidak Setuju</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>