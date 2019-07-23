<?php
$desa_id = $this->session->userdata('desaid');
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/users')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/users/privilege') ?>" method="post">
      
      <div class="form-group form-group-sm <?php echo form_error('nama') ? 'has-error' : null?>">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control form-control-sm col-md-4" value="<?= $user->name ?>" readonly>
        <input type="hidden" name="user_id" value="<?= $user->user_id ?>">
        <?php echo form_error('nama');?>
      </div>

      <div class="form-group form-group-sm <?php echo form_error('username') ? 'has-error' : null?>">
        <label>Username</label>
        <input type="text" name="username" class="form-control form-control-sm col-md-4" value="<?= $user->username ?>" readonly>
        <?php echo form_error('username');?>
      </div>
      <h4>Hak Akses</h4>
      <?php foreach($menu as $menus): ?>
        <h5 class="font-weight-normal"><?= $menus->menuname ?></h5><hr>
        <?php 
          $resrc = $this->menu->get_resource($menus->menuid)->result_array();
          foreach($resrc as $res):
        ?>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="akses[]" value="<?= $res['id_resource'] ?>">
            <label class="form-check-label" for="inlineCheckbox1"><em><?= $res['nama_resource'] ?></em></label>
          </div>
        <?php endforeach; ?>
      <?php endforeach; ?>

      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
        <button type="reset" name="reset" class="btn btn-info">Cancel</button>
      </div>
    </form>    
  </div>
  
</div>