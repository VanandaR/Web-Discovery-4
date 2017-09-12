<div id="page_content">
    <div id="page_content_inner">
        <form action="" class="uk-form-stacked" id="user_edit_form">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-8-10">
                    <div class="md-card uk-margin-medium-bottom">
                        <div class="md-card-content">
                            <table id="dt_default" class="uk-table" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Nama Kelompok</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Proposal</th>
                                    <th>Status Peserta</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=1;
                                foreach ($kelompok as $row):

                                    ?>
                                    <tr>
                                        <td><?= $i;?></td>
                                        <td><?= $row->username;?></td>
                                        <td><?= $row->nama_kelompok;?></td>
                                        <td><a class="md-btn md-btn-warning" href="<?php echo base_url();?>admin/validasibuktipembayaran?id=<?= $row->id_kelompok;?>">Reset Password</a></td>
                                        <td><?= $row->nama_status;?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                endforeach;
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-2-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom" style="border-bottom:1px solid rgba(0,0,0,.12); padding-bottom:10px">Total Tim</h3>
                            <h1 style="text-align:center;font-size: 60px"><?= count($kelompok); ?></h1>
                        </div>
                    </div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_c uk-margin-medium-bottom" style="border-bottom:1px solid rgba(0,0,0,.12); padding-bottom:10px">Berhasil Registrasi</h3>
                            <h1 style="text-align:center;font-size: 60px"><?= count($berhasilregistrasi); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>