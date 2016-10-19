<?php
$host = 'localhost'; // адрес сервера 
$database = 'web_auth'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysql_error($con)); 
$select=mysql_select_db($database,$con);
if(isset($_POST['myname']) && isset($_POST['mypassword']) && $_SERVER['REQUEST_METHOD']=="POST")
{
$query="SELECT * FROM `user` WHERE (user.name==$_POST['myname'] and user.password==$_POST['mypassword'])";
 
$result = mysql_query($query,$con) or die("Ошибка " . mysql_error($select));
}
if($result)
{
echo'Здравствуйте,'+$_POST['myname'];
}
else
{
	echo'Ошибка входа';
}
mysql_free_result($result);
?>