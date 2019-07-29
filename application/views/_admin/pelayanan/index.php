<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?>
    
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
                <a href="<?= site_url('admin/pelayanan/detile/'.$row->desa_id ) ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>
