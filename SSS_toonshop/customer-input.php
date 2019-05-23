<?php session_start(); ?>

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

	<body style="height: 100vh">
<div id="hoge" style="height: 100%"></div>
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


<div class="text_center" role="main">	
	<div >
				<?php
					$name=$address=$login=$password=$nintendo=$rank=$game_a=$game_e=$game_h=$game_y=$memo='';
				if (isset($_SESSION['customer'])) {
					$name=$_SESSION['customer']['name'];
					$address=$_SESSION['customer']['address'];
					$login=$_SESSION['customer']['login'];
					$password=$_SESSION['customer']['password'];
					$nintendo=$_SESSION['customer']['nintendo'];
					$rank=$_SESSION['customer']['rank'];
					$game_a=$_SESSION['customer']['game_a'];
					$game_e=$_SESSION['customer']['game_e'];
					$game_h=$_SESSION['customer']['game_h'];
					$game_y=$_SESSION['customer']['game_y'];
					$memo=$_SESSION['customer']['memo'];
					
				}
echo '<form class="center" action="customer-output.php" method="post">';
		
echo '<div class="customer_box">';
					
		echo '<div class="input_box input_side">';
			echo '<span class="input_box_title">';
					echo'name';
				   echo'</span>';
		           echo '<p>';
		            echo '<input type="text" name="name" value="', $name, '">';
				   echo '</p>';		
				echo '</div>';
		
		echo '<div class="input_box input_side">';
			echo '<span class="input_box_title">';
					echo 'address';
				    echo'</span>';
				    echo '<p>';
		            echo '<input class="address_width" type="text" name="address" value="', $address, '">';
				   echo '</p>';		
				echo '</div>';

		echo '<div class="input_box input_side right_none">';
			echo '<span class="input_box_title">';
					echo 'password';
				    echo'</span>';
				    echo '<p>';
		            echo '<input type="text" name="login" value="', $login, '">';
				   echo '</p>';		
				echo '</div>';
	echo'</div>';
	
echo'<div class="customer_box">';
		
		echo '<div class="input_box input_side">';
			echo '<span class="input_box_title">';
					echo 'login-name';
				    echo'</span>';
				    echo '<p>';
		            echo '<input class="login_width" type="text" name="password" value="', $password, '">';
				   echo '</p>';		
				echo '</div>';
		
	
		

			echo '<div class="input_box input_side right_none">';
				echo '<span class="input_box_title">';
					echo 'friend-coad';
				    echo'</span>';
				    echo '<p>';
		            echo '<input class="nintendo_width" type="text" name="nintendo" value="', $nintendo, '">';
				   echo '</p>';		
				echo '</div>';
	echo '</div>';
		
		
echo'<div class="customer_box">';
		
		echo '<div class="input_box input_side">';
			echo '<span class="input_box_title">';
					echo 'rank';
				    echo'</span>';
				    echo '<p>';
		            echo '<input class="rank_width rank_size" type="text" name="rank" value="', $rank, '">';
				   echo '</p>';		
				echo '</div>';

			
			  echo '<div class="input_box input_side right_none">';
			echo '<span class="input_box_title">';
						echo 'ウデマエ';
						echo'</span>';
						echo '<p>';
						
			
		echo'<div class="customer_box">';
		
				echo '<div>';
					echo '<div class="input_box udemae_box">';
					echo '<span class="input_box_title">';
								echo 'アサリ';
								echo'</span>';
								echo '<p>';
								echo '<input class="udemae_width" type="text" name="game_a" value="', $game_a, '">';
							   echo '</p>';		
						echo '</div>';
					echo '</div>';

				echo '<div>';	   
					echo '<div class="input_box udemae_box">';
					echo '<span class="input_box_title">';
								echo 'エリア';
								echo'</span>';
								echo '<p>';
								echo '<input class="udemae_width" type="text" name="game_e" value="', $game_e, '">';
							   echo '</p>';		
						echo '</div>';
					echo '</div>';

				echo '<div>';    
					echo '<div class="input_box udemae_box">';
					echo '<span class="input_box_title">';
								echo 'ホコ';
								echo'</span>';
								echo '<p>';
								echo '<input class="udemae_width" type="text" name="game_h" value="', $game_h, '">';
							   echo '</p>';		
						echo '</div>';
					echo '</div>';

				echo '<div>';		    
					echo '<div class="input_box udemae_box right_none">';
					echo '<span class="input_box_title">';
								echo 'ヤグラ';
								echo'</span>';
								echo '<p>';
								echo '<input class="udemae_width" type="text" name="game_y" value="', $game_y, '">';
							   echo '</p>';		
						echo '</div>';
					echo '</div>';

		
			echo'</div>';
		
		echo '</p>';		
			echo '</div>';
	
		
echo '</div>';

	
		
		
	echo'<div>';
		echo '<div class="input_box memo_width">';
		echo '<span class="input_box_title">';
					echo 'memo';
				    echo'</span>';
		            echo '<textarea class="textarea"  name="memo" rows="3" cols="70" wrap="hard" value="', $memo, '" >';
				   echo '</textarea>';		
			echo '</div>';
		            
  echo'</div>';
		
		echo'<div>';
		  echo '<p class="btn_circle">';
		        echo '<input class="submit" type="submit" value="Submit">';
		    echo'</p>';	
		 echo '<p class="text_a">';
		 echo '登録後は再度このページから更新が可能です。';
		 echo '</p>';
		  echo'</div>';		
		
echo '</form>';
				?>
         </div>
	
</div>
	
<!--<p class="btn_circle"><input class="submit" type="submit" value="ログイン"></p>-->
	
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
	
<script src="../js/particles.js"></script>
<script src="../js/Untitled-3.js"></script>
</section>	
	</body>
</html>
