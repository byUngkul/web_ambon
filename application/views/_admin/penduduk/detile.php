<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt fa-lg"></i>
    <?= $title ?> <?= $desas->nama ?>
    <a href="<?= site_url('admin/penduduk/')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <?php 
        // cek kecamatan atau bukan
        if ($desas->is_parent_site == 'yes') :
      ?>
        <table class="table table-hover table-sm" width="100%">
          <caption>
            Category Data Kependudukan
            <button class="btn btn-default btn-sm float-right" data-toggle="modal" data-target="#AddKateg" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</button>
          </caption>
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Field info</th>
              <th>Kategori</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($kat_data as $key => $val) :
            ?>
              <tr>
                <td class="table-active"><?= $key+1 ?></td>
                <td><?= $val['tl_key'] ?></td>
                <td><?= $val['tl_text'] ?></td>
                <td style="text-align: right;" >
                  <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#EditKateg<?= $val["tl_key"] ?>" title="Update Data"><i class="fas fa-edit"></i> Edit</button>
                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteKateg<?= $val["tl_key"] ?>" title="Delete Data"><i class="fas fa-trash-alt"></i> Delete</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <?php foreach($kat_data as $key => $val) :?>
          <table class="table table-hover table-sm" width="100%">
            <caption>
              Data <?= ucfirst($val['tl_key']) ?>
              <button class="btn btn-default btn-sm float-right" data-toggle="modal" data-target="#AddTitleKateg<?= $val['tl_key'] ?>" title="Tambah Data"><i class="fas fa-plus"></i> Tambah</button>
            </caption>
            <thead class="thead-light">
              <tr>
                <th width="50px">#</th>
                <th width="200px">&nbsp;</th>
                <th><?= $val['tl_text'] ?></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $isinya = $this->penduduk_m->get_kateg(NULL, $val['tl_key'], NULL)->result_array();
                // var_dump($isinya);
                foreach($isinya as $key => $row):
              ?>
                <tr>
                  <td class="table-active"><?= $key+1 ?></th>
                  <td><?= ucfirst($val['tl_key']) ?></td>
                  <td><?= $row['kl_text'] ?></td>
                  <td style="text-align: right;">
                    <a href="<?= site_url('admin/penduduk/edit_jkateg/'.$desa_id.'/'.$row['kl_text'])?>" class="btn btn-success btn-sm" title="Update Data"><i class="fas fa-edit"></i> Edit</a>
                    <a href="<?= site_url('admin/penduduk/delete_jkateg/'.$desa_id.'/'.$row['kl_text'])?>" class="btn btn-danger btn-sm" title="Delete Data"><i class="fas fa-trash-alt"></i> Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endforeach;?>

      <?php else : ?>
        
        <?php 
          
          $q = $this->db->get_where('kependudukan_tl', array('id_desa' => $desa_id));
          foreach($q->result_array() as $key => $kat) :
          ?>
          <table class="table table-hover table-sm" width="100%">
          <caption>Data <?= ucfirst($kat['tl_key']) ?></caption>
            <thead class="thead-light">
              <tr>
                <th width="50px">#</th>
                <th width="200px"></th>
                <th><?= $kat['tl_text']?></th>
                <th>Laki-laki</th>
                <th>Perempuan</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
              $this->db->where('id_desa', $desa_id);
              $this->db->where('tl_key', $kat['tl_key']);

              $qry = $this->db->get('kependudukan_kl')->result_array();
              // var_dump($qry);
              foreach($qry as $key => $val) :
            ?>
                <tr>
                  <td class="table-active"><?= $key+1 ?></td>
                  <td><?= ucfirst($kat['tl_key']) ?></td>
                  <td><?= $val['kl_text'] ?></td>
                  <td><?php if(!empty($val['laki'])) { echo $val['laki']; } else { echo "0"; } ?></td>
                  <td><?php if(!empty($val['perempuan'])) { echo $val['perempuan']; } else { echo "0"; } ?></td>
                  <td><?php if(!empty($val['total'])) { echo $val['total']; } else { echo "0"; } ?></td>
                  <td style="text-align: right;">
                    <a href="<?= site_url('admin/penduduk/edit_val/'.$desa_id.'/'.$val['id'])?>" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                    <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> -->
                  </td>
                </tr>
            <?php endforeach; ?>
            
            </tbody>
          </table>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php $this->load->view('_admin/penduduk/modal_kateg') ?>