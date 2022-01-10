<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch ($url) {
    case "/":
        require_once './controller/HomeController.php';
        home_index();
        break;
    case "admin":
        echo "Vào trang quản trị";
        break;
    default:
        echo "Đường dẫn chưa được cho phép";
        break;
}
