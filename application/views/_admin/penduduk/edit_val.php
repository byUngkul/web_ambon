<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/penduduk/detile/'.$desa_id)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/penduduk/update_val')?>" method="post">
      
      <div class="form-group">
        <label class="col-md-2 col-form-label">Kategori</label>
        <input type="text" name="kl_text" value="<?= $value['kl_text'] ?>" class="form-control form-control-sm col-md-4" readonly
      </div>

      <div class="form-group">
        <label class="col-md-2 col-form-label">Laki-laki</label>
        <input type="text" name="laki" value="<?= $value['laki'] ?>" class="form-control form-control-sm col-md-4">
      </div>

      <div class="form-group">
        <label class="col-md-2 col-form-label">Perempuan</label>
        <input type="text" name="perempuan" value="<?= $value['perempuan'] ?>" class="form-control form-control-sm col-md-4">
      </div>

      <div class="form-group">
        <label class="col-md-2 col-form-label">Total</label>
        <input type="text" name="total" value="<?= $value['total'] ?>" class="form-control form-control-sm col-md-4">
      </div>

      <input type="hidden" name="kl_id" value="<?= $value['id'] ?>">
      <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
      
      <div class="form-group">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>