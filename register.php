<?php
$con=mysqli_connect("localhost","root","","mobile");
// return$con;

if(isset($_POST["username"]))
{
    $username=$_POST["username"];
}
else return;
if(isset($_POST["password"]))
{
    $password=$_POST["password"];
}
else return;
if(isset($_POST["name"]))
{
    $name=$_POST["name"];
}
else return;


$query="INSERT INTO `user`(`username`, `password`, `name`)
VALUES ('$username', '$password', '$name    ')";
$exe=mysqli_query($con,$query);

$arr=[];
if($exe)
{
    $arr["Succes"]="true";
}else{
    $arr["Succes"]="false";
}
print(json_encode($arr));

?>