<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/potensi/detile/'.$desa_id)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/potensi/update_potensi')?>" method="post">
      
      <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
      <input type="hidden" name="id_potensi" value="<?= $potensi_v["id"]?>">
      <div class="form-group form-group-sm">
        <label>Nama Potensi</label>
        <input type="text" name="nama_potensi"  class="form-control form-control-sm col-md-4" value="<?= $potensi_v["nama_p"]?>">
				<?php echo form_error('nama_potensi');?>
      </div>
      

      <div class="form-group">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
</div>