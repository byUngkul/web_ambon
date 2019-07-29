<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "textarea",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
});
</script>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/desa')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/desa/update')?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="desa_id" value="<?= $desa->desa_id ?>">
      
    <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Nama Negeri *</label>
          <input type="text" name="nama" value="<?= $desa->nama ?>" class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Slug *</label>
          <input type="text" name="slug" value="<?= $desa->slug ?>" class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Kategori wilayah</label>
          <select class="form-control form-control-sm" name="kat_wilayah" id="kat_wilayah">
            <option <?php if($desa->kategori_wilayah == 'kelurahan') {echo "selected";} ?> value="kelurahan">Kelurahan</option>
            <option <?php if($desa->kategori_wilayah == 'kecamatan') {echo "selected";} ?> value="kecamatan">Kecamatan</option>
          </select>
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Email *</label>
          <input type="text" name="email" value="<?= $desa->email ?>" class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Alamat *</label>
          <input type="text" name="alamat" value="<?= $desa->alamat ?>" class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Parent site *</label>
          <select class="form-control form-control-sm" name="is_prent_site" id="is_parent_site">
              <option <?php if($desa->is_parent_site == 'yes') {echo "selected";} ?> value="yes">Iya</option>
              <option <?php if($desa->is_parent_site == 'no') {echo "selected";} ?> value="no">Bukan</option>
            </select>
      </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Telphone 1</label>
          <input type="text" name="no_tlp_1" value="<?= $desa->no_telp_1 ?>" class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Telphone 2</label>
          <input type="text" name="no_tlp_2" value="<?= $desa->no_telp_2 ?>" class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-group form-group-sm">
        <label>Profil *</label>
        <textarea name="profile" id="profile" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->profil ?></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Landasan Hukum</label>
        <textarea name="daskum" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->landasan_hukum ?></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Tugas dan Fungsi</label>
        <textarea name="tugasfungsi" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->tugas_fungsi ?></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Visi dan Misi</label>
        <textarea name="visimisi" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->visi_misi ?></textarea>
      </div>
      
      <div class="form-group form-group-sm">
        <label>Keadaan Geografis</label>
        <textarea name="geografis" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"><?= $desa->geografis ?></textarea>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm">
          <label>Peta</label>
          <input type="file" name="peta" class="form-control-file  form-control-sm" >
          <input type="hidden" name="peta_before" value="<?= $desa->peta ?>">
        </div>

        <div class="form-group form-group-sm">
          <label>Logo</label>
          <input type="file" name="logo" class="form-control-file  form-control-sm" >
          <input type="hidden" name="logo_before" value="<?= $desa->logo ?>">
        </div>
      </div>

      

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>