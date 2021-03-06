<!DOCTYPE html>
<html>
  <head>
    <title>PUSINFOLAHTA TNI</title>
    <link rel="icon" href="assets/images/mabes-logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover" style="background-color:red;"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1 style="font-family: Lato;font-size:28pt;">Dokumen Internal PUSINFOLAHTA TNI</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="auth.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="background-color:red;" name="login">Login <i class="fa fa-sign-in fa-lg"></i></button><br>
            <a href="register.php" style="color:red"><center>Create Account</center></a>
            <p style="font-size:10pt"><center>Copyright 2021 - PUSINFOLAHTA TNI</center></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="assets/js/jquery-2.1.4.min.js"></script>
  <script src="assets/js/essential-plugins.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/plugins/pace.min.js"></script>
  <script src="assets/js/main.js"></script>
</html>
