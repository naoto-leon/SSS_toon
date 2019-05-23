<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="ja">
<head>
<meta charset="UTF-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<<title>OCEAN</title>
<meta name="Description" content="OCEANはスプラトゥーンをより楽しむ為のサイトです">
<meta property="og:title" content="OCEAN">
<meta property="og:description" content="OCEANはスプラトゥーンをより楽しむ為のサイトです">
<meta property="og:image" content="../img/ogimage.png">
<link rel="apple-touch-icon" href="../img/favicon.ico">
<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="shortcut icon" href="../img/favicon.ico">	
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
<script src="../js/huge.js"></script>
</head>

	<body style="position:relative;margin: 0px;padding: 0px;">
<div id="hoge" style="height:100%;width: 100%;position: fixed"></div>
<section class="position">
	
		<header class="page-header" role="banner">
			<div class="inner clearfix">
				<h1 class="site-logo"><a href="../index.php"><img src="../img/logo.png" alt="Shiftbrain" height="65" width="200"></a></h1>
				<nav class="primary-nav" role="navigation">
					<ul>
					  <li><a href="product.php" class="square_btn"><span >Product</span></a></li>
<!--                <li><a href="SSS_toonshop/favorite-show.php">お気に入り</a></li>-->
                <li><a href="history.php" class="square_btn"><span>Bought</span></a></li>
                <li><a href="cart-show.php" class="square_btn"><span>Cart</span></a></li>
                <li><a href="purchase-input.php" class="square_btn"><span>Check out</span></a></li>
                <li><a href="login-input.php" class="square_btn"><span>Log in</span></a></li>
                <li><a href="logout-input.php" class="square_btn"><span>Log out</span></a></li>
                <li><a href="customer-input.php" class="square_btn"><span>Sign up</span></a></li>
				<li><a href="my_page.php" class="square_btn"><span>my page</span></a></li>
				<li><a href="friend.php" class="square_btn"><span>friend</span></a></li>
					</ul>
				</nav>
			</div>
		</header>

		
			<div  class="" role="main">	
				
				<?php
				if (isset($_SESSION['customer'])) {
					$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
						'staff', 'password');
					$sql_purchase=$pdo->prepare(
						'select * from purchase where customer_id=? order by id desc');
					$sql_purchase->execute([$_SESSION['customer']['id']]);
					foreach ($sql_purchase as $row_purchase) {
						$sql_detail=$pdo->prepare(
							'select * from purchase_detail,product '.
							'where purchase_id=? and product_id=id');
						$sql_detail->execute([$row_purchase['id']]);
						
						
						echo '<table class="history_table">';
							echo '<tr><th>商品番号</th><th style="text-align:left;">商品名</th>', 
								'<th>価格</th><th>個数</th><th>小計</th></tr>';
						
							$total=0;
							foreach ($sql_detail as $row_detail) {
								
					
								
								echo '<tr>';
									echo '<td class="history_id text_center">', $row_detail['id'], '</td>';
									echo '<td class="history_name"><a href="detail.php?id=', $row_detail['id'], '">', 
										$row_detail['name'], '</a></td>';
									echo '<td class="history_price text_center">', $row_detail['price'], '</td>';
									echo '<td class="history_count text_center">', $row_detail['count'], '</td>';
									$subtotal=$row_detail['price']*$row_detail['count'];
									$total+=$subtotal;
									echo '<td class="history_total">', $subtotal, '</td>';
								echo '</tr>';
						
								
							
							
						}
					
					}
				} else {
					echo '<p class="text_center"> 購入履歴を表示するには、ログインしてください。</p>';
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
							<a href="http://www.facebook.com/" target="_blank">
								<span class="label">Facebook</span>
							</a>
						</li>
						<li class="item-twitter">
							<a href="https://twitter.com/" target="_blank">
								<span class="label">Twitter</span>
							</a>
						</li>
					</ul>
				</aside>
				<small class="copyright">Copyright © naoto</small>
			</div>
		</footer>
	</div>
		</section>	
<script src="../js/particles.js"></script>
<script src="../js/Untitled-3.js"></script>

	
	</body>
</html>
