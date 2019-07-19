<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?> <?= $desa->nama ?>
    <a href="<?= base_url('admin/potensi')?>" class="btn btn-primary btn-sm float-right"><span class="fas fa-arrow-left"></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
		<button class="btn btn-secondary btn-sm " title="Tambah Jenis Potensi" data-toggle="modal" data-target="#AddJenis"><span class="fas fa-plus"></span> Jenis Potensi</button><br><br>
			<?php foreach($j_potensi as $j_potensi): ?> 
			
					<table class="table table-hover table-sm">
						<caption><?= $j_potensi['nama']?><a href="<?= site_url('admin/potensi/add_potensi/'.$desa_id.'/'.$j_potensi['id_jp']); ?>" class="btn btn-default btn-sm float-right" title="Tambah <?= $j_potensi['nama']?>"><i class="fas fa-plus"></i> Tambah</a></caption>
							<thead class="thead-light">
									<tr>
											<th class="table-active">#</th>
											<th>Jenis Potensi</th>
											<th>Nama Potensi</th>
											<th></th>
									</tr>
							</thead>
							<tbody>
							<?php
									// looping buat isi
									$isi = $this->potensi_m->get_potensi($desa_id, $j_potensi['id_jp'], NULL)->result_array();
									foreach($isi as $key => $val) :
							?>
									<tr>
											<td class="table-active"><?= $key+1 ?></td>
											<td><?= $val['nama_jp']?></td>
											<td><?= $val['nama_p']?></td>
											<td style="text-align: right;">
												<a href="<?= site_url('admin/potensi/edit_potensi/'.$desa_id.'/'.$val['id']); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
												<button class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal" data-target="#Delete<?= $val['id'] ?>"><i class="fas fa-trash-alt"></i></button>
											</td>
									</tr>
							
							<?php endforeach; ?>
							</tbody>							
					</table>
					<!-- End of Table -->
					<?php $this->load->view('_admin/potensi/delete_potensi'); ?>
			<?php endforeach; ?>
    </div>
	</div>
</div>

<?php $this->load->view('_admin/potensi/add_type'); ?>