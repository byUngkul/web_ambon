<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/pegawai/add')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a>
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Golongan</th>
            <th>Jabatan</th>            
            <th style="width: 75px"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            $no = 1; 
            foreach($pegawai as $row):
              // $tot_penduduk = $row->jumlah_laki + $row->jumlah_perempuan;
            ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->nip ?></td>
            <td><?= $row->pangkat_golongan ?></td>
            <td><?= $row->jabatan ?></td>
            <td align="center">
              <a href="<?= site_url('admin/pegawai/edit/'.$row->id) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
              <button class="btn btn-danger btn-sm" title="Hapus" data-toggle="modal" data-target="#Delete<?= $row->id ?>">
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>
