<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login | Member</title>
</head>
<body>

<h1>Halo, this is member page, you're logged in as <?php echo $username; ?></h1> <a href="<?php echo site_url('member/member/logout'); ?>">Logout</a>

</body>
</html>