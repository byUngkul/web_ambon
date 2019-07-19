<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    Kategori List
    <a href="<?= site_url('admin/users/add') ?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th style="width: 30px">#</th>
            <th>Nama</th>
            <th>Username</th>
            <th style="width: 100px"></th>
          </tr>
        </thead>
                
        <tbody>
        <?php 
          $no = 1;
          foreach($user->result() as $row): 
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->name ?></td>
            <td><?= $row->username ?></td>
            <td align="center">
              <a href="<?= site_url('admin/users/edit/'.$row->user_id) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
              <button class="btn btn-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#Delete<?= $row->user_id ?>">
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
<?php $this->load->view('_admin/user/delete'); ?>