<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location: /game/home/');
}
?>

    <html>

    <head>
        <title>Hang-Game</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <!--        header starts here-->
        <div class="header">
            <div class="centeredheader">
                <div class="home_logo">
                    <a href="/hang-game/" class="header_a_logo">
                        <!--                        <img src="#" alt="logo">-->
                        HANG GAME
                    </a>
                </div>
                <div class="headerbutton">
                    <a class="signin" href="login/index.php">Log In</a>
                    <a class="signup" href="signup/index.php">Sign Up</a>
                </div>
            </div>
        </div>
        <!--        header ends here-->

        <!--        container starts here-->
        <div class="cont-main">

            <div class="box">
                <div class="box_text">HANG GAME</div>
            </div>
        </div>

        <!--        footer start here-->
        <footer>
            <div class="copy">Copyright &copy; 2016-
                <?php echo date("Y");?> Hang Game. All rights reserved</div>
            <hr>
            <div class="algorithm">Site build and maintained by <b><a href="http://www.manishg.com.np" style="color: #000;text-decoration:none;">ALGORITHM</a></b></div>
        </footer>
        <!--        footer ends here-->
    </body>

    </html>
