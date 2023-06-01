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
	if($pss=$pass)
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
<?php
$server="localhost";
$uname="root";
$psw="";
$db="phpregis";
try
{
$con=new PDO("msql:host=$server;dbname=$db",$uname,$psw);
$name=$_POST['sname'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$mobile=$_POST['phno'];
$lang=$_POST['lang'];
$city=$_POST['state'];
$detail=$_POST['about'];
$query="INSERT into registration(name,gender,email,phno,language,state,details)values(:nm,:gn,:em,:pn,:lg,:st,:dt)";
$stmt=$con->prepare($query);

if(stmt->execute([":nm"=>$name,":gn=>$gender",":em"=>$email,":pn"=>$mobile,":lg"=>$lang,":st"=>$city,":dt"=>$detail]))
{
	echo"<script>alert('inserted successfully')</script>";
}
else
{
	echo"<script>alert(' not inserted ')</script>";
}
}
catch (PDOException $e)
{
	echo $e=>getmesage();
}
?>
