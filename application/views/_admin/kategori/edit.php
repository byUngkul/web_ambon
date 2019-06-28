<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/kategori')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/kategori/update')?>" enctype="multipart/form-data" method="post">
      
      <input type="hidden" name="id" value="<?= $category->id; ?>">
      <div class="form-group form-group-sm">
        <label>Nama Katgeori</label>
        <input type="text" name="name" class="form-control" value="<?= $category->name; ?>"
        <?php echo validation_errors() ?>
      </div>
      
      <div class="form-group">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>