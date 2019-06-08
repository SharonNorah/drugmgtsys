<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/admin/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?php echo lang('login_heading');?></h1>
                  </div>
                  <p class="p text-gray-600 mb-4"><?php echo lang('login_subheading');?></p>
                   <div id="infoMessage"><?php echo $message;?></div>
                   <?php echo form_open("?/auth/login");?>

                    <p>
                      <?php echo lang('login_identity_label', 'identity');?> <br>
                      <?php echo form_input($identity);?>
                    </p>

                    <p>
                      <?php echo lang('login_password_label', 'password');?><br>
                      <?php echo form_input($password);?>
                    </p>

                    <p>
                      <?php echo lang('login_remember_label', 'remember');?>
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                    </p>


                    <p><?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'col-sm-12 control-label no-padding-right btn btn-primary'));?></p>

                  <?php echo form_close();?>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password"><?php echo lang('login_forgot_password');?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/admin/js/jquery-3.4.1.min.js"></script>

  <script src="<?= base_url() ?>assets/admin/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/admin/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
