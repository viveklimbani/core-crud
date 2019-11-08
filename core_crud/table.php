<?php


include('session.php');

?>


<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php
	include 'config.php';
?>
</head>

<body>
	<h1 style="background:black; color: white"><center>Form Table</center></h1>
	<br><br>

	<div class="container">
		<a href='loginform.php'>
		<button class="btn btn-primary"> Add Student Data</button></a>

		<a href='log_out.php'>
		<button class="btn btn-primary btn-danger" style="float:right;">Log Out</button></a><br><br>
		</a><br><br>

		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">NAME</th>
					<th scope="col">LNAME</th>
					<th scope="col">EMAIL</th>
					<th scope="col">PASS</th>
					<th scope="col">IMAGE</th>
					<th scope="col">STATE</th>
					<th scope="col">CITY</th>
					<th scope="col">ADDRESS</th>
					<th scope="col">MOBILE</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = "select * from students";
				$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result))
				{

				?>

				<tr>
					
					<th scope="row"><?php echo $row['id'] ?></th>
					<td><?php echo $row['firstname'] ?></td>
					<td><?php echo $row['lastname'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['pass'] ?></td>
					<td><img src="<?php echo $row['image'] ?>" style="width: 30px; height:30px;"></td>
					<td><?php echo $row['state'] ?></td>
					<td><?php echo $row['city'] ?></td>
					<td><?php echo $row['address'] ?></td>
					<td><?php echo $row['mobile_no'] ?></td>
					<?php $id = $row['id'] ?>

					<td>
						<a href="update.php?<?php echo 'id=' .$id; ?>">
						<p style="float:left;" data-placement="top" data-toggle="tooltip" title="Edit"></p>
						<button class="btn btn-primary btn-xs" data-toggle="modal" data-title="Edit" data-target="#edit">
						<span class="glyphicon glyphicon-pencil"></span>
					   </button>
					   </a>

					   <a href="delete_data.php?<?php echo 'id=' .$id; ?>">
						<p style="float:left;" data-placement="top" data-toggle="tooltip" title="Delete"></p>
						<button onclick="return confirm('Are you sure want to delete this item?');" class="btn btn-danger btn-xs" data-toggle="modal" data-title="Delete" data-target="#delete">
						<span class="glyphicon glyphicon-trash"></span>
					   </button>
					   </a>
					</td>
					<?php }?>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>