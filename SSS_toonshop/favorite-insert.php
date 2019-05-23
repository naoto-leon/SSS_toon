<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="ja">
<head>
<meta charset="UTF-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<title>mmmmmm</title>
<meta name="Description" content="sight DESIGNは、------------------------">
<meta property="og:title" content="sight-desigh">
<meta property="og:description" content="sight DESIGNは、----------------------">
<meta property="og:image" content="images/common/ogimage.png">
<link rel="apple-touch-icon" href="images/common/touch-icon.png">
<link rel="shortcut icon" href="images/common/favicon.ico">
<link rel="shortcut icon" href="images/common/favicon.ico">	
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ropa+Sans">
	<script>
  (function(d) {
    var config = {
      kitId: 'vho4tdu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/normalize.css">
<script src="../js/vendor/modernizr.custom.min.js"></script>
<script src="../js/vendor/jquery-1.10.2.min.js"></script>
<script src="../js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/vendor/jquery.ba-throttle-debounce.min.js"></script>
<script src="../js/vendor/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="../js/footerFixed.js"></script>
<script src="../js/main.js"></script>
</head>

	<body>
	<header class="page-header" role="banner">
			<div class="inner clearfix">
				<h1 class="site-logo"><a href="../index.php"><img src="../img/logo.png" alt="Shiftbrain" height="65" width="200"></a></h1>
				<nav class="primary-nav" role="navigation">
					<ul>
						<li><a href="product.php">商品</a></li>
						<li><a href="favorite-show.php">お気に入り</a></li>
						<li><a href="history.php">購入履歴</a></li>
						<li><a href="cart-show.php">カート</a></li>
						<li><a href="purchase-input.php">購入</a></li>
						<li><a href="login-input.php">ログイン</a></li>
						<li><a href="logout-input.php">ログアウト</a></li>
						<li><a href="customer-input.php">会員登録</a></li>
						<li><a href="my_page.php">my page</a></li>
					</ul>
				</nav>
			</div>
		</header>
	

		
			<div class="width_controle text_center" role="main">	
				<?php
				if (isset($_SESSION['customer'])) {
					$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
						'staff', 'password');
					$sql=$pdo->prepare('insert into favorite values(?,?)');
					$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
					echo 'お気に入りに商品を追加しました。';
					echo '<hr>';
					require 'favorite.php';
				} else {
					echo 'お気に入りに商品を追加するには、ログインしてください。';
				}
				?>
				</div>	
	<div id="footer">
			<footer class="page-footer" role="contentinfo">
			<button type="button" class="back-to-top">
				<span class="label">ページの先頭へ戻る</span>
			</button>
			<div class="inner clearfix">
				<aside class="social-links">
					<ul>
						<li class="item-facebook">
							<a href="http://www.facebook.com/SHIFTBRAIN" target="_blank">
								<span class="label">Facebook</span>
							</a>
						</li>
						<li class="item-twitter">
							<a href="https://twitter.com/shiftbrain" target="_blank">
								<span class="label">Twitter</span>
							</a>
						</li>
					</ul>
				</aside>
				<small class="copyright">Copyright © naoto</small>
			</div>
		</footer>
	</div>
	
	</body>
</html>

		
		
		
		