<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login | Admin</title>
</head>
<body>

<h1>Hello, this is admin page, you're logged in as <?php echo $username; ?></h1> <a href="<?php echo site_url('admin/admin/logout'); ?>">Logout</a>

</body>
</html>