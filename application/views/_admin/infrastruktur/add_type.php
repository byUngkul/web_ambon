<!-- Add Jenis Infrastruktur Modal-->

<div class="modal fade" id="AddJenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tamabah Jenis Infrastruktur</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?= base_url('admin/infrastruktur/add_jenis') ?>" method="post">
            <div class="form-group">
                <label>Jenis Infrastruktur</label>
                <input type="text" name="jenis_infra" class="form-control" required>
                <input type="hidden" name="desa_id" value="<?= $desa_id ?>">
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