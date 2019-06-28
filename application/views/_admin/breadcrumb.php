<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?= site_url('admin/main')?>">Dashboard</a>
  </li>
  <?php if (!empty($page)): ?>
  <li class="breadcrumb-item active"><?= $page ?></li>
<?php endif; ?>
</ol>