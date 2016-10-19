<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$host = 'localhost:8080'; // адрес сервера 
$database = 'shop'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$con = mysql_connect($host, $user, $password) 
    or die("Ошибка " . mysql_error($con)); 
$select=my_select_db($database,$con);
$query ="SELECT SectionName FROM Section";
$result = mysql_query($link, $query) or die("Ошибка " . mysql_error($link)); 
if($result)
{    
    echo "<ul>";
    while ($row = mysql_fetch_row($result)) {
        echo "<li>$row[0]</li>";
    }
    echo "</ul>"; 	
    mysql_free_result($result);
} 
mysql_close($link);
?>
</body>
</html>