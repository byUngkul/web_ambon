<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/desa')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/desa/update')?>" method="post">
      
      <?php echo validation_errors() ?>
      <input type="hidden" name="id" value="<?= $desa->desa_id ?>">

      <div class="form-group form-group-sm">
        <label>Nama Negeri *</label>
        <input type="text" name="nama" value="<?= $desa->nama ?>" class="form-control form-control-sm col-md-8">
      </div>

      <div class="form-group form-group-sm">
        <label>Alamat *</label>
        <input type="text" name="alamat" value="<?= $desa->alamat ?>" class="form-control col-md-4">
      </div>

      <div class="form-group form-group-sm">
        <label>Profil *</label>
        <textarea name="profile" id="profile" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->profil ?></textarea>
      </div>

      

      <div class="form-group form-group-sm">
        <label>Url</label>
        <input type="text" name="url" value="<?= $desa->url ?>" class="form-control col-md-6">
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>