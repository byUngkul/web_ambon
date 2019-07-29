    <?php
      $desa_id = $this->session->userdata('desaid');
    ?>
    
    <ul class="sidebar navbar-nav">
      <?php
        $menu = $this->menu->parent_menu();
        if ($menu->num_rows() > 0) {
          foreach ($menu->result() as $row) {
            $menu_child = $this->menu->child_menu($row->menuid);
            $link_act = $this->uri->segment(1).'/'.$this->uri->segment(2);
            $active = ($link_act==$row->menulink)?'active':'';
            
              if ($menu_child->num_rows() > 0) {
                echo "
                  <li class='nav-item dropdown ".$active."'>
                    <a class='nav-link dropdown-toggle ' href='javascript:;' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='false' aria-expanded='true'>
                      <i class='fas fa-fw ".$row->menuicon."'></i>
                      <span>".$row->menuname."</span>
                    </<a>
                    <div class='dropdown-menu' id='' aria-labelledby='#pagesDropdown'>
                  ";
                // if($menu_child->num_rows() > 0){
                    
                    foreach ($menu_child->result() as $mchld) {
                      echo "
                          <a class='dropdown-item' href='".base_url()."$mchld->menulink'><span class='fas fa-angle-double-right'></span> ".$mchld->menuname."</a>   
                      ";
                    }
                  // }
                  echo "</div>";
                echo "</li>";
              } else {
                echo "
                  <li class='nav-item ".$active."'>
                    <a class='nav-link' href='".base_url()."$row->menulink'>
                      <i class='fas ".$row->menuicon."'></i>
                      <span>".$row->menuname."</span>
                    </a>
                  </li>
                ";
              }              
          }
        }
      ?>
    
      <!-- <li class="nav-item <?php if($menu == "1") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/main') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li> -->
      <!-- <li class="nav-item <?php if($menu == "2") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/Artikel') ?>">
          <i class="fas fa-fw fa-file"></i>
          <span>Kegiatan</span></a>
      </li> -->
      <?php if($this->session->userdata('level') == '1'): ?>
        <!-- <li class="nav-item <?php if($menu == "4") {echo "active";} ?>">
          <a class="nav-link" href="<?= site_url('admin/jabatan') ?>">
            <i class="fas fa-fw fa-medal"></i>
            <span>Jabatan</span></a>
        </li>

        <li class="nav-item <?php if($menu == "7") {echo "active";} ?>">
          <a class="nav-link" href="<?= site_url('admin/pegawai') ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Pegawai</span></a>
        </li>
      

        <li class="nav-item <?php if($menu == "11") {echo "active";} ?>">
          <a class="nav-link" href="<?= site_url('admin/organisasi')?>">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Strutur Organisasi</span></a>
        </li> -->
      <?php endif; ?>
      <!-- <li class="nav-item <?php if($menu == "9") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/penduduk')?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Kepndudukan</span></a>
      </li>

      <li class="nav-item <?php if($menu == "3") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/potensi')?>">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Potensi</span></a>
      </li>

      <li class="nav-item <?php if($menu == "10") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/infrastruktur')?>">
          <i class="fas fa-fw fa-building"></i>
          <span>Infrastruktur</span></a>
      </li> -->

    <?php if($this->session->userdata('level') == '1'): ?>

      <li class="nav-item dropdown <?php if($menu == "5" || $menu == "6" || $menu == "8") { echo "active";} ?>">
        <!-- <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Setting</span>
        </a> -->
        <div class="dropdown-menu <?php if($menu == "5" || $menu == "6" || $menu == "7" || $menu == "8") { echo "show";} ?>" id="" aria-labelledby="#pagesDropdown">
          <!-- <a class="dropdown-item <?php if($menu == "5") {echo "active";} ?>" href="<?= site_url('admin/kecamatan') ?>">Profile</a> -->
          <a class="dropdown-item <?php if($menu == "6") {echo "active";} ?>" href="<?= site_url('admin/desa') ?>">Pemerintahan</a>
          <a class="dropdown-item <?php if($menu == "8") {echo "active";} ?>" href="<?= site_url('admin/users') ?>">User</a>
        </div>
      </li>
    <?php else : ?>
      <!-- <li class="nav-item <?php if($menu == "5") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/users/edit/'.$this->session->userdata('userid'))?>">
          <i class="fas fa-cogs"></i>
          <span>Ganti Password</span></a>
      </li> -->
    <?php endif; ?>
    </ul>