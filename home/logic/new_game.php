<?php
session_start();

unset($_SESSION['check']);
unset($_SESSION['post']);
unset($_SESSION['err_count']);
unset($_SESSION['win_count']);

$_SESSION['rand_num'] = rand(0,10);

header('Location: ../');
?>