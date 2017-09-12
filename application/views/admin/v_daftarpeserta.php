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
                                    <?php if($row->status==2):?>
                                    <td><a class="md-btn md-btn-warning" href="<?php echo base_url();?>admin/validasibuktipembayaran?id=<?= $row->id_kelompok;?>">Validasi</a></td>
                                    <?php elseif($row->status>=2):?>
                                        <td><a class="md-btn md-btn-success" href="<?php echo base_url();?>admin/validasibuktipembayaran?id=<?= $row->id_kelompok;?>">Validasi</a></td>
                                    <?php else:?>
                                        <td><a class=" disabled" href="#"><i class="md-icon material-icons">close</i></a></td>
                                    <?php endif?>
                                    <?php if($row->status==5):?>
                                        <td><a class="md-btn md-btn-warning" href="<?php echo base_url();?>admin/validasiproposal?id=<?= $row->id_kelompok;?>">Validasi</a></td>
                                    <?php elseif($row->status>=5):?>
                                        <td><a class="md-btn md-btn-success" href="<?php echo base_url();?>admin/validasiproposal?id=<?= $row->id_kelompok;?>">Validasi</a></td>
                                    <?php else:?>
                                        <td><a class=" disabled" href="#"><i class="md-icon material-icons">close</i></a></td>
                                    <?php endif?>
                                    <td><?= $row->nama_status;?></td>
                                    <td>
                                        <a href="#modal_view<?=$row->id_kelompok?>" data-uk-modal="{center:true'}"><i class="md-icon material-icons">visibility</i></a>
                                        <a href="<?php echo base_url();?>admin/editpeserta?id=<?= $row->id_kelompok?>"><i class="md-icon material-icons">edit</i></a>
                                        <a class="ts_remove_row" onclick="UIkit.modal.confirm('Apakah kamu yakin?', function(){location.href='<?php echo base_url();?>admin/deletepeserta?id=<?= $row->id_user?>' });"><i class="md-icon material-icons">&#xE872;</i></a>
                                    </td>
                                    <div class="uk-modal" id="modal_view<?=$row->id_kelompok?>">
                                        <div class="uk-modal-dialog">
                                            <div class="uk-modal-header">
                                                <h3 class="uk-modal-title">Peserta</h3>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>Username</label>
                                                    <input disabled type="text" value="<?php echo $row->username;?>" class="md-input">
                                                </div>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>Nama Kelompok</label>
                                                    <input disabled type="text" value="<?php echo $row->nama_kelompok;?>" class="md-input">
                                                </div>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled" >
                                                    <label>Asal Instansi</label>
                                                    <input disabled type="text" value="<?php echo $row->asal_instansi;?>" class="md-input">
                                                </div>
                                            </div>
                                                <div class="uk-form-row">
                                                    <div class="md-input-wrapper md-input-filled">
                                                        <label>Nama Ketua</label>
                                                        <input disabled type="text" value="<?php echo $row->nama_ketua;?>" class="md-input">
                                                    </div>
                                                </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>Nama Anggota 1</label>
                                                    <input disabled type="text" value="<?php echo $row->nama_kelompok_1;?>" class="md-input">
                                                </div>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>Nama Anggota 2</label>
                                                    <input disabled type="text" value="<?php echo $row->nama_kelompok_2;?>" class="md-input">
                                                </div>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>Nomor Telpon</label>
                                                    <input disabled type="text" value="<?php echo $row->nomertelpon;?>" class="md-input">
                                                </div>
                                            </div>
                                            <div class="uk-form-row">
                                                <div class="md-input-wrapper md-input-filled">
                                                    <label>E-mail</label>
                                                    <input disabled type="text" value="<?php echo $row->email;?>" class="md-input">
                                                </div>
                                            </div>

                                                <div class="uk-modal-footer uk-text-right">
                                                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                                </div>
                                        </div>
                                    </div>
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