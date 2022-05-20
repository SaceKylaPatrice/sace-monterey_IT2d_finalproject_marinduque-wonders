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
		<a href="https://www.facebook.com"><img src="css/fb.jpg" width="30" height="30"></a>
	
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
			<li><a href="index.php"><img src="jcm/map4.png" width="265"height="255"></a>
				<h1><p style="font-family: bebas neue ; color:black;"><b>MOGPOG</b><br></h2>
				<h3> <p style="font-family:Courier New; color:darkblue; font-size: 12;">In 1942, the Japanese troops occupied the town of Mogpog, Marinduque.
In 1945, in the Second World War the liberation of the town of Mogpog, Marinduque, the American and Filipino troops fought against the Japanese Imperial forces during the Battle of Marinduque.
Historically the famous Moriones Festival is said to have originated from Mogpog. Moriones Festival was founded by a Spanish friar Rev. Father Dionisio Santiago the first parish priest of mogpog. This festival is known to be one of the most colorful festivals in Marinduque and the Philippines. It is held in Mogpog and the surrounding areas of Marinduque island.
	The first "visita" was established in 1580 and it was called "Monserrat de Marinduque" (now Boac) with Fray Alonzo Banol as its minister.</h3>

</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>

</div>
</body>
</html>
