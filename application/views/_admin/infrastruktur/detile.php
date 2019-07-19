<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?> <?= $desa->nama ?>
    <a href="<?= base_url('admin/infrastruktur')?>" class="btn btn-primary btn-sm float-right"><span class="fas fa-arrow-left"></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
	<button class="btn btn-secondary btn-sm" title="Tambah Jenis Infrastruktur" data-toggle="modal" data-target="#AddJenis"><span class="fas fa-plus"></span> Jenis Infrastruktur</button><br><br>
			<?php foreach($infra as $jenis_infra): ?> 
			
					<table class="table table-hover table-sm">

						<caption><?= $jenis_infra['jenis_infra']?><a href="<?= site_url('admin/infrastruktur/add_infra/'.$desa_id.'/'.$jenis_infra['id_infra']); ?>" class="btn btn-default btn-sm float-right" title="Tambah <?= $jenis_infra['jenis_infra']?>"><i class="fas fa-plus"></i> Tambah</a></caption>
							<thead class="thead-light">
									<tr>
											<th class="table-active">#</th>
											<th>Jenis Infrastruktur</th>
											<th>Nama Infrastruktur</th>
											<th style="text-align: center;">Jumlah</th>
											<th></th>
									</tr>
							</thead>
							<tbody>
							<?php
									// looping buat isi
									$isi = $this->infrastruktur_m->get_infra($desa_id, $jenis_infra['jenis_infra'], NULL)->result_array();
									foreach($isi as $key => $val) :
							?>
									<tr>
											<td class="table-active"><?= $key+1 ?></td>
											<td><?= $val['jenis_infra'] ?></td>
											<td><?= $val['nama_infra'] ?></td>
											<td style="text-align: right;"><?= $val['value'] ?></td>
											<td style="text-align: right;">
												<a href="<?= site_url('admin/infrastruktur/edit_infra/'.$desa_id.'/'.$val['id']); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
												<button class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal" data-target="#Delete<?= $val['id'] ?>"><i class="fas fa-trash-alt"></i></button>
											</td>
									</tr>
							
							<?php endforeach; ?>
							</tbody>
							
					</table>
					<!-- End of table -->
					
					<?php $this->load->view('_admin/infrastruktur/delete_infra'); ?>
			<?php endforeach; ?>
    </div>
	</div>
</div>

<?php $this->load->view('_admin/infrastruktur/add_type'); ?>