<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>正正的窝</title>
    <meta name="keywords" content="" />
    
    <meta name="description" content="1433223" />
    <link rel="stylesheet" href="css/spop.min.css" />
    <link rel="stylesheet" href="css/tooltips.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/inputEffect.css" />
    <style type="text/css">
        *{margin:0px; padding:0px;}
        body{
            width: 95vw;
            height: 95vh;
            background:url("images/snow.jpg") repeat-y ;
            background-size:95rem 95rem;

        }
        #qq{width:37rem;/*宽*/height:auto;/*高*/background:#fff;/*背景颜色*/
            margin:50px auto 30px; border-radius:5px;/*Html5 圆角*/}
        #qq p{font-size:12px; color:#666; font-family:"微软雅黑";
            line-height:45px; text-indent:20px;}
        #qq .message{width:560px; height:70px;margin:0px auto; outline:none;
            border:1px solid #ddd;
            text-overflow:ellipsis;
            /*粗细 风格 颜色*/}

        #qq .But{width:90%;height:35px;margin:15px auto 0px; position:relative;/*相对，参考对象*/}
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
            cursor:pointer;
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
            cursor:pointer;
        }
        .two{
            width: 300px;
            height: 250px;
            position: fixed;
            background-color: #ede9e9;
            border-radius: 10px;
            opacity: 0.9;
            left: 40px;
            display: none;
        }
        td{
            border: 1px solid grey;
            width: 150px;
            height: 30px;
            border-radius: 5px;
            margin-top: 5px;
        }
        .but{
            width: 80px;
            height: 30px;
            background: #ff4200;
            display: block;
            border: 0px;
            line-height: 30px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 12px;
            text-align: center;
            font-family: "微软雅黑";
            margin-top: -21px;
        }
        .but1{
            width: 80px;
            height: 30px;
            background: #ff4200;
            display: block;
            border: 0px;
            line-height: 30px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 12px;
            text-align: center;
            font-family: "微软雅黑";

        }

        td input{
            width: 200px;
            height: 32px;
            border-radius: 3px;
            border: 0;
        }
        .two img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px solid;

        }
    </style>
</head>
<body>
<div class="one">
    <div class="one1">
        <div class="one11" onclick="javascript:window.location.href='/login'">登录</div>
    </div>
</div>
<div class="two">
    <table>
        <caption align="top">
            <img src="images/tx.jpg" onerror="this.src='images/tx.jpg'" />
        </caption>
        <tr>
            <th>&nbsp;&nbsp;账号:</th>
            <td class="td_name"></td>
        </tr>
        <tr>
            <th>&nbsp;&nbsp;昵称:</th>
            <td><input type="text" maxlength="10" min="1" name="username"></td>
        </tr>
        <tr>
            <th>&nbsp;&nbsp;密码:</th>
            <td><input type="password" maxlength="10" min="1" name="password"></td>
        </tr>
        <tr>
            <th>
               &nbsp;&nbsp; <button class="but" onclick="two_up_user()">修改</button>
            </th>
            <td style="border: 0px">
                <button class="but1" style="background: #BBBBBB" onclick="two_hide()">关闭</button>
            </td>
        </tr>
    </table>


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
<div class="msgCon" id="data" >

    <div class="msgBox" v-for="item in item">
        <dl>
            <dt>
                <img src="${item.img}" width="50" onerror="this.src='images/tx.jpg'" height="50">
            </dt>
            <dd>${item.username}
                <span style="font-size: 90%;color:#EEDFCC;float:right;">
                   ${item.time | formatDate}
                </span>
            </dd>
        </dl>
        <div class="msgTxt">
            ${item.text}
        </div>
    </div>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.pure.tooltips.js"></script>
<script src="js/spop.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>

    var example1 = new Vue({
        delimiters: ['${', '}'],
        el: '#data',
        data: {
            item:[]
        },
        mounted: function () {
            var that = this;
            $.get('/data',{},function (data) {
                eval("var data="+data);
                that.item=data;
            })
        },filters: {
            formatDate: function (value) {

                value = Number(value);
                console.log(value);
                let date = new Date(value);
                let y = date.getFullYear();
                let MM = date.getMonth() + 1;
                MM = MM < 10 ? ('0' + MM) : MM;
                let d = date.getDate();
                d = d < 10 ? ('0' + d) : d;
                let h = date.getHours();
                h = h < 10 ? ('0' + h) : h;
                let m = date.getMinutes();
                m = m < 10 ? ('0' + m) : m;
                let s = date.getSeconds();
                s = s < 10 ? ('0' + s) : s;
                return y + '-' + MM + '-' + d + ' ' + h + ':' + m + ':' + s;
            }
        }


    })


</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
    });
    $.get('session_user_name',{},function (data) {
        if(data>0){
            $('.one1').html("<div class=\"one12\" onclick='one12()'>个人中心</div>");
        }

    });
    function two_up_user() {
        username=$('[name="username"]').val();
        password=$('[name="password"]').val();
        if(username.length>15){
            $.pt({
                target: $('[name="username"]'),
                position: 'r',
                align: 't',
                width: 'auto',
                arrow:true,
                height: 'auto',
                content:"输入长度不能超过15个字符的亲亲"
            });
        }else if(password.length>15){
            $.pt({
                target: $('[name="password"]'),
                position: 'r',
                align: 't',
                width: 'auto',
                arrow:true,
                height: 'auto',
                content:"输入长度不能超过15个字符的亲亲"
            });
        }else{
            $.post('/up_user',{'username':username,'password':password},function (data) {

                if(data==0){
                    spop({
                        template: '<h4 class="spop-title">系统错误</h4>即将于3秒后关闭',
                        position: 'top-center',
                        style: 'error',
                        autoclose: 3000,
                        onOpen : function(){
                            var second = 2;
                            var showPop = setInterval(function(){
                                if(second == 0){
                                    clearInterval(showPop);
                                }
                                $('.spop-body').html('<h4 class="spop-title">失败</h4>即将于'+second+'秒后关闭');
                                second--;
                            },1000);
                        },
                        onClose : function(){
                            return false;
                        }
                    });
                }else{
                    spop({
                        template: '<h4 class="spop-title">OK</h4>即将于3秒后关闭',
                        position: 'top-center',
                        style: 'success',
                        autoclose: 3000,
                        onOpen : function(){
                            var second = 2;
                            var showPop = setInterval(function(){
                                if(second == 0){
                                    clearInterval(showPop);
                                }
                                $('.spop-body').html('<h4 class="spop-title">OK</h4>即将于'+second+'秒后关闭');
                                second--;
                            },1000);
                        },
                        onClose : function(){
                            $('.two').hide(1000)
                        }
                    });
                }
            })


        }


    }

    //个人中心
    function one12(){
        $.post('/user_data',{'data':1},function (data) {
            console.log(1);
            if(data==0){
                spop({
                    template: '<h4 class="spop-title">系统错误</h4>即将于3秒后关闭',
                    position: 'top-center',
                    style: 'error',
                    autoclose: 3000,
                    onOpen : function(){
                        var second = 2;
                        var showPop = setInterval(function(){
                            if(second == 0){
                                clearInterval(showPop);
                            }
                            $('.spop-body').html('<h4 class="spop-title">失败</h4>即将于'+second+'秒后关闭');
                            second--;
                        },1000);
                    },
                    onClose : function(){
                    return false;
                    }
                });
            }else{
                eval("var data="+data);
                $('.td_name').text(data.name);
                $("[name='username']").val(data.username);
                $("[name='password']").val(data.password);
                $('.two img').prop('src',data.img);
                $('.two').show(1000);
            }

        });


    }
    // 关闭个人中心
    function two_hide(){
        $('.two').hide(1000)
    }
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
//websocket连接
    var wsServer = 'ws://123.207.245.120:9501';
    var websocket = new WebSocket(wsServer);
    websocket.onopen = function(evt){
        console.log('已经连接了')
    };
    websocket.onmessage = function(evt){
        // console.log('从服务器获取到的数据:'+ evt.data);
        $(".msgCon").prepend(evt.data);
        };
    websocket.onclose = function(evt){
        console.log("服务器拒绝");
    };
    websocket.onerror = function(evt,e){
        console.log('错误:'+evt.data);
    };
    //点击发表按扭，发表内容
    var img='images/tx.jpg';

    $("span.submit").click(function(){
        $.get('session_user_name',{},function (data) {
            if(data>0){
                $('.one1').html("<div class=\"one12\" onclick='one12()'>个人中心</div>");
                var txt=$(".message").html();

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
                        content:"输入长度不能超过200个字符的亲亲"
                    });
                    return;
                }else if(txt.length<3){
                    $('.message').focus();//自动获取焦点
                    $.pt({
                        target: $(".message"),
                        position: 'r',
                        align: 't',
                        width: 'auto',
                        arrow:true,
                        height: 'auto',
                        content:"输入长度不能短于3个字符的亲亲"
                    });
                    return;
                }else{
                    $.post('/release',{'txt':txt},function (data) {
                        if(data==0){
                            $('.message').focus();//自动获取焦点
                            $.pt({
                                target: $(".message"),
                                position: 'r',
                                align: 't',
                                width: 'auto',
                                arrow:true,
                                height: 'auto',
                                content:"服务器炸了，等帅气的正正修吧"
                            });
                        }else{

                            eval("var data="+data);
                            var name=data.username;
                            var txt=data.text;
                            var time=data.time;
                            var websocket_data="<div class='msgBox'><dl><dt><img src='"+img+"' width='50' onerror=\"this.src='images/tx.jpg'\" height='50'/></dt><dd>"+name     +
                                '<span style="font-size: 90%;color:#EEDFCC;float:right;">' +time+
                                '<span>'
                                +"</dd></dl><div class='msgTxt'>"+txt+"</div></div>"
                            websocket.send(websocket_data);
                            $('.message').text('');
                            console.log('发送成功');
                        }

                    });
                }


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

</script>
</body>
</html>
