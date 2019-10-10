<?php
include_once "connection.php";
$ttid=$_POST['ttid'];
$ttmid=$_POST['ttmid'];
$ttvenue=$_POST['ttvenue'];
$tttime=$_POST['tttime'];
$ttprice=$_POST['ttprice'];
if(isset($_POST['submit2']))
{
$check=mysqli_query($conn,"select * from tickets where ttid='$ttid'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
echo "Ticket Already";
}
else {
$cmid=mysqli_query($conn,"select * from matchup where mid='$ttmid'");
$c=mysqli_num_rows($cmid);
if($c>0)
{
  $sql="Insert into tickets(ttid,ttmid,ttvenue,tttime,ttprice) values ('$ttid','$ttmid','$ttvenue','$tttime','$ttprice');";
  mysqli_query($conn,$sql);
  header("Location: ../index.php?insertion=success");
}
else {
  echo "Match does't exist";
}
}
}
?>
