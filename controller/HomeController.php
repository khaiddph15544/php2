<?php
require_once './model/user.php';
require_once './model/posts.php';
function home_index(){

    $title = "WE16303 - PHP2";
    $users = getAll();
    $posts = getAllPost();

    include_once "./view/homepage.php";
}

?>