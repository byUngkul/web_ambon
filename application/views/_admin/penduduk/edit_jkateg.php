<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/penduduk/detile/'.$desa_id)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/penduduk/update_jkteg')?>" method="post">
      
      <div class="form-group">
        <label class="col-md-2 col-form-label">Kategori</label>
        <input type="text" name="kl_text" value="<?= $value['kl_text'] ?>" class="form-control form-control-sm col-md-4">
      </div>

      <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
      <?php 
        $q = $this->db->get_where('kependudukan_kl', array('kl_text' => $value['kl_text']));
        foreach($q->result() as $row) :
      ?>
      <input type="hidden" name="kl_id[]" value="<?= $row->id ?>">
      <?php endforeach; ?>
      <div class="form-group">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>