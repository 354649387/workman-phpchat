<?php
session_start();


//获取用户提交的昵称和图片
$post = $_POST;

print_r($post);

$name = $post['name'];

$defalt_img = $post['img'];

//保存上传的图片到upload
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

$upload_img =  "upload/" . $_FILES["file"]["name"];

$GLOBALS['up_res'] = $upload_img;

$d = time();

if($name === ''){
    $name = '游客'.$d;
}


//上传的图片优先级比默认选择的图片高
if( $_FILES["file"]["name"] === ''){

    $img = './images/user/'.$defalt_img.'.png';

}else{

    $img = $upload_img;

}



//存入到session
$_SESSION['phpchat'] = [$name,$img];


if(isset($_SESSION['phpchat'])){

    header("Location:chat.php");

}

