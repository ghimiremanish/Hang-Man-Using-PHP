<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: /game/');
    die;
}
include_once '../config/dbconfig.php';
?>

    <html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="logic/logic.css" type="text/css" />
    </head>

    <body>
        <!--        header starts here-->
        <div class="header">
            <div class="header">
                <div class="centeredheader">
                    <div class="home_logo">
                        <a href="/hang-game/" class="header_a_logo">
                        HANG GAME
                    </a>
                    </div>
                    <div class="header-right">
                        <div class="text">
                            <?php 
                                $n = $_SESSION['id'];
                                $sql = "SELECT fname FROM users where id = $n ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo $row["fname"];
                                }
                                }
                                $conn->close();
                            ?>
                            <a class="logout" href="../logout/index.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        header ends here-->

        <!--        container starts here-->
        <div class="cont-main">
            <?php include 'logic/logic.php'; ?>
        </div>



        <div class="entered_text" style="margin-left:50px;text-transform: uppercase;text-align:center;color:#65484d;">
        <?php
            if(isset($_SESSION['post'])){
            foreach($_SESSION['post'] as $s)
            {
                echo $s.' ';
            }
            }
       ?>
        </div>

    </body>

    </html>
