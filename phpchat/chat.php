<?php

session_start();

$session_list = $_SESSION['phpchat'];

//获取本机的session信息
$name = $session_list[0];

$img = $session_list[1];

if(!isset($name) || !isset($img)){

    echo "<script>alert('先选择头像和填写昵称');location.href='index.php';</script>";

}

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="rolling/css/rolling.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/jquery.scrollbar.css">
    <script type="text/javascript" src="javascripts/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="rolling/js/rolling.js"></script>
    <script type="text/javascript" src="javascripts/Public.js"></script>
    <script type="text/javascript" src="javascripts/jquery.scrollbar.min.js"></script>
    <style>
        #live_list li img{
            margin-right: 10px;
        }
        #chats li div{
            background-color: #9EEA6A;
            color: #000;
            border-radius: 6px;
        }

        #chats li img{
            border-radius: 10px;
        }
        #live_list li img{
            border-radius: 6px;
        }
    </style>
</head>
<body class="room">
<div class="scrollbar-macosx" id="sc" style="_height:200px;min-height:200px" >
    <div class="header">
        <div class="toptext">
<!--            <a href="index.html">-->
<!--                <span class="glyphicon glyphicon-arrow-left"></span> 返回大厅-->
<!--            </a>-->
        </div>
        <div style="text-align: center;line-height: 39px">You Chat</div>
        <ul class="topnavlist" style="margin-top: -36px;">
            <li class="userlist">
                <a><span class="glyphicon glyphicon-th-list"></span>用户列表</a>
                <div class="popover fade bottom in">
                    <div class="arrow"></div>
                    <h3 class="popover-title" id="live_num"></h3>
                    <div class="popover-content scrollbar-macosx">
                        <ul id="live_list">

                        </ul>
                    </div>
                </div>
            </li>
        </ul>
        <div class="clapboard hidden"></div>
    </div>
    <div class="main container">
        <div class="col-md-12">
            <ul class="chat_info" id="chats">

            </ul>
        </div>
    </div>
    <div class="input">
        <div class="center">
            <div class="tools">

<!--                <span class="glyphicon glyphicon-heart face_btn"></span>-->
<!--                <span class="glyphicon glyphicon-picture imgFileico"></span>-->

<!--                <input type="file" class="imgFileBtn hidden" accept="image/*">-->
<!--                <div class="faces popover fade top in">-->
<!--                    <div class="arrow"></div>-->
<!--                    <h3 class="popover-title">表情包</h3>-->
<!--                    <div class="popover-content scrollbar-macosx">-->
<!--                        <img src="images/face/1.gif" alt="1">-->
<!--                        <img src="images/face/2.gif" alt="2">-->
<!--                        <img src="images/face/3.gif" alt="3">-->
<!--                        <img src="images/face/4.gif" alt="4">-->
<!--                        <img src="images/face/5.gif" alt="5">-->
<!--                        <img src="images/face/6.gif" alt="6">-->
<!--                        <img src="images/face/7.gif" alt="7">-->
<!--                        <img src="images/face/8.gif" alt="8">-->
<!--                        <img src="images/face/9.gif" alt="9">-->
<!--                        <img src="images/face/10.gif" alt="10">-->
<!--                        <img src="images/face/11.gif" alt="11">-->
<!--                        <img src="images/face/12.gif" alt="">-->
<!--                        <img src="images/face/13.gif" alt="">-->
<!--                        <img src="images/face/14.gif" alt="">-->
<!--                        <img src="images/face/15.gif" alt="">-->
<!--                        <img src="images/face/16.gif" alt="">-->
<!--                        <img src="images/face/17.gif" alt="">-->
<!--                        <img src="images/face/18.gif" alt="">-->
<!--                        <img src="images/face/19.gif" alt="">-->
<!--                        <img src="images/face/20.gif" alt="">-->
<!--                        <img src="images/face/21.gif" alt="">-->
<!--                        <img src="images/face/22.gif" alt="">-->
<!--                        <img src="images/face/23.gif" alt="">-->
<!--                        <img src="images/face/24.gif" alt="">-->
<!--                        <img src="images/face/25.gif" alt="">-->
<!--                        <img src="images/face/26.gif" alt="">-->
<!--                        <img src="images/face/27.gif" alt="">-->
<!--                        <img src="images/face/28.gif" alt="">-->
<!--                        <img src="images/face/29.gif" alt="">-->
<!--                        <img src="images/face/30.gif" alt="">-->
<!--                        <img src="images/face/31.gif" alt="">-->
<!--                        <img src="images/face/32.gif" alt="">-->
<!--                        <img src="images/face/33.gif" alt="">-->
<!--                        <img src="images/face/34.gif" alt="">-->
<!--                        <img src="images/face/35.gif" alt="">-->
<!--                        <img src="images/face/36.gif" alt="">-->
<!--                        <img src="images/face/37.gif" alt="">-->
<!--                        <img src="images/face/38.gif" alt="">-->
<!--                        <img src="images/face/39.gif" alt="">-->
<!--                        <img src="images/face/40.gif" alt="">-->
<!--                        <img src="images/face/41.gif" alt="">-->
<!--                        <img src="images/face/42.gif" alt="">-->
<!--                        <img src="images/face/43.gif" alt="">-->
<!--                        <img src="images/face/44.gif" alt="">-->
<!--                        <img src="images/face/45.gif" alt="">-->
<!--                        <img src="images/face/46.gif" alt="">-->
<!--                        <img src="images/face/47.gif" alt="">-->
<!--                        <img src="images/face/48.gif" alt="">-->
<!--                        <img src="images/face/49.gif" alt="">-->
<!--                        <img src="images/face/50.gif" alt="">-->
<!--                        <img src="images/face/51.gif" alt="">-->
<!--                        <img src="images/face/52.gif" alt="">-->
<!--                        <img src="images/face/53.gif" alt="">-->
<!--                        <img src="images/face/54.gif" alt="">-->
<!--                        <img src="images/face/55.gif" alt="">-->
<!--                        <img src="images/face/56.gif" alt="">-->
<!--                        <img src="images/face/57.gif" alt="">-->
<!--                        <img src="images/face/58.gif" alt="">-->
<!--                        <img src="images/face/59.gif" alt="">-->
<!--                        <img src="images/face/60.gif" alt="">-->
<!--                        <img src="images/face/61.gif" alt="">-->
<!--                        <img src="images/face/62.gif" alt="">-->
<!--                        <img src="images/face/63.gif" alt="">-->
<!--                        <img src="images/face/64.gif" alt="">-->
<!--                        <img src="images/face/65.gif" alt="">-->
<!--                        <img src="images/face/66.gif" alt="">-->
<!--                        <img src="images/face/67.gif" alt="">-->
<!--                        <img src="images/face/68.gif" alt="">-->
<!--                        <img src="images/face/69.gif" alt="">-->
<!--                        <img src="images/face/70.gif" alt="">-->
<!--                        <img src="images/face/71.gif" alt="">-->
<!--                        <img src="images/face/72.gif" alt="">-->
<!--                        <img src="images/face/73.gif" alt="">-->
<!--                        <img src="images/face/74.gif" alt="">-->
<!--                        <img src="images/face/75.gif" alt="">-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="text">
                <div class="col-xs-10 col-sm-11">
                    <input type="text" class="form-control" id="content" placeholder="输入聊天信息...">
                </div>
                <div class="col-xs-2 col-sm-1">
                    <a id="sub" role="button"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script>

    ws = new WebSocket("ws://"+document.domain+":8686");


    //关闭浏览器触发
    window.onunload = function () {

        var name = '<?php echo $session_list[0] ?>';

        var img = '<?php echo $session_list[1] ?>';

        var inTime = new Date().toLocaleString()

        //type=1代表建立连接时发送数据 type=2代表建立连接后发送数据 type=3代表关闭浏览器来了（认为是退出操作）
        var type = 3;

        var jsObj = {name: name, img: img, inTime: inTime, type: type};

        var json = JSON.stringify(jsObj);

        ws.send(json);

        ws.close();

    }

    //建立连接时发送name,img,time
    ws.onopen = function (e) {

        var name = '<?php echo $session_list[0] ?>';

        var img = '<?php echo $session_list[1] ?>';

        var inTime = new Date().toLocaleString()

        //type=1代表建立连接时发送数据 type=2代表建立连接后发送数据
        var type = 1;

        var jsObj = {name: name, img: img, inTime: inTime, type: type};

        var json = JSON.stringify(jsObj);

        ws.send(json);


    };



    //监听点击事件，发送数据到服务器
    document.getElementById('sub').addEventListener('click', function (event) {

        if(document.getElementById('content').value === ''){

            alert('消息不能为空!')

            return false;

        }

        var inTime = new Date().toLocaleString()

        var name = '<?php echo $session_list[0] ?>';

        var img = '<?php echo $session_list[1] ?>';

        var data = document.getElementById('content').value;

        //type=1代表建立连接时发送数据 type=2代表建立连接后发送数据
        var type = 2;

        var jsObj = {name: name, img: img, inTime: inTime, type: type,data:data};

        var json = JSON.stringify(jsObj);

        ws.send(json);

        document.getElementById('content').value = '';



    });

    //监听输入框enter事件，发送数据到服务器
    document.getElementById('content').addEventListener('keyup', function (event) {

        if(event.key === "Enter"){

            document.getElementById('sub').click();

        }

    });


    //消息监听
    ws.onmessage = function (e) {

        var receiveMsg = JSON.parse(e.data)

        var data = receiveMsg.data;
        var name = receiveMsg.name;
        var imgSrc = receiveMsg.img;
        var time = receiveMsg.inTime;
        var type = receiveMsg.type;


        //如果服务器返回的类型为1，提示xx加入聊天
        if (type == 1) {


            flushList(receiveMsg);

            var joinLi = document.createElement('li');

            joinLi.classList.add('systeminfo');

            var welSpan = document.createElement('span')

            document.getElementById('chats').append(joinLi);

            joinLi.append(welSpan)

            welSpan.innerHTML = '【' + name + '】' + '加入聊天';


        //如果服务器返回的类型为2,就正常显示发送过来的数据
        } else if (type == 2) {

            //显示消息
            var li = document.createElement("li");
            li.classList.add('left')
            var rli = document.createElement("li");
            rli.classList.add('right')
            var img = document.createElement('img');
            var b = document.createElement('b');
            var i = document.createElement('i');
            var div = document.createElement('div');


            //服务端返回的是本人消息
            if(name == '<?php echo $session_list[0] ?>'){

                document.getElementById('chats').append(rli);
                rli.append(img)
                rli.append(b)
                rli.append(i)
                rli.append(div)

                img.src = imgSrc
                b.innerHTML = name
                i.innerHTML = time
                div.innerHTML = data

            }else{
                //服务端返回的其它人的消息
                document.getElementById('chats').append(li);

                li.append(img)
                li.append(b)
                li.append(i)
                li.append(div)

                img.src = imgSrc
                b.innerHTML = name
                i.innerHTML = time
                div.innerHTML = data

            }


        //type = 3代表有连接退出
        }else if(type == 3){

            //更新在线列表和人数
            flushList(receiveMsg);


            //提示xx 退出聊天
            var exitLi = document.createElement('li');

            exitLi.classList.add('systeminfo');

            var exitSpan = document.createElement('span')

            document.getElementById('chats').append(exitLi);

            exitLi.append(exitSpan)

            exitSpan.innerHTML = '【' + name + '】' + '退出了聊天';


        }


        //每次append元素后
        //设置聊天框的滚动条一直在下方
        var divscll = document.getElementById('sc');

        divscll.scrollTop = divscll.scrollHeight;


    };

    //只能被动检测到服务器那边关闭
    ws.onclose = function (e) {
        console.log('onclose')
    };


    ws.onerror = function(){
        console.log('onerror')
    }


    //更新在线人数和在线列表 参数是服务器传递过来的数据
    function flushList(receiveMsg){

        var liveNum = receiveMsg.count;

        var liveLists = receiveMsg.live_list;

        liveLists = Object.values(liveLists);

        //更新在线列表
        document.getElementById('live_num').innerHTML = '在线用户'+liveNum+'人';

        var liveList = document.getElementById('live_list');

        //显示列表时先将历史列表清空
        liveList.innerHTML = '';

        for(let key in liveLists){

            var liveLi = document.createElement('li');

            var liveImg = document.createElement('img');

            var liveB = document.createElement('b');

            liveList.append(liveLi);

            liveLi.append(liveImg)

            liveLi.append(liveB);

            liveImg.src = liveLists[key].img;

            liveB.innerHTML = liveLists[key].name;

        }
    }


</script>


</html>