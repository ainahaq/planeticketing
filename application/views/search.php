 <!DOCTYPE html>
 <html>
 	<head>
 		<title>Wanderlicious</title>
 	</head>
 <body>

 	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <center> <h1 class="page-heading">Search Results</h1> </center>

 	<link rel="stylesheet" href="<?php echo base_url('assets/admin/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<div class="container">
		<table class="table table-bordered table-striped" id="manageMemberTable">
  			<thead>
    			<tr>
      				<th>ID</th>
				    <th>Depart At</th>
				    <th>Routes From</th>
				    <th>Routes To</th>
				    <th>Airplane Type</th>
				    <th>Price</th>
				    <th>Action</th>
				</tr>
  			</thead>
    		<?php
    			$no=0;
    			foreach ($data_routes as $obj1) {
      			$no++;
      		?>

        		<tr>
          			<td><?php echo $no; ?></td>
			        <td><?php echo $obj1['depart_at']; ?></td>
			        <td><?php echo $obj1['routes_from']; ?></td>
			        <td><?php echo $obj1['routes_to']; ?></td>
			        <td><?php echo $obj1['plane_name']; ?></td>
			        <td><?php echo $obj1['price']; ?></td>
			        <td>
          			<a href="#" class="btn btn-warning">Book</a>
          			</td>
        		</tr>
      		<?php 
    			}
    		?>
		</table>
	</div>
	<script src="<?php echo base_url('assets/admin/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script type="<?php echo base_url('assets/admin/'); ?>bower_components/datatables.net/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(function () {
			$('#example1').DataTable()
			$('#example2').DataTable({
				'paging'		: true,
				'lengthChange'	: false,
				'searching'		: false,
				'ordering'		: true,
				'info'			: true,
				'autowidth'		: false 
			})
		})
	</script>
		</div>
	  </div>
	</div>
 </body>
 </html>
 