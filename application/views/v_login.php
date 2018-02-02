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
              <center> <h1 class="page-heading">Login Here</h1> </center>
    </div>
<div class="container"  style="margin-top:100px;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
	

    <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
    <div class="form-group">
        <label> Username :</label>
            <input type="text" class="form-control" name="username" required="true">
    </div>
    <div class="form-group">
        <label>Password :</label>
        <input type="password" class="form-control" name="password" required="true">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    <div class="col-md-4"></div>
    </div>

    </div>
</body>
</html>