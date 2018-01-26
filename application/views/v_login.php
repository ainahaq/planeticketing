<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/login/assets/bstrp/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/login/assets/bstrp/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/login/assets/bstrp/css/bootstrap-theme.css') ?>" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <div class="container">
          <div class="row">
            <div class="col-md-12">
              <center> <h1 class="page-heading">Login Area</h1> </center>
    </div>
<div class="container"  style="margin-top:100px;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
<?php echo form_open("login/login_process"); ?>
	
<!--     <?php echo $error; ?>
 -->	<div class="form-group">
        <?php
        echo form_label('Username','username');
        echo form_input('username','','class="form-control" id="username" placeholder="Username" required')
        ?>
        </div>
        <div class="form-group">
        <?php
        echo form_label('Password','password');
        echo form_password('password','','class="form-control" id="password" placeholder="Password" required')
        ?>
        </div>
       	 <button type="submit" class="btn btn-primary">Login</button>
       	<a href="<?php echo site_url('login/register') ?>" class="btn btn-link">Register</a>
        <?php echo form_close() ?>
	<?php echo form_close(); ?>
	</div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/login/assets/bstrp/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/login/assets/bstrp/js/jquery.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/login/assets/bstrp/js/bootstrap.min.js') ?>"></script>
</body>
</html>