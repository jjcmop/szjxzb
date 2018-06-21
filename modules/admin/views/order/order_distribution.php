<?php
use yii\helpers\Html;
use yii\helpers\Url;
$session = Yii::$app->session;
$url = Url::to("@web/web/admin/Static");
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>订单配货</title>
    <?= Html::cssFile("{$url}/Js/common/ligerUI/skins/Aqua/css/ligerui-tab.css")?>
    <?= Html::cssFile("{$url}/Css/common/public.css")?>
    <?= Html::cssFile("{$url}/Css/common/font-awesome.min.css")?>
    <?= Html::cssFile("{$url}/Css/common/page.css")?>
    <?= Html::jsFile("{$url}/Js/common/jquery.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/core/base.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerAccordion.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerLayout.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerTab.js")?>
    <?= Html::jsFile("{$url}/Js/common/public.js")?>
</head>
<body>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>订单配货</h3>
                <h5>商城实物商品交易订单查询及管理</h5>
            </div>
            <div class="subject" style="width:62%">
                <a href="javascript:void(0);" target="_blank" style="float:right;margin-right:10px" class="ncap-btn-big ncap-btn-green"><i class="fa fa-print"></i>打印配货单</a>
            </div>
        </div>
    </div>
    <div class="ncap-order-style">
        <div class="ncap-order-details">
            <form id="order-action">
                <div class="tabs-panels">
                    <div class="goods-info">
                        <h4>商品信息</h4>
                        <table>
                            <thead>
                            <tr>
                                <th colspan="2">商品</th>
                                <th>规格属性</th>
                                <th>购买数量</th>
                                <th>商品单价</th>
                                <th>选择发货</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="w30"><div class="goods-thumb"><a href="javascript:void(0);" target="_blank"><img alt="" src="../../Static/Image/order/detail/goods_thumb_140_200_200.jpeg"> </a></div></td>
                                <td style="text-align: left;"><a href="javascript:void(0);" target="_blank">Apple iPhone 6s 16GB 玫瑰金色 移动联通电信4G手机</a><br></td>
                                <td class="w80">网络:4G 内存:16G 颜色:黑色</td>
                                <td class="w60">3</td>
                                <td class="w60">8968.3</td>
                                <td class="w80">
                                    <input type="checkbox" name="goods[]" value="1733" checked="checked">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="addr-note">
                        <h4>收货信息</h4>
                        <dl>
                            <dt>收货人：</dt>
                            <dd>张谷泉</dd>
                            <dt>联系方式：</dt>
                            <dd>13512345678</dd>
                            <dt>邮编：</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt>收货地址：</dt>
                            <dd>广东省，深圳市，龙岗区，五和大道五和商业广场2017</dd>
                        </dl>
                    </div>
                    <div class="misc-info">
                        <h3>订单详情</h3>
                        <dl>
                            <dt>下单日期：</dt>
                            <dd>2017-02-07 11:45:01</dd>
                            <dt>订单号：</dt>
                            <dd>201702071145017310</dd>
                            <dt>支付方式：</dt>
                            <dd>在线支付</dd>
                        </dl>
                        <dl>
                            <dt>配送方式：</dt>
                            <dd>申通物流</dd>
                            <dt>订单总价：</dt>
                            <dd>0.00</dd>
                            <dt>商品价格：</dt>
                            <dd>0.00</dd>
                        </dl>
                        <dl>
                            <dt>配送费用：</dt>
                            <dd>0.00</dd>
                            <dt>订单优惠：</dt>
                            <dd>0.00</dd>
                            <dt>使用积分：</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>使用余额：</dt>
                            <dd>0.00</dd>
                            <dt>应付金额：</dt>
                            <dd>0.00</dd>
                            <dt>发票抬头：</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt>纳税人识别号：</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt>用户留言：</dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>