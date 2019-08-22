<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes,shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link href="https://pypnsee.com/common/css/style.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

		<link rel="icon" type="image/png" sizes="32x32" href="common/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="common/images/favicon-16x16.png">
		<?wp_head(); ?>
	</head>

<body <?php body_class(); ?>>


<header>
 <div class="header-inner">
   <div>
  	<ul class="nav1">
    	<li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon_login.png" width="25" height="25" alt="ログイン">ログイン/会員登録</a></li>
   		<li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_icon_cart.png" width="25" height="25" alt="カート">カート</a></li>
	</ul>
   </div>
  <div>
   <nav>
  	<ul class="nav2">
  		<li><a href="" class="nav_hover">商品一覧</a></li>
  		<li><a href="company/index.html" class="nav_hover">会社案内</a></li>
  		<li><h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/common/images/logo_header.png" width="229" height="88" alt="LUCKY FIELDロゴ"></a></h1></li>
  		<li><a href="" class="nav_hover">ご利用ガイド</a></li>
  		<li><a href="" class="nav_hover">お問い合わせ</a></li>
  	</ul>
   </nav>
  </div>
 </div>
