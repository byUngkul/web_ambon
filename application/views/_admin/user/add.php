<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-file-alt"></i>
    <?= $title ?>
    <a href="<?= site_url('admin/users')?>" class="btn btn-primary btn-sm float-right"><span><i class="fas fa-arrow-left"></i></span> Kembali</a>
  </div>
  
  <div class="card-body">
    <form action="<?= site_url('admin/users/add') ?>" method="post">
      
      <div class="form-group form-group-sm <?php echo form_error('nama') ? 'has-error' : null?>">
        <label>Nama *</label>
        <input type="text" name="nama" class="form-control form-control-sm col-md-4" value="<?=set_value('nama')?>">
        <?php echo form_error('nama');?>
      </div>

      <div class="form-group form-group-sm <?php echo form_error('username') ? 'has-error' : null?>">
        <label>Username *</label>
        <input type="text" name="username" class="form-control form-control-sm col-md-4" value="<?=set_value('username')?>">
        <?php echo form_error('username');?>
      </div>
           
      <div class="form-group form-group-sm <?php echo form_error('password') ? 'has-error' : null?>">
        <label>Password *</label>
        <input type="password" name="password" class="form-control form-control-sm col-md-4" value="<?=set_value('password')?>">
        <?php echo form_error('password');?>
      </div>

      <div class="form-group form-group-sm <?php echo form_error('passconf') ? 'has-error' : null?>">
        <label>Password Confirm *</label>
        <input type="password" name="passconf" class="form-control form-control-sm col-md-4" value="<?=set_value('passconf')?>">
        <?php echo form_error('passconf'); ?>        
      </div>
          
      <div class="row">
      <div class="col-md-2">
            <div class="form-group">
              <label>Level</label>
              <select name="level" id="level" class="form-control form-control-sm">
                <option value="">Pilih</option>
                <option value="1" <?=set_value('level') == 1 ? 'selected' : null?> >Admin</option>
                <option value="2" <?=set_value('level') == 2 ? 'selected' : null?> >Admin kelurahan</option>
              </select>
              <?php echo form_error('level');?>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
              <label>Active </label>
              <select name="active" id="active" class="form-control form-control-sm">
                <option value="1" <?=set_value('active') == 1 ? 'selected' : null?> >Yes</option>
                <option value="2" <?=set_value('active') == 2 ? 'selected' : null?> >No</option>
              </select>
              <?php echo form_error('active');?>
            </div>
        </div>        
      </div>

      <div class="form-group" id="form-desa">
        <label>Kelurahan/Negeri</label>
        <select name="desa" id="desa" class="form-control form-control-sm col-md-4">
          <option value="">Pilih</option>
          <?php foreach($desas as $desa): ?>
          <option value="<?= $desa->desa_id ?>" ><?= $desa->nama ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-info">
      </div>
    </form>    
  </div>
  
</div>