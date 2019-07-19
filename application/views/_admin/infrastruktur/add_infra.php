<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/infrastruktur/detile/'.$desa_id)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/infrastruktur/add_infra')?>" method="post">
      
      <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
      <input type="hidden" name="j_infra" value="<?= $j_infra ?>">
      <div class="form-group form-group-sm">
        <label>Nama Infrastruktur</label>
        <input type="text" name="nama_infra"  class="form-control form-control-sm col-md-4" value="<?=set_value('nama_infra')?>">
				<?php echo form_error('nama_infra');?>
      </div>

			<div class="form-group form-group-sm">
        <label>Jumlah</label>
        <input type="text" name="jml_infra"  class="form-control form-control-sm col-md-4" value="<?=set_value('jml_infra')?>">
				<?php echo form_error('jml_infra');?>
			</div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
</div>