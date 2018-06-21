<?php
use yii\helpers\Html;
use yii\helpers\Url;
$url = Url::to("@web/web/mobile/Static");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>忘记密码</title>
    <link rel="stylesheet" href="<?=$url?>/Css/common/sm.min.css">
    <link rel="stylesheet" href="<?=$url?>/Css/common/sm-extend.min.css">
    <link rel="stylesheet" href="<?=$url?>/Css/common/base.css">
    <link rel="stylesheet" href="<?=$url?>/Css/login/forgetPwd.css">
</head>
<body class="mHome">

    <!--  加载层   -->
    <div id="loader">
        <div class="loaderInner">
            <img src="<?=$url?>/Image/common/logo/logo1.png" alt="">
        </div>
    </div>

    <!--  Back  -->
    <div class="backBox">
        <a href="?m=m/login/index" class="back backIcon"></a>
    </div>

    <!--  logo  -->
    <div class="logo">
        <img class="logoImg dib" src="<?=$url?>/Image/common/logo/logo.png" width="154" height="201" alt="">
    </div>

    <!--  表单   -->
    <form action="" class="formBox">

        <!--  手机注册  -->
        <div class="phoneRegBox WrapBox">
            <div class="formBoxWrap account pr"><i></i><input class="input accountInput" type="text" placeholder="请输入账号" maxlength="20"></div>
            <div class="formBoxWrap phone pr"><i></i><input class="input phoneInput" type="text" placeholder="请输入11位手机号" maxlength="20"></div>
            <div class="formBoxWrap cardId pr cf"><i></i><input class="formInput input codeInput" type="text" placeholder="短信验证码" maxlength="6"><input class="btnCode input fr" readonly value="获取验证码"/></div>
            <div class="formBoxWrap pwd pr"><i></i><input class="input pwdInput" type="password" placeholder="请输入密码" maxlength="20"></div>
        </div>

        <!-- 重置密码 -->
        <a href="javascript:void(0)" class="btnReset">重置密码</a>
    </form>

<script src="<?=$url?>/Js/common/zepto.min.js"></script>
<script src="<?=$url?>/Js/common/sm.min.js"></script>
<script src="<?=$url?>/Js/common/sm-extend.min.js"></script>
<script src="<?=$url?>/Js/common/public.js"></script>
<script src="<?=$url?>/Js/login/forgetPwd.js"></script>
</body>
</html>