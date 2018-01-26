<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bstrp/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bstrp/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bstrp/css/bootstrap-theme.css') ?>" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<body>
    <div class="container">
          <div class="row">
            <div class="col-md-12">
              <center> <h1 class="page-heading">Register</h1> </center>
    </div>
<div class="container"  style="margin-top:100px;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open("login/register_process"); ?>
	
        <form>
            <div class="form-group">
                <label for="InputEmail1">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="inputName3">Full Name</label>
                <input type="text" class="form-control" id="inputName3" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bstrp/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bstrp/js/jquery.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bstrp/js/bootstrap.min.js') ?>"></script>
</body>
</html>