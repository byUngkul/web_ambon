<!-- Delete Modal-->
<?php foreach($desas as $row): ?>
<div class="modal fade" id="Delete<?= $row->desa_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">Apkah anda yakin mau Hapus kelurahan <strong><?= $row->nama ?></strong> ini?  </div>
        <div class="modal-footer">
          <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('admin/desa/delete/'.$row->desa_id) ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div><?php endforeach; ?>