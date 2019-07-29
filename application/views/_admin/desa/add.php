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
    <form action="<?= site_url('admin/desa/add')?>" method="post">
      
      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Nama Negeri *</label>
          <input type="text" name="nama"  class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Slug *</label>
          <input type="text" name="slug"  class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Kategori wilayah</label>
          <select class="form-control form-control-sm" name="kat_wilayah" id="kat_wilayah">
            <option value="kelurahan">Kelurahan</option>
            <option value="kecamatan">Kecamatan</option>
          </select>
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Email *</label>
          <input type="email" name="email"  class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Alamat *</label>
          <input type="text" name="alamat" class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
        <label>Parent site *</label>
        <select class="form-control form-control-sm" name="is_prent_site" id="is_parent_site">
            <option value="yes">Iya</option>
            <option value="no">Bukan</option>
          </select>
      </div>
      </div>

      <div class="form-row">
        <div class="form-group form-group-sm col-md-4">
          <label>Telphone 1</label>
          <input type="text" name="no_tlp_1"  class="form-control form-control-sm">
        </div>

        <div class="form-group form-group-sm col-md-4">
          <label>Telphone 2</label>
          <input type="text" name="no_tlp_2"  class="form-control form-control-sm">
        </div>
      </div>

      <div class="form-group form-group-sm">
        <label>Profil *</label>
        <textarea name="profile" id="profile" class="form-control form-control-sm col-md-4" cols="10" rows="10"></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Landasan Hukum</label>
        <textarea name="daskum" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Tugas dan Fungsi</label>
        <textarea name="tugasfungsi" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Visi dan Misi</label>
        <textarea name="visimisi" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"></textarea>
      </div>
      
      <div class="form-group form-group-sm">
        <label>Keadaan Geografis</label>
        <textarea name="geografis" id="" class="form-control form-control-sm col-md-4" cols="10" rows="10"></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Keadaan Geografis</label>
        <input type="file" name="peta" class="form-control-file  form-control-sm" >
      </div>



      





      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>