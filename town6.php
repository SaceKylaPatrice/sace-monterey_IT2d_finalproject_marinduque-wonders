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
			<ol id ="image" class="image">
			<li><a href="index.php"><img src="jcm/map6.png" width="265"height="255"></a>
				<h1><p style="font-family: bebas neue ; color:black;"><b>GASAN</b><br></h2>
				<h3> <p style="font-family:Courier New; color:darkblue; font-size: 12;">In 1942, during World War II, the Japanese Imperial forces landed in Gasan, Marinduque.
In 1945, the combined United States and Allied Philippine Commonwealth forces landed in Gasan, Marinduque. The 5th Infantry Division of the Philippine Commonwealth Army was participated in the battle to attacking Japanese forces, during which hundreds of Japanese troops were taken prisoner at the town of Gasan, Marinduque. This became known as theBattle of Marinduque.
In 1957, barrio Banto-anin was renamed as Bukal and barrio Hinubuan was renamed as Antipolo</h3>

</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>
