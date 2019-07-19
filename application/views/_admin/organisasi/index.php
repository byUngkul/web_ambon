<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-sitemap fa-sm"></i>
    <?= $title ?>
    <!-- <a href="<?= site_url('admin/pegawai/add')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a> -->
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm" id="" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Atasan</th>            
            <th style="width: 150px"> <button class="btn btn-link btn-sm float-right" data-toggle="modal" data-target="#addItem"><i class="fas fa-plus"></i>&nbsp;Tambah</button> </th>
          </tr>
        </thead>
        <?php foreach($orgData->result_array() as $key=>$dt): ?>
          <tr>
            <td><?= $key+1?></td>
            <td><?= $dt['nama'] ?></td>
            <td><?= $dt['nama_jb'] ?></td>
            <td>
              <?php
                if($dt['id_parent'] == 0 || $dt['id_parent'] == NULL) {
                  echo "";
                } else {
                  $atasan = $this->organisasi_m->get_organ($dt['id_parent'])->row_array();
                  echo $atasan['nama_jb'];
                }
              ?>
            </td>
            <td style="text-align: right;">
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editItem<?= $dt['id']?>"><i class="fas fa-edit"></i></button>
              <a href="<?= site_url('admin/organisasi/delete_item/'.$dt['id'])?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $this->load->view('_admin/organisasi/modal_item')?>