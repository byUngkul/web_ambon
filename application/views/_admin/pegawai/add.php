<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/pegawai')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/pegawai/add')?>" enctype="multipart/form-data" method="post">
      
      <?php echo validation_errors() ?>
      <div class="form-group form-group-sm">
        <label>Nama *</label>
        <input type="text" name="nama" class="form-control form-control-sm col-md-4">
      </div>

      <div class="form-group form-group-sm">
        <label>Nip *</label>
        <input type="text" name="nip" class="form-control form-control-sm col-md-4">
      </div>
      
      <div class="form-group">
        <label>Pemerintahan</label>
        <select name="id_pem" id="id_pem" class="form-control form-control-sm col-md-4">
          <!-- <option value="">Pilih</option> -->
          <?php foreach($desa as $val): ?>
            <option value="<?= $val->desa_id ?>"><?= $val->nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      
      <div class="row">
       <div class="col-md-2">
          <div class="form-group form-group-sm">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control form-control-sm">
          </div>
       </div> 

       <div class="col-md-2">
          <div class="form-group form-group-sm">
            <label>Tgl Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control form-control-sm">        
          </div>
       </div>
      </div>   

      <div class="form-group form-group-sm">
        <label>Jenis Kelamin</label><br>
        
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" value="Laki" name="gender" id="laki" checked>
          <label class="form-check-label" for="laki">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" value="Perempuan" name="gender" id="perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>

      <div class="form-group">
        <label>Agama</label>
        <input type="text" class="form-control form-control-sm col-md-2" name="agama">
      </div>

      <div class="row">
        <div class="col-md-2">
            <div class="form-group">
              <label>Pangkat Golongan</label>
              <input type="text" class="form-control form-control-sm" name="pangkat">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
              <label>Jabatan</label>
              <input type="text" class="form-control form-control-sm" name="jabatan">
            </div>
        </div>
      </div>

      <div class="form-group">
        <label>Urutan</label>
        <input type="number" class="form-control form-control-sm col-sm-2" name="urutan">
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Telp</label>
            <input type="text" class="form-control form-control-sm" name="telp">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>e-mail</label>
            <input type="text" class="form-control form-control-sm" name="email">
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control form-control-sm col-md-3">
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>