<!-- Delete Modal-->
<?php foreach($pegawai as $row): ?>
<div class="modal fade" id="Delete<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">Apkah anda yakin mau Hapus data <strong><?= $row->nama ?></strong> ?  </div>
        <div class="modal-footer">
          <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('admin/pegawai/delete/'.$row->id) ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div><?php endforeach; ?>