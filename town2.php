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
			<li><a href="index.php"><img src="jcm/map2.png" width="265"height="255"></a>
				<h1><p style="font-family: bebas neue ; color:black;"><b>BOAC</b><br></h2>
				<h3> <p style="font-family:Courier New; color:darkblue; font-size: 12;">The first "visita" was established in 1580 and it was called "Monserrat de Marinduque" (now Boac) with Fray Alonzo Banol as its minister.
In 1621, the Spanish Jesuit missionaries brought the three-foot Marian image to Boac. So began the people's devotion to the image of the Virgin Mary.
In the mid-17th century, a group of Muslims in the Philippines called theMoro people felt threatened by the actions of the ruling Spanish government. They challenged the government by launching attacks on coastal Christian towns. This resulted in a raid along the shores of Barangay Laylay, near the Boac River
On May 10, 2008, the Diocese of Boac celebrated the 13th anniversary and the golden anniversary of the canonical coronation of Mahal na Birhen ng Biglang-Awa (1958–2008). Cebu Archbishop-Cardinal Ricardo Vidal of Mogpog, Marinduque, officiated at the consecrated mass.</h3>

</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>
