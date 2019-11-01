<?php
include_once "connection.php";
$pid=$_POST['pid'];
$prank=$_POST['prank'];
$pteam=strtolower($_POST['pteam']);
$pname=strtolower($_POST['pname']);
$page=$_POST['page'];
$pjob=$_POST['pjob'];
$pavg=$_POST['pavg'];
$psr=$_POST['psr'];
$ptr=$_POST['ptr'];
$ptw=$_POST['ptw'];
$pbest=$_POST['pbest'];

//ptw-PTMATCHES
//ptbest-PTOURNAMENTS
if(isset($_POST['submit5']))
{
$check=mysqli_query($conn,"select * from player where pid='$pid'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
echo "Player Already Exists";
}else{
$sql="Insert into player(pid,prank,pteam,pname,page,pjob,pavg,psr,ptr,ptmatches,pttournaments)
      values ('$pid','$prank','$pteam','$pname','$page','$pjob','$pavg','$psr','$ptr','$ptw','$pbest');";
mysqli_query($conn,$sql);
/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
header("Location: ../index.php?insertion=success");
}
}
?>
