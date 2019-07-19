<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?>
    <!-- <a href="" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-plus"></i></span> Tambah</a> -->
  </div>
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th style="width: 30px">#</th>
            <th>Pemerintahan</th>                    
            <th style="width: 100px"></th>
          </tr>
        </thead>
        
        <tbody>
          <?php 
            $no = 1;
            foreach($desas as $row): 
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->nama ?></td>
              <td style="text-align: center">
                <a href="<?= site_url('admin/penduduk/detile/'.$row->desa_id ) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                <!-- <button class="btn btn-danger btn-sm" title="Hapus" data-toggle="modal" data-target="">
                  <i class="fas fa-trash-alt"></i>
                </button> -->
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>
