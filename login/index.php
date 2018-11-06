<?php 
session_start();

?>
<html>

<head>
    <title>Login - Hang Game</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

    <div class="login-page">
        <div class="form">
            <h1><a href="../" class="title-home">HANGMAN</a></h1>
            <form class="login-form" method="post" action="login_action.php">
                <input type="text" placeholder="email" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button>login</button>
                <p class="message">Not registered? <a href="../signup/">Create an account</a></p>
            </form>
            <p class="message-err">
                <?php
                    if(isset($_SESSION['login_username_error'])){
                        echo $_SESSION['login_username_error'] ;
                    }
                ?>
            </p>
        </div>
    </div>
    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });

    </script>
</body>

</html>
<?php
unset($_SESSION['login_username_error']);
?>
