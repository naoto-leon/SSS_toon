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


		
			<div class="width_controle text_center" role="main">	

<?php
if (isset($_SESSION['customer'])) {
	echo '<table>';
	echo '<th>商品番号</th><th>商品名</th><th>価格</th>';
	$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
		'staff', 'password');
	$sql=$pdo->prepare(
		'select * from favorite, product '.
		'where customer_id=? and product_id=id');
	$sql->execute([$_SESSION['customer']['id']]);
	foreach ($sql as $row) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td><a href="detail.php?id='.$id.'">', $row['name'], 
			'</a></td>';
		echo '<td>', $row['price'], '</td>';
		echo '<td><a href="favorite-delete.php?id=', $id, 
			'">削除</a></td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo 'お気に入りを表示するには、ログインしてください。';
}
?>
							</div>	
	

	</body>
</html>

		
