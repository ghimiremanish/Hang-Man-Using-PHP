<?php 
session_start();
if(isset($_SESSION['id'])){
    header('Location: /game/home/');
    die;
}
?>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

    <div class="login-page">
        <div class="form">
            <h1><a href="../" class="title-home">HANGMAN</a></h1>
            <form class="login-form" method="post" action="signup_action.php">
                <input type="text" placeholder="First Name" name="fname" />
                <input type="text" placeholder="Last Name" name="lname" />
                <input type="text" placeholder="email" name="email" />
                <input type="password" placeholder="password" name="passwd" />
                <button>login</button>
                <p class="message">Already a member? <a href="../login/">Login</a></p>
            </form>
        </div>
    </div>

</body>

</html>