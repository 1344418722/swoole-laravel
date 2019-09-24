<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>正正的窝</title>
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="description" content="1433223" />
    <link rel="stylesheet" href="css/spop.min.css" />
    <link rel="stylesheet" href="css/tooltips.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/inputEffect.css" />
    <style type="text/css">
        *{margin:0px; padding:0px;}
        body{
            background:url("images/snow.jpg") repeat-y ;
            background-size:95rem 85rem;

        }
        #qq{width:37rem;/*宽*/height:23%;/*高*/background:#fff;/*背景颜色*/
            margin:50px auto 30px; border-radius:5px;/*Html5 圆角*/}
        #qq p{font-size:12px; color:#666; font-family:"微软雅黑";
            line-height:45px; text-indent:20px;}
        #qq .message{width:560px; height:70px;margin:0px auto; outline:none;
            border:1px solid #ddd;
            text-overflow:ellipsis;
            /*粗细 风格 颜色*/}
        #qq .But{width:560px;height:35px;margin:15px auto 0px; position:relative;/*相对，参考对象*/}
        #qq .But img.bq{float:left;/*左浮动*/}
        #qq .But span.submit{width:80px;height:30px; background:#ff4200;					display:block; float:right;/*右浮动*/								line-height:30px;border-radius:5px;								cursor:pointer;/*手指*/color:#fff;font-size:12px;					text-align:center;font-family:"微软雅黑";}

        /*face begin*/
        #qq .But .face{width:390px; height:160px; background:#fff; padding:10px;
            border:1px solid #ddd; box-shadow:2px 2px 3px #666;
            position:absolute;/*绝对定位*/ top:21px; left:15px;
            display:none;/*隐藏*/}
        #qq .But .face ul li{width:22px;height:22px;
            list-style-type:none;/*去掉圆点*/ float:left;
            margin:2px; cursor:pointer;}

        /*msgCon begin*/
        .msgCon{width:600px;height:500px; margin:0px auto;}
        .msgCon .msgBox{ background:#fff;
            padding:10px; margin-top:20px;}
        .msgCon .msgBox dl{height:60px; border-bottom:1px dotted #ddd;}
        .msgCon .msgBox dl dt{width:50px; height:50px;float:left;}
        .msgCon .msgBox dl dt img{border-radius:25px;}
        .msgCon .msgBox dl dd{width:500px; height:50px;  line-height:50px;float:right; font-size:16px;font-family:"微软雅黑";}
        .msgCon .msgBox .msgTxt{font-size:12px; color:#666; line-height:25px;}
        .one{
            width: 100%;
            height: 4%;
            background-color:#f5f5f5;
            position: fixed;
            top: 0px;
            left:0;
        }
        .one1{
            width: 37rem;
            height: 4vh;
            /*background: red;*/
            margin: 0 auto;
        }
        .one11{
            width:20%;
            height: 4vh;
            text-align: center;
            line-height: 4vh;
            color: #939393;
            float: right;
            border-left: 1px solid #1d2e40;
            border-right:1px solid #1d2e40;
        }
        .one12{
            width:20%;
            height: 4vh;
            text-align: center;
            line-height: 4vh;
            color: #939393;
            float: right;
            border-left: 1px solid #1d2e40;
            border-right:1px solid #1d2e40;
        }
    </style>
</head>
<body>
<div class="one">
    <div class="one1">
        <div class="one11" onclick="javascript:window.location.href='/login'">登录</div>
    </div>
</div>
<div id="qq">
    <p>有什么新鲜事想告诉大家?</p>
    <div class="message" contentEditable='true'></div>

    <div class="But">
        <img src="images/bba_thumb.gif" class='bq'/>
        <span class='submit'>发表</span>
        {{----引入小表情们----}}
        <div class="face">
          @include('index.face_bagin')
        </div>
    </div>
</div>
<!--qq end-->
<div id="time1"></div>
<!--msgCon begin-->
<div class="msgCon">




</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>

<script src="js/jquery.pure.tooltips.js"></script>
<script src="js/spop.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
    });
    $.get('session_user_name',{},function (data) {
        if(data>0){
            $('.one1').html("<div class=\"one12\">个人中心</div>");
        }

    });

    //点击小图片，显示表情
    $(".bq").click(function(e){
        $(".face").slideDown();//慢慢向下展开
        e.stopPropagation();   //阻止冒泡事件
    });
    //在桌面任意地方点击，他是关闭
    $(document).click(function(){
        $(".face").slideUp();//慢慢向上收
    });

    //点击小图标时，添加功能
    $(".face ul li").click(function(){
        var simg=$(this).find("img").clone();
        $(".message").append(simg);
    });

    //点击发表按扭，发表内容
    var img='images/tx.jpg';
    var  name="正正";
    $("span.submit").click(function(){
        $.get('session_user_name',{},function (data) {
            if(data>0){
                $('.one1').html("<div class=\"one12\">个人中心</div>");
                var txt=$(".message").html();
                console.log(txt);
                if(txt==""){
                    $('.message').focus();//自动获取焦点
                    return;
                }else if(txt.length>200){
                    $('.message').focus();//自动获取焦点
                    $.pt({
                        target: $(".message"),
                        position: 'r',
                        align: 't',
                        width: 'auto',
                        arrow:true,
                        height: 'auto',
                        content:"输入长度不能超过200的亲亲"
                    });
                    return;
                }
                $.post('/release',{'txt':txt},function (data) {
                    return;
                    $(".msgCon").prepend("<div class='msgBox'><dl><dt><img src='"+img+"' width='50' height='50'/></dt><dd>"+name+"</dd></dl><div class='msgTxt'>"+txt+"</div></div>");
                });

            }else{
                $.pt({
                    target: $("span.submit"),
                    position: 'r',
                    align: 't',
                    width: 'auto',
                    arrow:true,
                    height: 'auto',
                    content:"请先登录哦亲亲"
                });
                return false;
            }

        });

    });

</script>

<script>
    var ws = new WebSocket("ws://123.207.245.120:9200");
    ws.onopen = function(event){
        console.log("客户端已连接上!");
        ws.send("hello server,this is client!");
    };
    ws.onmessage= function(event){
        console.log("服务器传过来的数据是："+event.data);
    };

    ws.onclose = function(event){
        console.log("连接已关闭");
    };
</script>
</body>
</html>
