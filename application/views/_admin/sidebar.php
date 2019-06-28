    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php if($menu == "1") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/main') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?php if($menu == "2") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/Artikel') ?>">
          <i class="fas fa-fw fa-file"></i>
          <span>Artikel</span></a>
      </li>
      <li class="nav-item <?php if($menu == "3") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/kategori') ?>">
          <i class="fas fa-fw fa-th-large"></i>
          <span>Kategori</span></a>
      </li>   

      <li class="nav-item <?php if($menu == "4") {echo "active";} ?>">
        <a class="nav-link" href="<?= site_url('admin/gallery') ?>">
          <i class="fas fa-fw fa-images"></i>
          <span>Gallery</span></a>
      </li>

    <?php if($this->session->userdata('level') == '1'): ?>

      <li class="nav-item dropdown <?php if($menu == "5" || $menu == "6" || $menu == "7" || $menu == "8") { echo "active";} ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Setting</span>
        </a>
        <div class="dropdown-menu <?php if($menu == "5" || $menu == "6" || $menu == "7" || $menu == "8") { echo "show";} ?>" id="" aria-labelledby="#pagesDropdown">
          <a class="dropdown-item <?php if($menu == "5") {echo "active";} ?>" href="<?= site_url('admin/kecamatan') ?>">Profile</a>
          <a class="dropdown-item <?php if($menu == "6") {echo "active";} ?>" href="<?= site_url('admin/desa') ?>">Desa</a>
          <a class="dropdown-item <?php if($menu == "7") {echo "active";} ?>" href="<?= site_url('admin/pegawai') ?>">Pegawai</a>
          <a class="dropdown-item <?php if($menu == "8") {echo "active";} ?>" href="<?= site_url('admin/users') ?>">User</a>
        </div>
      </li>
    <?php else : ?>
      <li class="nav-item <?php if($menu == "5") {echo "active";} ?>">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-images"></i>
          <span>Gallery</span></a>
      </li>
    <?php endif; ?>
    </ul>