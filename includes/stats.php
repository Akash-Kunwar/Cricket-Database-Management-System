<?php
include_once "connection.php";
$sid=$_POST['sid'];
$mid=$_POST['mid'];
$swname=$_POST['swname'];
$swinby=$_POST['swinby'];




if(isset($_POST['submit4']))
{
$check=mysqli_query($conn,"select * from statistics where sid='$sid'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
echo "STATISTICS Already exits";
}
else {
  $cmid=mysqli_query($conn,"select * from matchup where mid='$mid'");
  $c=mysqli_num_rows($cmid);
  if($c>0)
  {
     $sql1="select * from statistics where mid='$mid'";
     $result1=mysqli_query($conn,$sql1);
     $resultcheck1=mysqli_num_rows($result1);
     if($resultcheck1>0)
     {
       echo "STATISTICS for this match alrady exist";
     }
     else {
       $tmid=mysqli_query($conn,"select * from team where tname='$swname'");
       $t=mysqli_num_rows($tmid);
       if ($t>0) {
         $sl="select * from matchup where mid='$mid'";
         $re=mysqli_query($conn,$sl);
         $rs=mysqli_num_rows($re);
         if($rs>0)
         {
            while ($r=mysqli_fetch_assoc($re)) {
              $team1=$r['t1name'];
              $team2=$r['t2name'];
            }

           if ($team1==$swname || $team2==$swname) {
             $sql="Insert into statistics(sid,mid,swname,swinby)
                   values ('$sid','$mid','$swname','$swinby');";
             mysqli_query($conn,$sql);
             header("Location: ../index.php?insertion=success");
           }
           else {
             echo "Match exist bestween differnt teams";
           }
         }

       }else {
         echo "Winner Team does't Exist";
       }
     }
  }
  else {
    echo "Match does't exist";
  }
}
}
?>
