<!-- Start Informasi area -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <h4>Struktur Organisasi</h4>
      <div id="page_property_vars">
        <div id="orgChartContainer">
          <div id="orgChart"></div>
        </div>
      </div>
    </div>                                                        
</div>

<!-- Modal detile pegawa -->
<?php foreach($orgChart as $dt): ?>
<div class="modal fade" id="detailDataPegawai<?=$dt['id_p']?>" tabindex="-1" role="dialog" aria-labelledby="detailPegawai" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-body"> 
		<div class="row"> 
			<div class="col-md-3">
				<div class="thumbnails">
					<img src="<?= site_url('assets/images/pegawai/'.$dt['image'])?>" class="thumbnail" id="pegawai_photo">
				</div>
			</div>
			<div class="col-md-9"> 
				<h3>Profile <span id="pegawai_jabatan_1"></span></h3>
			 
				<div class="table-responsive">
					<table class="table table-pegawai table-striped table-condensed table-hover">
						<tbody>
							<tr>
								<td>Nama Pegawai</td>
								<td id="pegawai_nama"><?= $dt['nama'] ?></td> 
							</tr>
							<tr>
								<td>NIP</td>
								<td id="pegawai_nip"><?= $dt['nip'] ?></td> 
							</tr>
							<tr>
								<td>Tempat Lahir</td>
								<td id="pegawai_ttl"><?= $dt['tempat_lahir'] ?></td> 
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td id="pegawai_tgl"><?= $dt['tgl_lahir'] ?></td> 
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td id="pegawai_jkl"><?= $dt['jenis_kelamin'] ?></td> 
							</tr>
							<tr>
								<td style="background:#d5d5d5" colspan="2"></td> 
							</tr>
							<tr>
								<td>Jabatan</td>
								<td id="pegawai_jabatan_2"><?= $dt['jabatan'] ?></td> 
							</tr>
							<tr>
								<td>Pangkat / Golongan</td>
								<td id="pegawai_pangkat"><?= $dt['pangkat_golongan'] ?></td> 
							</tr>
							<tr>
								<td style="background:#d5d5d5" colspan="2"></td> 
							</tr>
							 
							<tr>
								<td>Phone</td>
								<td id="pegawai_telepon"><?= $dt['telepon'] ?></td> 
							</tr>
							<tr id="facebook_ok">
								<td>Facebook</td>
								<td id="facebook_link"><?= $dt['facebook'] ?></td> 
							</tr>
							<tr id="instagram_ok">
								<td>Instagram</td>
								<td id="instagram_link"><?= $dt['instagram'] ?></td> 
							</tr>
							
							
						</tbody>
					</table>
				</div>   
			</div>
		</div>  
      </div> 
    </div>
  </div>
</div>
<?php endforeach; ?>