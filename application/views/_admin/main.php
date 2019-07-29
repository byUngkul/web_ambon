<?php
  // if (!$this->ion_auth->logged_in())
  // {
  //   // redirect them to the login page
  //   redirect('auth/login', 'refresh');
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view('_admin/header'); ?>

</head>

<body id="page-top">
  <!-- nav -->
  <?php $this->load->view('_admin/nav'); ?>
  

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('_admin/sidebar'); ?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view('_admin/breadcrumb'); ?>

        <!-- Flash messages -->
        <?php if($this->session->flashdata('post_updated')): ?>
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?>
        
        <!-- DataTables Example -->
        <?php $this->load->view($content); ?>
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © <?= $kecamatan->nama ?> 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view('_admin/modal'); ?>
  
  <!-- Javascript plugin -->
  <?php $this->load->view('_admin/js'); ?>
  

  <script type="text/Javascript">
    $('#form-desa').hide();

    $('#level').change(function(){
      if($(this).val() == '2'){
        $('#form-desa').show();
      } else {
        $('#form-desa').hide();
      }

      $('#form-desa select').val();
    });
  </script>
</body>

</html>
