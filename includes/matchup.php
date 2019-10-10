<?php
include_once "connection.php";
$mid=$_POST['mid'];
$t1name=$_POST['t1name'];
$t2name=$_POST['t2name'];
$mpredict=$_POST['mpredict'];



if(isset($_POST['submit3']))
{
$check=mysqli_query($conn,"select * from matchup where mid='$mid'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
echo "Match Already exits";
}
else {
$cteam1=mysqli_query($conn,"select * from team where tname='$t1name'");
$cteam2=mysqli_query($conn,"select * from team where tname='$t2name'");
$m=mysqli_query($conn,"select * from team where tname='$mpredict'");
$cr1=mysqli_num_rows($cteam1);
$cr2=mysqli_num_rows($cteam2);
$cr3=mysqli_num_rows($m);
if($cr1>0 && $cr2>0 && $cr3>0)
{
  if($mpredict==$t1name || $mpredict==$t2name)
  {
    if($t1name!=$t2name)
    {
      $sql="Insert into matchup(mid,t1name,t2name,mpredict)
            values ('$mid','$t1name','$t2name','$mpredict');";
      mysqli_query($conn,$sql);
      header("Location: ../index.php?insertion=success");
    }
    else {
      echo "same teams can't play against each other";
    }

  }else {
    echo "Match exist between differnt teams";
  }
}
else {
  echo "Team does't EXISTS";
}
}
}
?>
