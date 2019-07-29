<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/jabatan/detile/'.$jabatan->id_desa)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/jabatan/update')?>" method="post">
      
      <div class="form-group">
        <label class="col-md-2 col-form-label">Nama Jabatan</label>
        <input type="text" name="nama" value="<?= $jabatan->nama_jb ?>" class="form-control form-control-sm col-md-4">
        <input type="hidden" name="id" value="<?= $jabatan->id ?>">
        <?php echo form_error('nama'); ?>
      </div>

      <div class="form-group">
        <label class="col-md-2 col-form-label">Pemerintahan</label>
        <input type="text" name="id_pemerintah" value="<?= $jabatan->id_desa?>">
        
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>