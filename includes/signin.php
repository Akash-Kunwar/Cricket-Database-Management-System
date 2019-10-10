<?php

require "connection.php";
if(isset($_POST['signin']))
{

    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];

    if(empty($uid) || empty($pwd))
	{
		header("Location:../home.php?error=Fillallthedetails");
		exit();
	}
	else
	{
		$sql="SELECT * FROM users where uidusers='$uid' OR emailusers='$uid';";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0)
		{
			if($row=mysqli_fetch_assoc($result))
			{
				$pwdcheck=password_verify($pwd,$row['pwdusers']);
				if($pwdcheck == false)
				{
					header("Location:../home.php?error=1passwordincorrect");
		            exit();
				}
				else if($pwdcheck == true)
				{
                    session_start();
                    $_SESSION['useruid']= $row['uidusers'];
                    $_SESSION['userid']= $row['idusers'];

                    if($_SESSION['useruid']=='admin')
                    {
                      header("Location:../index.php?login=success");
  		                exit();
                    }
                    else {
                      header("Location:../show.php?login=success");
  		                exit();
                    }

				}
				else{
					header("Location:../home.php?error=2passwordincorrect");
		            exit();
				}
			}
		}

	}
}


else
{
	header("Location:../home.php?error=ClicktoSignup");
	exit();
}
