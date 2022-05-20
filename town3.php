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
			<li><a href="index.php"><img src="jcm/map3.png" width="265"height="255"></a>
				<h1><p style="font-family: bebas neue ; color:black;"><b>BUENAVISTA</b><br></h2>
				<h3> <p style="font-family:Courier New; color:darkblue; font-size: 12;">The town was named "Buenavista" by Don Cornelio Sadiua, due to its "good view." Its former name was Sabang, which is the river that runs through it. The majority of Buenavistans trace their ancestry to the Don Cornelio Sadiua family.
In 1942, the Japanese Imperial forces landed in Buenavista at Patay Ilog before making their way to the capital. Due to its rugged terrain, relative isolation, and fierce pro-American sentiment, Buenavista was the headquarters for the resistance movement. Japanese forces and the Resistance and guerrillas frequently engaged in skirmishes within the town borders. Occupying Japanese forces burned the school and municipal building, after holding captives composed a member from each Buenavista family. Guerrilla forces eventually re-captured the town.</h3>

</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</body>
</html>
