<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/backend/css/sb-admin.css" rel="stylesheet">

  <style>
    .login-title {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-weight: bold;
      font-size: 15vw;
      color: azure;
    }
  </style>

</head>

<body class="bg-dark">
  &nbsp;
  <div class="container">
    <div class="row">
      <div class="mx-auto mt-5">
        <div class="login-title">
          <h3 class="font-weight-bold">Kecamatan <?= $kecamatan ?> - Administrator</h3>
        </div>          
      </div>
    </div>
    &nbsp;
    <div class="card card-login mx-auto mt-2">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?= site_url('auth/login_prosess') ?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>

          <!-- <a class="btn btn-primary btn-block" href="">Login</a> -->
          <button type="submit" name="login" class="btn btn-primary btn-block">Sign-in</button>
        </form>
        
      </div>

      <div class="card-footer">
          
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>