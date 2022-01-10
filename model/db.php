<?php
    function getConnect(){
        $conn = new PDO("mysql:host=localhost; dbname=we16303-php2; charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    function pdo_execute($sql){
        $args = func_get_args($sql, 1);
        
    }
?>