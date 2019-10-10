<!DOCTYPE html>
<html>
<head>
	<title>players</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<?php
include_once "connection.php";



$sql="select * from player";

$result=mysqli_query($conn,$sql);

$resultcheck=mysqli_num_rows($result);

?>
<div class="container">
<table class="table-hover table-dark table-bordered">
	<tr>
		<th>Name</th>
		<th>Team</th>
		<th>Identity</th>
	</tr>
	<?php
	if($resultcheck>0)
    {
	while ($row=mysqli_fetch_assoc($result)) {
		?>
	<tr>
		<td><?php echo $row['pname'];?></td>
		<td><?php echo $row['pteam'];?></td>
		<td><?php echo $row['pid'];?></td>

	</tr>
	<?php
		}//end of while
       }//end of if
    ?>
</table>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
