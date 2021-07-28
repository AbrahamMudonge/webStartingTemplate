<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users</h2>
  <p>This is the users table</p>  
  <?php
require_once('connection.php');



$results = mysqli_query($conn, "SELECT * FROM account"); ?>          
  <table class="table table-bordered table-striped"><button onclick="location.href='createUser.php'" type="button">
         create user</button>
	<thead class="thead-dark">
		<tr>
		
			<th>email</th>
			<th>psw</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['psw']; ?></td>
			<td>
				<a href="createUser?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
				<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM account WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>
			</td>
			<td>
				<a href="connection.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</div>

</body>
</html>






    