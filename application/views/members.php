<a href="<?php echo base_url(); ?>index.php/home/add" class="btn btn-primary">Add</a>
<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<table class="table" id="manageMemberTable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
            <th>Full Name</th>
			<th>Level</th>
			<th>Action</th>
		</tr>
	</thead>
    <?php
    $no=0;
    foreach ($sql1->result() as $obj1) {
    	$no++;
    	?>

    		<tr>
    			<td><?php echo $no; ?></td>
    			<td><?php echo $obj1->username; ?></td>
                <td><?php echo $obj1->password; ?></td>
    			<td><?php echo $obj1->fullname; ?></td>
    			<td><?php echo $obj1->level; ?></td>
    			<td>
                    <a href="<?php echo base_url(); ?>index.php/home/edit/<?php echo $obj1->id; ?>" class="btn btn-info btn-xs">Edit</a> 
                    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                    <a href="javascript:if(confirm('Are you sure want to delete this?')){document.location='<?php echo base_url();?>index.php/home/delete/<?php echo $obj1->id ?>';}" class="btn btn-danger btn-xs">Delete</a>
                    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                </td>
    		</tr>
    	<?php 
    }
    ?>
</table>