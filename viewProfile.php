<?php
$con=mysqli_connect("localhost","root","","mobile");

$query="SELECT `id`, `username`, `name` FROM `user` ";
$exe=mysqli_query($con,$query);

$arr=[];

while($row=mysqli_fetch_array($exe))
{
    $arr[]=$row;
}

print(json_encode($arr));

?>