<?php
$server="localhost";
$uname="root";
$psw="";
$db="phpvalid";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psw);
$Email=$_POST['email'];
$pass=$_POST['psd'];
$query="SELECT * from log where email=:email";
$stmt=$con->prepare($query);
$stmt->bindparam(":email",$Email);
$stmt->execute();

if($row=$stmt->fetchall())
{
	foreach($row as $key => $value)
	{
		$pss=$value[2];
	}
	if($pss==$pass)
	{
		echo"<script>alert('login success')</script>";
	}
	else
	{
		echo"<script>alert('login failed');window.location.href='pdo login.php';</script>";
	}
}
else
{
	echo"<script>alert('invalid user');window.location.href='pdo login.php';</script>";
	}
	?>
