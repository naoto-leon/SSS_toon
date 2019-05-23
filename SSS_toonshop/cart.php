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
</head>

	<body>

	
	<div class="contna">
<div class="box">
		
		
		<?php
	
		if (!empty($_SESSION['product'])) {
		
			$total=0;
			foreach ($_SESSION['product'] as $id=>$product) {
				

  
			
		echo '<div class="cart_box">';	
				
		
			echo '<table class="cart_table">';	
				
		    	 echo '<a href="#"  class="img_box"><img src="image/', $id, '.png"></a>';	
				
		echo '<div class="cart_subbox">';
				
				echo '<p class="cart_namebox"><a href="detail.php?id=', $id, '">', 
					$product['name'], '</a></p>';
				
				
				echo '<th>価格</th><th>個数</th><th>小計</th>';
				
				echo '<tr>';
				
				echo '<td>', $product['price'], '</td>';
				echo '<td>', $product['count'], '</td>';
				
				$subtotal=$product['price']*$product['count'];
				$total+=$subtotal;
				echo '<td>', $subtotal, '</td>';
				
				echo '<td class="cart_delete p_square_btn" style="height:15px;width:40px;margin:0px;"><a href="cart-delete.php?id=', $id, '">削除</a></td>';
				echo '</tr>';
			}
//			<input class="p_square_btn" type="submit" value="検索">
			
			
		echo '</div>';	
			
		
			} else {
				echo 'カートに商品がありません。';
				}
		echo '</div>';	
	
	echo '</table>';
	
	echo '<div class="last_box box2">';
			echo '<span class="total">';
			echo '<tr><td>合計</td><td></td><td></td><td>', $total, 
						'</td><td></td></tr>';
			  echo '</span>';  


		echo '<span class="purchace">';
			echo'<a href="purchase-input.php">';
			echo '<span class="purchace_text">';
					echo'購入を確定画面に行く';
							echo '</span>';
							 echo'<i class="fas fa-heart color_heart fa-2x fa-fw faa-wrench animated"></i>';
						echo '</a>';
					  echo '</span>';
		echo '</div>';

		?>

	</div>
		
	
	
			
</div>
		
		
		
	</body>
		
	
<script src="../js/particles.js"></script>
<script src="../js/Untitled-3.js"></script>		
		
</html>














