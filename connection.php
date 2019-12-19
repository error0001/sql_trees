<?php 
    // @ - для того чтобы ошибки не выводить для пользователя
    $db = @mysqli_connect(
        $host = 'localhost', 
        $user = 'root', 
        $password = '', 
        $database = 'loyality_db', 
        $port = '3306'
    ) or die('Ошибка соединения с базой данных');
    if(!$db) die(mysqli_connect_error());
    mysqli_set_charset($db, "utf8");
    
?>