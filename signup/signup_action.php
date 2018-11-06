<?php
include '../config/dbconfig.php';
session_start();

if(!$_POST){
    header('Location: /hang-game');
    die;
}

$f = $_POST['fname'];
$l = $_POST['lname'];
$e = $_POST['passwd'];
$p = $_POST['passwd'];
    
$sql = "INSERT INTO users (fname, lname, email, passwd)
VALUES ('$f', '$l', '$e', '$p')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['id']     = $conn->insert_id;
    $_SESSION['rand_num'] = rand(0,10);
    header('Location: ../home/index.php');
} else {
    $conn->close();
    die("error");
}



$conn->close();
?>