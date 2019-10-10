<?php

if(isset($_POST['signup']))
{
	require "connection.php";

	$uid=$_POST['uid'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$rpwd=$_POST['rpwd'];
	$uage=$_POST['uage'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];


	if(empty($uid) || empty($email) || empty($pwd) || empty($rpwd) ||empty($uage) || empty($city) || empty($gender) )
	{
		header("Location:../home.php?error=Fillallthedetails");
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("Location:../home.php?error=Typecorrectemail");
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid))
	{
        header("Location:../home.php?error=Typecorrectuid");
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid) && !filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("Location:../home.php?error=Typecorrectuidemail");
		exit();
	}
	else if(!preg_match("/^[0-9]*$/",$uage))
	{
        header("Location:../home.php?error=Typecorrectage");
		exit();
	}
	else if(!preg_match("/^[a-zA-Z]*$/",$city))
	{
        header("Location:../home.php?error=Typecorrectcity");
		exit();
	}
	else if($pwd != $rpwd)
	{
		header("Location:../home.php?error=Rentercorrectpassword");
		exit();
	}
	else
	{
		$sql="SELECT * FROM users where uidusers='$uid';";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0)
		{
			header("Location:../home.php?error=userTaken");
		    exit();
		}
		else
		{

			$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
			$sql="INSERT INTO users(uidusers,emailusers,pwdusers,uage,city,gender) values('$uid','$email','$hashedpwd','$uage','$city','$gender')";
			$result=mysqli_query($conn,$sql);
			if($result>0)
			{
				header("Location:../home.php?Signup=success");
		        exit();
			}


		}
	}
}
else
{
	header("Location:../home.php?error=ClicktoSignup");
	exit();
}
