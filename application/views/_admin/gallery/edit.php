<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/gallery')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/gallery/update')?>" enctype="multipart/form-data" method="post">
      
      <?php echo validation_errors() ?>
      <input type="hidden" name="id" value="<?= $galery->id ?>">
      <div class="form-group form-group-sm">
        <label>Desa </label>
        <select name="desa_id" id="desa_id" class="form-control form-control-sm col-md-4">
              
            <?php foreach($desas as $desa): ?>
              <option <?php if($galery->desa_id == $desa->desa_id) {echo "selected";} ?> value="<?= $desa->desa_id ?>"><?= $desa->nama ?></option>
            <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group form-group-sm">
        <label>Nama *</label>
        <input type="text" name="nama" class="form-control form-control-sm col-md-4" value="<?= $galery->nama ?>">
      </div>

      <div class="form-group form-group-sm">
        <label>Keterangan *</label>
        <input type="text" name="keterangan" class="form-control form-control-sm col-md-4" value="<?= $galery->keterangan ?>">
      </div>

      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control form-control-sm col-md-3">
        <input type="hidden" name="image_before" value="<?= $galery->image ?>"> <br>
        <img src="<?= site_url('assets/images/galleri/'.$galery->image) ?>" alt="" style="max-width: 200px; height: auto;">
      </div>      

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>

    </form>    
  </div>
  
</div>