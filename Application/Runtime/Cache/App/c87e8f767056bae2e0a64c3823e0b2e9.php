<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>登录</title>
    <meta name="author" content="ecdaddy.com">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="./Application/Tpl/App/default/Public/Static/member/base.css">
</head>
<body>
    <header>
        <p class="button_img" style="line-height: 3em; color:#fff;width:100%;text-align:center; margin:0 auto;">立即关注，组建<!--?php echo (名族品牌); ?-->家族</p>
    </header><div class="login-reg mc radius">
    <form action="" method="post" id="frm_login">
        <div>账户名：</div>
        <div>
            <input type="text" value="" name="login" class="common-input" placeholder="请输入用户名">
        </div>
        <div>密码：</div>
        <div>
            <input class="common-input" type="password" name="password">
        </div>
        <div>
            <a href="<?php echo U('App/Index/member');?>" class="btn_green fr" style="width:48%">微信登录</a>
            <input type="submit" class="sub_btn fl" style="width:48%" value="登录">
        </div>
    </form>
    <div style="padding-top:10px;min-height:120px;">
        <p style="text-align:left; float:left;">
            <span class="red">注：微信登录时，不需要输入账号密码，但需要在微信中操作！</span>
            <br>
            还没有注册？点击【<a href="<?php echo U('App/Member/register');?>">注册</a>】</p>
        </div>
    </div>
    ﻿<div class="to-top"><a href="javascript:scroll(0,0)" hidefocus="true"><span></span>回顶部</a></div>
</body></html>