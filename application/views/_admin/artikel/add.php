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
    selector: "#body",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/artikel')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/artikel/add')?>" enctype="multipart/form-data" method="post">
      
      <?php echo validation_errors() ?>
      <div class="form-group form-group-sm">
        <label>Title</label>
        <input type="text" name="title" placeholder="Judul Artikel" class="form-control form-control-sm col-md-8">
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Kategory Artikel</label>
            <select class="form-control form-control-sm" name="category">
                <option value="">Pilh Kategori</option>
              <?php foreach($category as $key): ?>
                <option value="<?= $key->id ?>"><?= $key->name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Desa / Kelurahan</label>
            <select class="form-control form-control-sm" name="desa">
                <!-- <option value="">Pilh Kategori</option> -->
                <?php foreach($desas as $desa): ?>
                  <option value="<?= $desa->desa_id ?>"><?= $desa->nama ?></option>
                <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group form-group-sm">
        <label>Content</label>
        <textarea name="body" id="body" class="form-control form-control-sm" cols="30" rows="10"></textarea>
      </div>

      <div class="form-group form-group-sm">
        <label>Image</label>
        <input class="form-control-file" type="file" name="image" >
      </div>

      <div class="form-group form-group-sm">
        <label>Publish</label>
        <select name="publish" id="publish" class="form-control form-control-sm col-md-2">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>