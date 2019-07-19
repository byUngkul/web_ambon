<!-- Modal tambah kategori -->
<div class="modal fade" id="AddKateg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/penduduk/add_kateg') ?>" method="post">
          <div class="form-group">
            <label>Field info</label>
            <input type="text" name="tl_key" class="form-control" placeholder="isi data tanpa spasi" required>
              <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="tl_text" class="form-control" placeholder="isi field utama" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Update kategori -->
<?php foreach($kat_data as $key => $val) : ?>
<div class="modal fade" id="EditKateg<?= $val["tl_key"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/penduduk/update_kateg') ?>" method="post">
          <div class="form-group">
            <label>Field info</label>
            <input type="text" name="tl_key" class="form-control form-control-sm" value="<?= $val["tl_key"] ?>" readonly>
              <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="tl_text" class="form-control form-control-sm" value="<?= $val["tl_text"] ?>" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Delete kategori -->
<?php foreach($kat_data as $key => $val) : ?>
<div class="modal fade" id="DeleteKateg<?= $val["tl_key"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>yakin ingin hapus <?= ucfirst($val["tl_key"]) ?> ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
        <a href="<?= site_url('admin/penduduk/delete_kateg/'. $desa_id .'/'. $val["tl_key"]) ?>" class="btn btn-danger">Delete</a>
      </div>
      
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal tambah title kategori -->
<?php foreach($kat_data as $key => $val): ?>
<div class="modal fade" id="AddTitleKateg<?= $val['tl_key'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/penduduk/add_jkateg') ?>" method="post">
          <div class="form-group">
            <label>Field info</label>
            <input type="text" name="tl_key" class="form-control" value="<?= $val['tl_key'] ?>" readonly>
              <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
          </div>
          <div class="form-group">
            <label>Field ategori</label>
            <input type="text" name="kl_text" class="form-control" placeholder="isi field utama" required>
          </div>
      
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>