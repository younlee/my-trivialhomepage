<?php
$connect = mysql_connect('localhost', 'layuni', 'ps080401~');
   $db = mysql_select_db('layuni', $connect);

$id=$_POST['username'];
$pw=$_POST['password'];
$sql="SELECT*from user WHERE username='$id' and password='$pw'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1)
{
    session_start();
$_SESSION['login_user']=$id;
echo "<script> alert('예!반가워여!');
location.replace('index.html');</script>";
}
else
{
    echo "<script> alert('에이..실패');
    location.replace('login.html');</script>";
}

?>
