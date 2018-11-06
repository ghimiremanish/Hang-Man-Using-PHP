<?php 
include 'wordlist.php';

$num = $_SESSION['rand_num']; 
$val = $wordlist[$num];
$len = strlen($val);
$_SESSION['err_count'] = 0;
$_SESSION['win_count'] = 0;

  
    for($i=0;$i<$len;$i++)
    {

     $_SESSION['check'][$i] = ' __ '; 


    }
if(isset($_POST['clear']))
{
    session_destroy();
}
?>
<div style="margin-top:20px;">`</div>
    <?php
if(isset($_SESSION['post'])){
    
    for($i=0;$i<$len;$i++)
    {
        foreach($_SESSION['post'] as $s)
        {
            if($s == $val[$i])
            {
                $_SESSION['check'][$i] = $s;
                $_SESSION['err_count'] = $_SESSION['err_count']-($len-1);
                $_SESSION['win_count'] = $_SESSION['win_count']+1;
            }
            else{
                $_SESSION['err_count'] = $_SESSION['err_count']+1;
            }
        }
    }

}

foreach($_SESSION['check'] as $c)
{
    echo $c.' ';
}

echo '<hr>';
//if game over link to game over page
if($_SESSION['err_count']>=$len*7)
{
    header('Location: logic/game_over.php');
    die;
}
if($_SESSION['win_count']==$len)
{
    header('Location: logic/you_win.php');
    die;
}
echo '<br>';

include 'image.php';

?>