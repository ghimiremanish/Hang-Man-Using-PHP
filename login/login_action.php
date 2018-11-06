<?php
session_start();
include '../config/dbconfig.php';

if(!$_POST){
    header('Location: /hang-game/login/');
    die;
}


$e  = $_POST['email'];
$p  = $_POST['password'];

$sql = "SELECT id FROM users WHERE
                email='$e' AND
                passwd='$p'
                ";

$result =  mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['rand_num'] = rand(0,10);
      header('Location: ../home/');   
      }else {
         $_SESSION['login_username_error'] = "Your Login E-Mail or Password is invalid";
         header('Location: ../login/');   
      }

?>
