<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>设置昵称和图像</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="stylesheets/style.css">
	<script type="text/javascript" src="javascripts/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="rolling/js/rolling.js"></script>
	<script type="text/javascript" src="javascripts/Public.js"></script>
</head>
<body class="login">
	<div class="scrollbar-macosx">
		<div class="main container ">
			<div class="jumbotron">
				<h1></h1>
				<p class="user_portrait">
					<img portrait_id="1" src="images/user/1.png" id="selectImg" alt="portrait_1">
				</p>
				<p class="select_portrait">
					<img portrait_id="1" src="images/user/1.png" alt="portrait_1" class="t">
					<img portrait_id="2" src="images/user/2.png" alt="portrait_1">
					<img portrait_id="3" src="images/user/3.png" alt="portrait_1">
					<img portrait_id="4" src="images/user/4.png" alt="portrait_1">
					<img portrait_id="5" src="images/user/5.png" alt="portrait_1">
					<img portrait_id="6" src="images/user/6.png" alt="portrait_1">
					<img portrait_id="7" src="images/user/7.png" alt="portrait_1">
					<img portrait_id="8" src="images/user/8.png" alt="portrait_1">
					<img portrait_id="9" src="images/user/9.png" alt="portrait_1">
					<img portrait_id="10" src="images/user/10.png" alt="portrait_1">
					<img portrait_id="11" src="images/user/11.png" alt="portrait_1">
					<img portrait_id="12" src="images/user/12.png" alt="portrait_1">
				</p>

				<p>
					<div class="input-group">
                            <form method="post" action="session.php" enctype="multipart/form-data">

                                <div onclick="upload()" id="uploadImg">上传头像</div>

                                <input type="text" name="name" class="form-control" placeholder="输入你的昵称，不填随机昵称……">
                                <input type="hidden" name="img" id="img" value="">
                                <input type="file" name="file" id="file" style="display: none"><br>

                                <span class="input-group-btn">
                                        <button id="login" class="btn btn-default" type="submit">
                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                        </button>
                                </span>
                            </form>
					</div>
				</p>
			</div>
			<div class="footer">
				<span>版权：</span>xxxA测
			</div>
		</div>
	</div>
</body>
<style>

    #uploadImg{

        /*width: 66px;*/
        /*height: 34px;*/
        line-height: 34px;
        text-align: center;
        margin-bottom: 12px;
        font-size: 14px;
        border-radius: 3px;
        color: #FFF;
        background-color: #409EFF;
        border-color: #409EFF;
    }

    .input-group-btn{
        /*top: -44px;*/
        /*left: 115px;*/
    }

    .login .input-group .btn{
        /*width: 100%;*/
        /*width: 70vw;*/
    }

</style>
<script>
    //点击提交传递img
    document.getElementById('login').addEventListener('click',function (){

        var selectImg = document.getElementById('selectImg').getAttribute('portrait_id');

        document.getElementById('img').value = selectImg;

    });


    function upload (){
        document.getElementById('file').click();
    }

</script>
</html>