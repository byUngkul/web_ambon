<!-- Add item Modal-->
<div class="modal fade" id="addItem" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah item</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?= base_url('admin/organisasi/add_item') ?>" method="post">
            <div class="form-group">
                <label>Pegawai</label>
                <select name="id_peg" id="id_peg" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtPeg = $this->pegawai_m->get_all_pegawai();
                    // echo json_encode($dtPeg);
                    foreach($dtPeg as $row):
                  ?>
                  <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="id_j" id="id_j" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtJabat= $this->jabatan_m->get_jabatan()->result();
                    // echo json_encode($dtPeg);
                    foreach($dtJabat as $row):
                  ?>
                  <option value="<?= $row->id ?>"><?= $row->nama_jb ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Atasan</label>
                <select name="id_parent" id="id_parent" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    foreach($orgData->result() as $row):
                  ?>
                  <option value="<?= $row->id ?>"><?= $row->nama_jb ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Pemerintahan</label>
                <select name="id_pem" id="id_pem" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtPem= $this->desas_m->get_all_desas();
                    // echo json_encode($dtPeg);
                    foreach($dtPem as $row):
                  ?>
                  <option value="<?= $row->desa_id ?>"><?= $row->nama ?></option>
                  <?php endforeach; ?>
                </select>
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

  <!-- Update item Modal-->
  <?php foreach($orgData->result_array() as $key=>$dt): ?>
  <div class="modal fade" id="editItem<?= $dt['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah item</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="<?= base_url('admin/organisasi/edit_item') ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $dt['id'] ?>">
                <label>Pegawai</label>
                <select name="id_peg" id="id_peg" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtPeg = $this->pegawai_m->get_all_pegawai();
                    // echo json_encode($dtPeg);
                    foreach($dtPeg as $row):
                  ?>
                  <option value="<?= $row->id ?>" <?php if($dt['id_p'] == $row->id) {echo "selected";}?> ><?= $row->nama ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="id_j" id="id_j" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtJabat= $this->jabatan_m->get_jabatan()->result();
                    // echo json_encode($dtPeg);
                    foreach($dtJabat as $row):
                  ?>
                  <option value="<?= $row->id ?>" <?php if($dt['id_j'] == $row->id) {echo "selected";}?> ><?= $row->nama_jb ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Atasan</label>
                <select name="id_parent" id="id_parent" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    foreach($orgData->result() as $row):
                  ?>
                  <option value="<?= $row->id ?>" <?php if($dt['id_parent'] == $row->id) {echo "selected";}?> ><?= $row->nama_jb ?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Pemerintahan</label>
                <select name="id_pem" id="id_pem" class="form-control form-control-sm">
                  <option value="">pilih</option>
                  <?php 
                    $dtPem= $this->desas_m->get_all_desas();
                    // echo json_encode($dtPeg);
                    foreach($dtPem as $row):
                  ?>
                  <option value="<?= $row->desa_id ?>" <?php if($dt['id_desa'] == $row->desa_id) {echo "selected";}?> ><?= $row->nama ?></option>
                  <?php endforeach; ?>
                </select>
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