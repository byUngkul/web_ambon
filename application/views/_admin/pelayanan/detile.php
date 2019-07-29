<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?> <?= $desa->nama ?>
    <a href="<?= base_url('admin/pelayanan')?>" class="btn btn-primary btn-sm float-right"><span class="fas fa-arrow-left"></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">		 
			
					<table class="table table-hover table-sm">
							<thead class="thead-light">
									<tr>
											<th class="table-active">#</th>
											<th>Jenis Pelayanan</th>
											<th>Nama Pelayanan</th>
											<th><a href="<?= site_url('admin/pelayanan/add_pelayanan/'.$desa_id)?>" title="Tambah Data" class="btn btn-light btn-sm float-right"><span class="fas fa-plus"></span>&nbsp;Tambah</a></th>
									</tr>
							</thead>
							<tbody>
							<?php foreach($dt_pelayanan as $key=>$dt): ?>
								<tr>
									<td><?= $key+1 ?></td>
									<td>
										<?php if($dt['jenis_pelayanan'] == 'perizinan') {echo "Perizinan";} else { echo "Non Perizinan";} ?>
									</td>
									<td><?= $dt['title'] ?></td>
									<td style="text-align: right;">
										<a href="<?= site_url('admin/pelayanan/edit_pelayanan/'.$desa_id.'/'.$dt['id'])?>" title="Edit Data" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></i></a>
										<button href="" class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal" data-target="#Delete<?= $dt['id'] ?>"><i class="fas fa-trash-alt"></i></button>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>							
					</table>
					<!-- End of Table -->
					
    </div>
	</div>
</div>

<!-- Modal Delete Potensi-->
<?php 
$isi = $this->pelayanan_m->get_data()->result_array();
foreach($isi as $key => $dt) :
?>
<div class="modal fade" id="Delete<?= $dt['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Potensi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">Apkah anda yaqin mau Hapus <strong><?= $dt['title'] ?></strong>?</div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?= base_url('admin/pelayanan/delete/'. $desa_id .'/'. $dt['id']) ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>