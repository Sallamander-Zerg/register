<?php
 
require 'login.php';
$mysql = new mysqli('localhost','root','','test');
$sql = $mysql->query("Select * from users where first_name = '$login'" );
        
        if (mysqli_num_rows($sql) > 0)
        {
        
        
        $result = $mysql->query ("DELETE FROM users WHERE first_name ='$sql'");   
        }
        else {
        print "Ошибка авторизации";
        }
header('Location: index.html');
?>

