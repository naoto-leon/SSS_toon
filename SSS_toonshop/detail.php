<!DOCTYPE html>
<html class="no-js" lang="ja">
<head>
<meta charset="UTF-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<title>OCEAN</title>
<meta name="Description" content="OCEANはスプラトゥーンをより楽しむ為のサイトです">
<meta property="og:title" content="OCEAN">
<meta property="og:description" content="OCEANはスプラトゥーンをより楽しむ為のサイトです">
<meta property="og:image" content="../img/ogimage.png">
<link rel="apple-touch-icon" href="../img/favicon.ico">
<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="shortcut icon" href="../img/favicon.ico">	
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ropa+Sans">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
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
<script src="../js/main_2.js"></script>
</head>

	<body style="height: 100vh">
		
<div id="hoge" style="height:100%"></div>
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


<div  class="detail_box" role="main">	
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);
	
foreach ($sql as $row) {
	
echo '<div role="main">';		
	 echo '<div class="flex_box">';
		
	      echo '<div>';
			echo '<header class="hero-header_2">';
			  echo '<div class="inner">';
				 echo '<div class="slideshow_2">';
	
								echo '<div class="slideshow-slides_2">';
									echo '<a href="#"  class="slide_2" id="slide-1"><img src="image_1/', $row['id'], '.png" width="500" height"300"></a>';
									echo '<a href="#"  class="slide_2" id="slide-1"><img src="image_2/', $row['id'], '.png" width="500" height"300"></a>';
									echo '<a href="#"  class="slide_2" id="slide-1"><img src="image_3/', $row['id'], '.png" width="500" height"300"></a>';
								 echo '</div>';


							echo '<div class="slideshow-nav_2">';
									echo '<a href="#" class="prev_2">';
										echo 'prev';
											echo '</a>';
									echo '<a href="#" class="next_2">';
										echo 'next';
											echo '</a>';
								echo '</div>';

				echo'<div class="slideshow-indicator_2">';     	
					echo'</div>';

					echo'</div>';
				echo'</div>';
			echo'</header>';
		 echo '</div>';
	
					 echo '<div class="text_cente" >';
							echo '<div class="detail_subbox">';
								  echo '<form action="cart-insert.php" method="post">';

											echo '<p class="name_detail">', $row['name'], '</p>';
	
											echo '<p class="price_detail">price：', $row['price'], '</p>';
											echo '<p class="c_detail">';
												echo '個数';
											echo '</p>';
											echo '<p　class="count_detail"><select class="select_detail" name="count">';
											for ($i=1; $i<=10; $i++) {
												echo '<option value="', $i, '">', $i, '</option>';
											}
											  echo '</select></p>';

										echo '<input type="hidden" name="id" value="', $row['id'], '">';
										echo '<input type="hidden" name="name" value="', $row['name'], '">';
										echo '<input type="hidden" name="price" value="', $row['price'], '">';
	                                    
										echo '<p class="cart_detail"><input class="input_detail p_square_btn" type="submit" value="カートに追加"></p>';
	
										echo '<p class="description_detail">';
											echo nl2br ($row['description']); 
										echo'</p>';
	
									echo '</form>';

	

	
						 echo '</div>';
					echo '</div>';
	
	
	
	
	
echo '</div>';
   echo '</div>';
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
	
	
	</body>
		
<script src="../js/particles.js"></script>
<script src="../js/Untitled-3.js"></script>
		
</section>	
</html>
