<div class="img_hangman">
<?php
$ch = $_SESSION['err_count']/$len;


$hang[0] = 
'  ---------------------
 | /         |
 |/
 |
 |
 |
 |
 |
 |
 |
 |
/|\
------------------------';
$hang[1] = 
'  ---------------------
 | /         |
 |/          O
 |
 |
 |
 |
 |
 |
 |
 |
/|\
------------------------';
$hang[2] = 
'  ---------------------
 | /         |
 |/          O
 |           |
 |           |
 |           |
 |           |
 |           
 |
 |
 |
/|\
------------------------';
$hang[3] = 
'  ---------------------
 | /         |
 |/          O
 |           |
 |           |
 |           |
 |           |
 |          / 
 |         /
 |        /
 |       /
/|\
------------------------';
$hang[4] = 
'  ---------------------
 | /         |
 |/          O
 |           |
 |           |
 |           |
 |           |
 |          / \
 |         /   \
 |        /     \
 |       /       \
/|\
------------------------';
$hang[5] = 
'  ---------------------
 | /         |
 |/          O
 |           |
 |     ------|
 |           |
 |           |
 |          / \
 |         /   \
 |        /     \
 |       /       \
/|\
------------------------';
$hang[6] = 
'  ---------------------
 | /         |
 |/          O
 |           |
 |     ------|------
 |           |
 |           |
 |          / \
 |         /   \
 |        /     \
 |       /       \
/|\
------------------------';
if($ch==0)
{
    echo '<pre>'.$hang[0].'</pre>';
}
elseif($ch==1)
{
    echo '<pre>'.$hang[1].'</pre>';
}
elseif($ch==2)
{
    echo '<pre>'.$hang[2].'</pre>';
}
elseif($ch==3)
{
    echo '<pre>'.$hang[3].'</pre>';
}
elseif($ch==4)
{
    echo '<pre>'.$hang[4].'</pre>';
}
elseif($ch==5)
{
    echo '<pre>'.$hang[5].'</pre>';
}
elseif($ch==6)
{
    echo '<pre>'.$hang[6].'</pre>';
}
else{
    echo '<pre>'.$hang[6].'</pre>';
}

?>
</div>