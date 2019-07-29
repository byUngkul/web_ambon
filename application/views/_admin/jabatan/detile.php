<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/jabatan/add/'.$id_desa)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Pemerintahan</th>            
            <th style="width: 100px">&nbsp;</th>
          </tr>
        </thead>
        
        <tbody>
          <?php foreach($jabatan as $key => $row): ?>
          <tr>
            <td><?= $key+1 ?></td>
            <td><?= $row->nama_jb ?></td>
            <td><?= $row->nama?></td>
            <td style="text-align: center;">
              <a href="<?= site_url('admin/jabatan/edit/'.$row->id) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
              <button class="btn btn-danger btn-sm" title="Hapus <?= $row->nama_jb?>" data-toggle="modal" data-target="#Delete<?= $row->id ?>">
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
<?php $this->load->view('_admin/jabatan/delete'); ?>
