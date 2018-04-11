<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/public.css">
    <link rel="stylesheet" href="css/person.css">
    <script src="js/rem.js"></script>
</head>
<body>
<div class="top">
    <a href="shezhi.html">
        <div class="shezhi">&#xe65b;</div>
    </a>
    <div class="item">
        &#xe672;
        &nbsp;&nbsp;
        &#xe61c;
    </div>
    <div class="top-img"></div>
    <h5 class="title-h5">
        <?php
        session_start();
        if(isset($_SESSION["qqq"])){
            echo $_SESSION["qqq"];
        }else{
            echo "请点击登录";
        }
        ?></h5>

</div>
<div class="part1">
    <div class="part-1">
        <img src="img/images/p1.png" alt="">
        收藏
    </div>
    <div class="part-1 part-2">
        <img src="img/images/p2.png" alt="">
        评价
    </div>
    <div class="part-1 part-2">
        <img src="img/images/m6.png" alt="">
        足迹
    </div>
</div>
<div class="part2">
    <h5>美团钱包</h5>
    <div class="part-top">
        <div class="part2-1">
            <img src="img/images/m1.png" alt="" class="pt-1">
            我的钱包
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m2.png" alt="" class="pt-1">
            红包/卡券
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m3.png" alt="" class="pt-1">
            银行卡
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m4.png" alt="" class="pt-1">
            余额
        </div>
    </div>
    <div class="part-top part-bottom">
        <div class="part2-1">
            <img src="img/images/m5.png" alt="" class="pt-1">
            信用卡还款
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m11.png" alt="" class="pt-1">
            银联二维码
        </div>
    </div>
</div>
<div class="part2 part3">
    <h5>美团服务</h5>
    <div class="part-top">
        <div class="part2-1">
            <img src="img/images/m7.png" alt="" class="pt-1 pt-2">
            会员中心
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m8.png" alt="" class="pt-1 pt-2">
            手机充值
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m9.png" alt="" class="pt-1 pt-2">
            客服中心
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/m10.png" alt="" class="pt-1 pt-2">
            好友去哪
        </div>
    </div>
    <div class="part-top part-bottom">
        <div class="part2-1">
            <img src="img/images/x2.png" alt="" class="pt-1 pt-3">
            免流用美团
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/x5.png" alt="" class="pt-1 pt-3">
            发票助手
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/x3.png" alt="" class="pt-1 pt-4">
            我要合作
        </div>
        <div class="part2-1 part2-2">
            <img src="img/images/x4.png" alt="" class="pt-1 pt-4">
            关于美团
        </div>
    </div>
</div>
<div class="daohang">
    <a href="index.html">
        <div class="daohang1">
            &#xe613;
            <span>首页</span>
        </div>
    </a>
    <a href="find.html">
        <div class="daohang1 daohang2">
            &#xe612;
            <span>发现</span>
        </div>
    </a>
    <a href="book.html">
        <div class="daohang1 daohang2 ">
            &#xe645;
            <span>订单</span>
        </div>
    </a>
    <a href="person.html">
        <div class="daohang1 daohang2 daohang3">
            &#xe62f;
            <span>我的</span>
        </div>
    </a>
</div>
<div class="loginto">
    <div class="newtop">
        <i class="cloose">×</i>
        登录美团
        <em>注册</em>
    </div>
    <p class="top-p">推荐登录方式</p>
    <div class="weixin">
        <i>&#xe629;</i>
        微信登录
    </div>
    <p class="top-p top-p1">或</p>
    <div class="phone">
        使用手机号登录注册
    </div>
    <p class="top-p method">使用其他方式登录</p>
    <p class="bottom">登录代表你已同意<span>《美团网用户协议》</span></p>
</div>
<div class="other">
    <div class="upother"></div>
    <div class="other-bottom">
        <div class="other-method">
            <span>
                <img src="img/images/11.png" alt="">
                QQ
            </span>
            <span class="other-span">
                <img src="img/images/12.png" alt="">
                微博
            </span>
            <a href="loginin.html">
            <span>
                <img src="img/images/13.png" alt="">
                账号密码
            </span>
            </a>
        </div>
        <p>取消</p>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    $(".title-h5").click(function () {
        $(".loginto").slideDown();
    });
    $(".cloose").click(function () {
        $(".loginto").slideUp();
    })
    $(".method").click(function () {
        $(".other").slideDown();
    })
    $(".other-bottom p").click(function () {
        $(".other").slideUp();
    })
</script>
</body>
</html>