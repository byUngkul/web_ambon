<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/jabatan/detile/'.$id_desa)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/jabatan/add')?>" method="post">
      
      <div class="form-group">
        <label class="col-md-2 col-form-label">Nama Jabatan</label>
        <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control form-control-sm col-md-4">
        <?php echo form_error('nama'); ?>
      </div>
      <input type="hidden" name="id_pemerintah" value="<?= $id_desa?>">

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>