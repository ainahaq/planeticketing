<?php 
  $id="";
  $username="";
  $password="";
  $fullname="";
  $level="";
    if($op=="edit"){
      foreach ($sql->result() as $obj) {
        $op = "edit";
        $id = $obj->id;
        $username = $obj->username;
        $password = $obj->password;
        $fullname = $obj->fullname;
        $level = $obj->level;
    }
}

?>
<form role="form" action="<?php echo base_url(); ?>index.php/home/save" method="POST">
  <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">
  <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
    </div>
  </div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>" placeholder="Full Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputLevel3" class="col-sm-2 control-label">Level</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="level" value="<?php echo $level; ?>" placeholder="Level">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>