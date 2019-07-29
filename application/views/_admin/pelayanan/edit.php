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
    <a href="<?= site_url('admin/potensi/detile/'.$desa_id)?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/pelayanan/edit_pelayanan')?>" method="post">
      
      <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
      <input type="hidden" name="id" value="<?= $pelayanan["id"] ?>">
      <div class="form-group form-group-sm">
        <label>Jenis Pelayanan</label>
        <select class="form-control form-control-sm col-md-4" name="jenis_pelayanan" id="" autofocus>
          <option value="">&nbsp;Pilih</option>
          <option value="perizinan" <?php if($pelayanan["jenis_pelayanan"] == 'perizinan') {echo "selected";} ?>>Perizinan</option>
          <option value="non_perizinan" <?php if($pelayanan["jenis_pelayanan"] == 'non_perizinan') {echo "selected";} ?>>Non Perizinan</option>
        </select>
        <?php echo form_error('jenis_pelayanan');?>
      </div>

      <div class="form-group form-group-sm">
        <label>Title Pelayanan</label>
        <input type="text" name="title"  class="form-control form-control-sm col-md-4" value="<?= $pelayanan["title"] ?>">
				<?php echo form_error('title');?>
      </div>

      <div class="form-group form-group-sm">
        <label>Deskripsi</label>
        <textarea name="deskripsi" id="" cols="30" rows="10">
        <?= $pelayanan["deskripsi"]?>
        </textarea>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
</div>