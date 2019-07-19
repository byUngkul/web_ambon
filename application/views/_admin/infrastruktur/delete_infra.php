<!-- Delete Modal-->
<?php 
$isi = $this->infrastruktur_m->get_infra($desa_id, NULL, NULL)->result_array();
foreach($isi as $key => $val) :
?>
<div class="modal fade" id="Delete<?= $val['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Infrastruktur</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">Apkah anda yakin mau Hapus <strong><?= $val['nama_infra'] ?></strong>?</div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?= base_url('admin/infrastruktur/delete_infra/'. $desa_id .'/'. $val['id']) ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>