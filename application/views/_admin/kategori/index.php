<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    Kategori List
    <a href="<?= site_url('admin/kategori/add') ?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="width: 85px">#</th>
            <th>Nama Kategori</th>
            <th style="width: 100px"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php foreach($categorys as $row): ?>
          <tr>
            <td><?= $row->id ?></td>
            <td><?= $row->name ?></td>
            
            <td align="center">
              <a href="<?= site_url('admin/kategori/edit/'.$row->id)?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
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
<?php $this->load->view('_admin/kategori/delete'); ?>