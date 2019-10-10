<?php
include_once "connection.php";
$tid=$_POST['tid'];
$tname=strtolower($_POST['tname']);
$tcountry=strtolower($_POST['tcountry']);
$cname=strtolower($_POST['cname']);
$vname=strtolower($_POST['vname']);
$coname=strtolower($_POST['coname']);

if(empty($tid) || empty($tname) || empty($tcountry) || empty($cname) ||empty($vname)||empty($coname))
	{
		header("Location:../index.php?error=Fillallthedetailscorrectly");
		exit();
	}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$tname))
	{



		echo "Type name without space";


	}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$tcountry))
	{
		echo "Type country without space";

	}
else
{
$check=mysqli_query($conn,"select * from team where tid='$tid'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
	echo "Team exists";
}
else {
$checkcap=mysqli_query($conn,"select * from player where pname='$cname'");
$checkvcap=mysqli_query($conn,"select * from player where pname='$vname'");
$checkcoach=mysqli_query($conn,"select * from player where pname='$coname'");
$c1=mysqli_num_rows($checkcap);
$c2=mysqli_num_rows($checkvcap);
$c3=mysqli_num_rows($checkcoach);
if($c1>0 && $c2>0 && $c3>0)
{
	$sql="Insert into team(tid,tname,tcountry,cname,vname,coname)
	      values ('$tid','$tname','$tcountry','$cname','$vname','$coname');";
	mysqli_query($conn,$sql);
/*	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";


	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	*/
header("Location: ../index.php?insertion=success");
}
else {
	echo "Check and Enter player properly";
}
}
}
?>
