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
	<img src="jcm/title.jpg" width="965" height="300" id="img1">
	<form STYLE="TEXT-ALIGN:left; font-family:AR BERKLEY; COLOR:darkblue; ">
	<label class="b"></label><input class="b" type="text|"/>

	<br>
	
	<?php   
		echo "<a href='https://www.facebook.com'><img src='css/fb.png' width='30' height='30'></a>";
		echo "<a href='https://www.instagram.com'><img src='css/tw.png' width='30' height='30'></a>";
		echo "<a href='https://www.youtube.com'><img src='css/yt.png' width='30' height='30'></a>";
		
	?>

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
			<ol id ="image" class="image">
			<li><a href="caves.php"><img src="jcm/tar4.jpg" width="265"height="255"></a>
				<li><a href="caves.php"><img src="jcm/tar1.jpg" width="265"height="255"></a>
				<li><a href="caves.php"><img src="jcm/tar2.jpg" width="265"height="255"></a>
					<li><a href="caves.php"><img src="jcm/tar3.jpg" width="265"height="255"></a>
						<li><a href="caves.php"><img src="jcm/tar5.jpg" width="265"height="255"></a>
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>
