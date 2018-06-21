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
    <title>销售概况</title>
    <?= Html::cssFile("{$url}/Js/common/ligerUI/skins/Aqua/css/ligerui-tab.css")?>
    <?= Html::cssFile("{$url}/Css/common/public.css")?>
    <?= Html::cssFile("{$url}/Css/common/font-awesome.min.css")?>
    <?= Html::cssFile("{$url}/Css/common/page.css")?>
    <?= Html::jsFile("{$url}/Js/common/jquery.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/core/base.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerAccordion.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerLayout.js")?>
    <?= Html::jsFile("{$url}/Js/common/ligerUI/js/plugins/ligerTab.js")?>

    <?= Html::jsFile("{$url}/Js/common/layer/laydate/laydate.js")?>
    <?= Html::jsFile("{$url}/Js/common/echart/echarts.min.js")?>
    <?= Html::jsFile("{$url}/Js/common/echart/macarons.js")?>
    <?= Html::jsFile("{$url}/Js/common/echart/china.js")?>
    <?= Html::jsFile("{$url}/Js/common/public.js")?>
    <?= Html::jsFile("{$url}/Js/statistics/sales_profile.js")?>

</head>
<body>

    <div class="page">
        <!--  标题栏   -->
        <div class="fixed-bar">
            <div class="item-title">
                <div class="subject">
                    <h3>统计报表 - 销售概况</h3>
                    <h5>网站系统销售概况</h5>
                </div>
            </div>
        </div>
        <!--  操作提示  -->
        <div id="explanation" class="explanation">
            <div id="checkZoom" class="title">
                <i class="fa pressIcon"></i>
                <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                <span title="收起提示"></span>
            </div>
            <ul>
                <li>可根据时间查询某个时间段的销售统计.</li>
                <li>每日销售金额、销售商品数</li>
            </ul>
        </div>
        <!--   详情内容   -->
        <div class="flexigrid">
            <div class="mDiv">
                <div class="ftitle">
                    <h3>销售概况</h3>
                    <h5>今日销售总额：￥<span>0</span>|人均客单价：￥<span>333</span>|今日订单数：<span>10</span>|今日取消订单：<span>0</span></h5>
                </div>
                <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
                <form class="navbar-form form-inline fr" id="search-form" method="get" action="" onSubmit="return check_form();">
                    <div class="sDiv">
                        <div class="sDiv2" style="margin-right: 10px;">
                            <input type="text" size="30" name="start_time" id="start_time" value="" placeholder="起始时间" class="qsbox">
                            <input type="button" class="btn" value="起始时间">
                        </div>
                        <div class="sDiv2" style="margin-right: 10px;">
                            <input type="text" size="30" name="end_time" id="end_time" value="" placeholder="截止时间" class="qsbox">
                            <input type="button" class="btn" value="截止时间">
                        </div>
                        <div class="sDiv2">
                            <input class="btn" value="搜索" type="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div id="statistics" style="height: 400px;"></div>
            <div class="hDiv">
                <div class="hDivBox">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th class="sign" axis="col0">
                                <div style="width: 24px;"><i class="ico-check"></i></div>
                            </th>
                            <th align="center" abbr="article_title" axis="col3" class="">
                                <div style="width: 124px;" class="ta_c">时间</div>
                            </th>
                            <th align="center" abbr="ac_id" axis="col4" class="">
                                <div style="width: 102px;" class="ta_c">订单数</div>
                            </th>
                            <th align="center" abbr="article_show" axis="col5" class="">
                                <div style="width: 102px;" class="ta_c">销售总额</div>
                            </th>
                            <th align="center" abbr="article_time" axis="col6" class="">
                                <div style="width: 102px;" class="ta_c">客单价</div>
                            </th>
                            <th align="center" axis="col1" class="handle">
                                <div style="width: 172px;" class="ta_c">操作</div>
                            </th>
                            <th style="width:100%" axis="col7"><div></div></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="bDiv" style="height: auto;">
                <div id="flexigrid">
                    <table>
                        <tbody>
                        <tr>
                            <td class="sign">
                                <div style="width: 24px;"><i class="ico-check"></i></div>
                            </td>
                            <td align="center" class="">
                                <div style="width: 120px;" class="ta_c"></div>
                            </td>
                            <td align="center" class="">
                                <div style="width: 100px;" class="ta_c"></div>
                            </td>
                            <td align="center" class="">
                                <div style="width: 100px;" class="ta_c"></div>
                            </td>
                            <td align="center" class="">
                                <div style="width: 100px;" class="ta_c"></div>
                            </td>
                            <td align="center" class="handle">
                                <div style="width: 170px; max-width:170px;" class="ta_c">
                                    <a href="javascript:void(0)" class="btn blue"><i class="fa fa-search"></i>查看订单列表</a>
                                </div>
                            </td>
                            <td style="width: 100%;"><div>&nbsp;</div></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="iDiv" style="display: none;"></div>
            </div>
        </div>
    </div>

</body>


