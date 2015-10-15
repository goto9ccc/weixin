<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"><meta content="telephone=no" name="format-detection"><meta name="apple-touch-fullscreen" content="yes"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo ($message_name); ?>旗舰店---商品分类列表</title>
<link href="../Public/Static/css/base.css" type="text/css" rel="stylesheet">
<link href="../Public/Static/css/index.css" type="text/css" rel="stylesheet">
<link href="../Public/Static/css/search_result.css" type="text/css" rel="stylesheet">
<link href="../Public/Static/css/itemListTemplate.css" type="text/css" rel="stylesheet">
</head>
<body>
<!--header id="search-head" class="c_txt rel">
<a href="http://shop.paipai.com/330440523" id="hd_back" class="abs comm_p8">返回</a>
<div id="search-box" class="rel">
<div class="search_left">
<em id="tb_title" class="abs tb_serch_toggle"></em
></div>
<form id="tb_search_form2" name="tb_search_form" method="get" action="search_result.html"><input id="tb_search2" name="tb_search" class="block wrap" placeholder="搜索本店商品" type="search"> <input id="userid" name="userid" value="326928912" type="hidden"> 
<a id="search_button" class="abs tb_button">搜索</a>
</form>
</div>
</header>
<div id="search_result_empty" class="hide c_txt">对不起，没搜索出任何东西</div>
<section id="search-content">
<div class="i_wrap margin_auto rel hide" id="search_result_list_wrap">
<ul class="i_ul rel" id="hot_ul"></ul>
<div class="clear"></div>
</div></section-->
<section style="display: block;" id="shop_classes_wrap" class="over_hidden hide">
<ul id="shop_classes_ul" class="rel">
<li id="shop_classes_li_hd" class="shop_classes_li">商品分类</li>
<?php foreach($menu as $a) { echo '<li class="shop_classes_li rel"> <a class="block over_hidden ellipsis" href="index.php?g=App&m=Index&a=listsp&id='.$a['id'].'">'.$a['name'].'</a> </li>'; } ?>
</ul></section>
<p id="scroll_loading_txt" class="c_txt loading hide">&nbsp;</p>
<script src="../Public/Static/js/getList.htm"></script>
<script src="../Public/Static/js/showShopClasses.js"></script>
<script src="../Public/Static/js/piwik.js" async="" defer="defer" type="text/javascript"></script>
<script src="../Public/Static/js/base_H5.js"></script>
<script>var Search={seller_id:M.urlQuery("userid"),init:function(){$("#hd_back").attr("href","/?userid="+Search.seller_id),$("#userid").val(Search.seller_id),$$("#tb_search_form2").onsubmit=function(){return $$("#tb_search2").value=$$("#tb_search2").value.replace(/^s+|s+$/,""),$$("#tb_search2").value?(this.submit(),!1):(M._alert("搜索关键字不可为空哟"),!1)},$("#search_button").bind("click",function(){$("#tb_search_form2").trigger("submit")}),M.urlQuery("tb_search")?M.loadScript("http://s.koudai.com/script/search/showSearchResult.js",function(){console.log("showSearchResult.js is ok")}):M.loadScript("http://s.koudai.com/script/search/showShopClasses.js",function(){console.log("showShopClasses.js is ok")})}};Search.init();</script>
</body></html>