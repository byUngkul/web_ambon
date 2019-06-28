<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    Artikel List
    <a href="<?= site_url('admin/desa/add')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Desa</th>
            <th>Alamat</th>
            <th>Profile</th>
            <th>Jumlah Laki-laki</th>
            <th>Jumlah Perempuan</th>
            <th>Total Penduduk</th>
            <th>Url</th>
            <th style="width: 75px"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            $no = 1; 
            foreach($desas as $row):
              $tot_penduduk = $row->jumlah_laki + $row->jumlah_perempuan;
            ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->profil ?></td>
            <td><?= $row->jumlah_laki ?></td>
            <td><?= $row->jumlah_perempuan ?></td>
            <td><?= $tot_penduduk ?></td>
            <td><?= $row->url ?></td>
            <td align="center">
              <a href="<?= site_url('admin/desa/edit/'.$row->desa_id)?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
              <button class="btn btn-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#Delete<?= $row->desa_id ?>">
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>
<?php $this->load->view('_admin/desa/delete'); ?>