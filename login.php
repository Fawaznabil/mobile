<?php
// $db = mysqli_connect('localhost', 'root', '', 'mobile');
// if(!$db)
// {
//     echo "Database connection failed";
// }

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'mobile');
$connect = mysqli_connect(HOST, USER, PASS, DB)or die('Not Connect');
?>

<?php

//For Running
$username = $_POST['username'];
$password = $_POST['password'];

//For Running
// $username = '0812345678';
// $password = '12345';

// $sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if($count == 1){
//     echo json_encode("Succes");
// }else{
//     echo json_encode("Error");
// }

$queryResult=$connect->query("SELECT * FROM user
WHERE username='".$username."' and password='".$password."'");
$result=array();

while($fetchData=$queryResult->fetch_assoc()){
    $result[]=$fetchData;
}

    if($result){
        echo json_encode(($result));
    }else{
        echo json_encode('');
    }    
    
?>