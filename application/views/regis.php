
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url()?>assets/index2.html"><b>SPK </b>Sunscreen</a>
  </div>

  <div class="register-box-body">
    <!-- <p class="login-box-msg">Register untuk pengguna baru</p> -->
    
    <form action="" method="post">
      <div class="form-group <?=form_error('fullname') ? 'has-error' : null?> ">
        <input type="text" name="fullname" class="form-control" placeholder="Nama lengkap">
        <?=form_error('fullname')?>
      </div>
      <div class="form-group <?=form_error('username') ? 'has-error' : null?> ">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <?=form_error('username')?>
      </div>
      <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <?=form_error('password')?>
      </div>
      <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
        <input type="password" name="passconf" class="form-control" placeholder="Konfirmasi password" >
        <?=form_error('passconf')?>
      </div>
      <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <?=form_error('email')?>
      </div>
      <div class="form-group">
        <select name="gender" class="form-control">
              <option value="">- Pilih -</option>
              <option value="Laki-laki" <?=set_value('gender') == 'Laki-laki' ? "selected" : null?>>Laki-laki</option>
              <option value="Perempuan" <?=set_value('gender') == 'Perempuan' ? "selected" : null?>>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-flat">Register</button>
      </div>
    </form>

    <a href="<?=site_url('auth/login')?>" class="text-center">Saya sudah memiliki akun</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


</body>
</html>
