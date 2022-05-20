<html>
<head>
	<title>Marinduque</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
</style>
</head>
<body >
	<div id="wrapper" >
		<div id="header">
	<img src="jcm/title.jpg" width="965" height="300" id="img1"><form STYLE="TEXT-ALIGN:left; font-family:Century Gothic; COLOR:darkblue; ">
		<br>
	
	<?php   
		echo "<a href='https://www.facebook.com'><img src='css/fb.png' width='30' height='30'></a>";
		echo "<a href='https://www.instagram.com'><img src='css/tw.png' width='30' height='30'></a>";
		echo "<a href='https://www.youtube.com'><img src='css/yt.png' width='30' height='30'></a>";
		
	?>

	<label class="b"></label><input class="b" type="text|"/>

		<a class="b" href="https://www.google.com"><input class="b" type="button" value="SEARCH"/></a>
		</div>
	<div id="nav">
			<ul id="menustyle">
				<?php
					$tab = array('HOME','CHURCH','BEACH AND RESORT','CAVES','FALLS','FESTIVAL','DEVELOPER');
					foreach($tab as $i){
						echo "<li ><a href='". strtolower($i=="HOME" ? "index" : $i) .".php'>".$i."</a> </li>";
					}
				?>
			</ul>
	</div>
	

		<div id="content" >
			<ol id ="image" >
			
			
			
			<li><a href="beach1.php"><img src="jcm/palad3.jpg" width="265"height="255"></a>
				<p class="a">Palad</p>
			<li><a href="beach2.php"><img src="jcm/v2.jpg" width="265"height="255"></a>
				<p class="a">Villa Roca</p>
			<li><a href="beach3.php"><img src="jcm/manwaya1.jpg" width="265"height="255"></a>
				<p class="a">Maniwaya</p>
			<li><a href="beach4.php"><img src="jcm/wb5.jpg" width="265"height="255"></a>
				<p class="a">White Beach</p>
			<li><a href="beach5.php"><img src="jcm/sera.jpg" width="265"height="255"></a>
				<p class="a">Cavesera</p>
			<li><a href="beach6.php"><img src="jcm/luxor2.jpg" width="265"height="255"></a>
				<p class="a">Luxor Resort</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright2022  &copy; 2016 Marinduque Wonders</p>
</div>
</body>
</html>