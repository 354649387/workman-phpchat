<?php
session_start();


//获取用户提交的昵称和图片
$post = $_POST;

$name = $post['name'];

$img = $post['img'];

if(!isset($name)){
    $name = '游客';
}
if(!isset($img)){
    $img = 1;
}


//图片有默认值，不用判断

//存入到session
$_SESSION['phpchat'] = [$name,$img];


if(isset($_SESSION['phpchat'])){

    header("Location:chat.php");

}

