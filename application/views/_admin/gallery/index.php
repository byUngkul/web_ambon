<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/gallery/add')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>

  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Desa</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Date added</th>
            <th style="width: 85px"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php foreach($galery as $row ): ?>
            <tr>
              <td><?= $row->nama_desa ?></td>
              <td><?= $row->nama ?></td>
              <td><?= $row->keterangan ?></td>
              <td><?= $row->date_added ?></td>
              <td>
                <a href="<?= site_url('admin/gallery/edit/'.$row->id)?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#Delete<?= $row->id ?>">
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
<?php // $this->load->view('_admin/artikel/delete'); ?>