<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
		<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="./Application/Tpl/App/default/Public/Static/css/foods.css?t=333" rel="stylesheet"
			type="text/css">
			<script type="text/javascript" src="./Application/Tpl/App/default/Public/Static/js/jquery.min.js"></script>
			<script type="text/javascript" src="./Application/Tpl/App/default/Public/Static/js/wemall.js?14115"></script>
			<script type="text/javascript" src="./Application/Tpl/App/default/Public/Static/js/alert.js"></script>
			<script type="text/javascript">
			var appurl = '__APP__';
			var rooturl = '__ROOT__';
			</script>
			<style type="text/css">
				#portrait_src {
					width: 65px;
					float: left;
					height: 65px;
				}
			</style>
		</head>
		<body class="sanckbg mode_webapp">
			<div id="tx-container">
				<div class="div_header">
			<span style='float:left;margin-left:10px;margin-right:10px;'>
				<?php $wx_info = json_decode($users['wx_info'],true); $img = !empty($wx_info['headimgurl'])?$wx_info['headimgurl']:'../Public/Static/images/defult.jpg'; echo "<img src='".$img."' width='70px;' height='70px;'>"; ?>
			</span>
			<span class="header_right">
				<div class="header_l_di">
					<span>昵称：<?php echo $wx_info['nickname']; ?></span>&nbsp;&nbsp;
				</div>
				<div><span>合伙人：<?php if($users["member"] == 1): ?>是<?php else: ?>否(<a style='color:red' href='./index.php?g=App&m=Index&a=index'>点击链接成为合伙人</a>)<?php endif; ?></span></div>
				<div><span>关注时间：<?php echo date('Y-m-d',$wx_info['subscribe_time']); ?></span></div>
			</span>
		</div>
				<section class="order">
					<form method="post" enctype="multipart/form-data">
						<div class="contact-info">
							<ul>
								<li class="title" style="text-align: center;">用户信息</li>
								<li>
									<table style="padding: 0; margin: 0; width: 100%;">
										<tbody>
											<tr>
												<td width="80px"><label for="price" class="ui-input-text">登陆账号：</label></td>
												<td>
													<div class="ui-input-text">
														<input name="login" placeholder="" value="<?php echo ($users["login"]); ?>" type="text"
														class="ui-input-text">
													</div>
												</td>
											</tr>
											<tr>
												<td width="80px"><label for="bank_name" class="ui-input-text">密码：</label></td>
												<td>
													<div class="ui-input-text">
														<input name="password" type="password" class="ui-input-text">
													</div>
													<span>留空则不修改</span>
												</td>
											</tr>

											<tr>
												<td width="80px"><label for="bank_name" class="ui-input-text">头像设置：</label></td>
												<td>
													<div>
														<?php if ($wx_info['headimgurl']) { ?>
														<div class="por">
															<img src="<?php echo ($wx_info['headimgurl']); ?>" id="portrait_src">
														</div>
														<?php } ?>
														<input name="avatar" value="<?php echo ($wx_info['headimgurl']); ?>" type="file">
													</div>
												</td>
											</tr>
											
										</tbody>
									</table>
									<div class="footReturn">
										<input type="submit" class="submit" value="确定提交" style="margin: 0 auto;">
									</div>
								</li>
							</ul>
						</div>
					</form>
				</section>
			</div>
		</body>
	</html>