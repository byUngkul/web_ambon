<div class="card mb-3">
  <div class="card-header">
        <h1><?= $title ?></h1>
</div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/kecamatan/update')?>" enctype="multipart/form-data" method="post">
      
      <?php echo validation_errors() ?>
      <div class="form-group form-group-sm">
        <label>Nama Kecamatan</label>
        <input type="text" name="nama_kec" value="<?= $profile->nama ?>" class="form-control form-control-sm col-md-4">
      </div>
      
      <div class="form-group form-group-sm">
        <label>Alamat Kantor</label>
        <input type="text" name="alamat" value="<?= $profile->alamat_kantor ?>" class="form-control form-control-sm col-md-4">
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group form-group-sm">
            <label>Telp</label>
            <input type="text" name="telp" value="<?= $profile->telp ?>" class="form-control form-control-sm">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group form-group-sm">
            <label>Telp 2</label>
            <input type="text" name="telp2" value="<?= $profile->telp2 ?>" class="form-control form-control-sm">
          </div>
        </div>       
      </div>

      <div class="form-group form-group-sm">
        <label>e-mail</label>
        <input type="text" name="email" value="<?= $profile->email ?>" class="form-control form-control-sm col-md-4">
      </div>     

      <div class="row">
        <div class="col-md-4">
          <div class="form-group form-group-sm">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control form-control-sm">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Logo sekarang</label><br><br>
            <img src="<?= site_url('assets/images/'.$profile->logo) ?>" class="img-fluid img-thumbnail" alt="" style="max-width: 200px; height: auto;">
          </div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>