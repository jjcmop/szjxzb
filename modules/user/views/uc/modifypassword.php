<?php
use yii\helpers\Html;
use yii\helpers\Url;
$url = Url::to("@web/web/home/Static");
$this->title = "账号安全-设置支付密码";
$this->keywords = "账号安全-设置支付密码";
$this->description = "账号安全-设置支付密码";
?>
<?= Html::cssFile("{$url}/Css/personalCenter/common.css"); ?>
<?= Html::cssFile("{$url}/Css/personalCenter/modifyPassword.css"); ?>
    <div class="container">
        <!-- 面包屑 -->
        <div class="crumbs">
            <span>首页</span> &gt; <span class="secondLevel">个人中心</span>
        </div>

        <!-- content -->
        <div class="content cf">
            <!-- 左侧边导航 -->
            <?=$this->render('../layouts/uc_left_nav.php')?>

            <!-- 右侧内容 -->
            <div class="rightContent fl">
                <span class="pwdTitle">设置支付密码</span>

                <!-- 绑定手机号 -->
                <div class="setPwd">
                    <ul class="speedBar cf">
                        <li class="bindNum fl pr">
                            <i></i>
                            <span>绑定手机号</span>
                            <b></b>
                        </li>
                        <li class="setPayment fl pr">
                            <i></i>
                            <span>设置支付密码</span>
                            <b></b>
                        </li>
                        <li class="complete fl pr">
                            <i></i>
                            <span>完成</span>
                            <b></b>
                        </li>
                    </ul>
                    <div class="inputBox">
                        <div class="phoneNumber">
                            <input type="number" oninput="if(value.length>11)value=value.slice(0,11)" placeholder="请输入手机号码">
                        </div>
                        <div class="verificationCode cf">
                            <input class="verificationInput fl" type="number" oninput="if(value.length>6)value=value.slice(0,6)" placeholder="请输入验证码">
                            <input class="codeButton fl" type="button" disabled value="获取验证码">
                        </div>
                    </div>
                    <a class="subBtn" href="javascript:;">提交</a>
                </div>

                <!-- 设置支付密码 -->
                <div class="inputPwd hide">
                    <ul class="speedBar cf">
                        <li class="bindNum fl pr">
                            <i></i>
                            <span>绑定手机号</span>
                            <b></b>
                        </li>
                        <li class="setPayment setPaymentActive fl pr">
                            <i></i>
                            <span>设置支付密码</span>
                            <b></b>
                        </li>
                        <li class="complete fl pr">
                            <i></i>
                            <span>完成</span>
                            <b></b>
                        </li>
                    </ul>
                    <div class="inputBox">
                        <div class="phoneNumber">
                            <input type="number" oninput="if(value.length>6)value=value.slice(0,6)" placeholder="输入支付密码">
                        </div>
                        <div class="phoneNumber">
                            <input type="number" oninput="if(value.length>6)value=value.slice(0,6)" placeholder="再次输入支付密码">
                        </div>
                    </div>
                    <a class="subBtn" href="javascript:;">提交</a>
                </div>

                <!-- 完成 -->
                <div class="inputComplete hide">
                    <ul class="speedBar cf">
                        <li class="bindNum fl pr">
                            <i></i>
                            <span>绑定手机号</span>
                            <b></b>
                        </li>
                        <li class="setPayment setPaymentActive fl pr">
                            <i></i>
                            <span>设置支付密码</span>
                            <b></b>
                        </li>
                        <li class="complete completeActive fl pr">
                            <i></i>
                            <span>完成</span>
                            <b></b>
                        </li>
                    </ul>
                    <div class="inputBox completeIcon">
                        <i class="inputCompleteIcon"></i>
                        <span class="inputCompleteText">支付密码设置完成</span>
                    </div>
                </div>

                <!-- 温馨提醒 -->
                <div class="pwdExplain">
                    <span class="pwdExplainTitle">温馨提醒</span>
                    <p>• 为保障您的账号安全，变更重要信息需要身份验证</p>
                    <p>• 若有疑问请联系在线客服或拨打400-0368-163（9:00-20:00）</p>
                </div>
            </div>
        </div>
    </div>
<?= Html::jsFile("{$url}/Js/personalCenter/modifyPassword.js"); ?>