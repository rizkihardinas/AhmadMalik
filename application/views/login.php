<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 11:06:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Vapes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('assets/') ?>index2.html"><b>Smart </b>Vapes</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session <?php echo $this->session->userdata("name"); ?> <?php echo $this->session->userdata("status"); ?></p>

      <div id="gagal" style="color:red; display: none;">Username atau Password Salah</div>
      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usename"  id="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"  id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="btnLogin">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<script type="text/javascript">
  $(document).on( "click","#btnLogin", function() {
        
            var username = $('#username').val();
            var password = $('#password').val();
            var data = {
                username:username,
                password:password
            };
         $.ajax(
          {
            url:'<?php echo base_url() ?>login/aksi_login',
            type: "POST",
            data : data,
            success: function(data)
            {
              if (data == 1) {
                window.location.href = "<?php echo base_url() ?>dashboard";
              }else{
                document.getElementById('gagal').style.display = 'block';
              }

            }
        });
    });
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Oct 2020 11:06:27 GMT -->
</html>
