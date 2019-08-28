<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <meta property="og:title" content="Login - Japfa Foundation">
  <meta property="og:description" content="Japfa Foundation" />
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo base_url();?>assets/Images/icon.png">
  <title>Login - Japfa Foundation</title>
  <link href="<?php echo base_url();?>assets/Images/icon.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dashboard/css/style.css">
  <link href="//db.onlinewebfonts.com/c/e8c6a63541de0a4211a9358cbe74690f?family=Futura" rel="stylesheet" type="text/css"/>
  <script src="<?php echo base_url();?>assets/dashboard/modules/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/dashboard/modules/popper.js"></script>
  <script src="<?php echo base_url();?>assets/dashboard/modules/tooltip.js"></script>
  <script src="<?php echo base_url();?>assets/dashboard/modules/bootstrap/js/bootstrap.min.js"></script>
  <!-- CDN -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style type="text/css">
body{
 background: url("<?php echo base_url(); ?>assets/Images/App_image.png");
 background-position: center center;
 background-repeat:  no-repeat;
 background-attachment: fixed;
 background-size:  cover;
 height:100%;
}
.m-110{
  margin-top: 110px;
}
</style>
<body>
  <div id="app">
    <section class="section">
      <div class="container m-110">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-danger">
              <div class="card-header text-center"><h4>Login Japfa Foundation</h4></div>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url();?>Check" class="needs-validation" novalidate="">
                  <?php echo $this->session->flashdata('notif_login');?>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>