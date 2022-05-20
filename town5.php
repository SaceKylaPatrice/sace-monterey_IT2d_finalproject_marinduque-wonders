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
			<li><a href="index.php"><img src="jcm/map5.png" width="265"height="255"></a>
				<h1><p style="font-family: bebas neue ; color:black;"><b>TORRIJOS</b><br></h2>
				<h3> <p style="font-family:Courier New; color:darkblue; font-size: 12;">TOn September 13, 1900, during the Philippine-American War an engagement in Torrijos pitted the forces of Philippine Revolutionary Army Colonel Maximo Abad against the Americans led by Captain Devereux Shields. Abad's men defeated the American force, it was one of the worst defeats suffered by the Americans during the war. This was known as theBattle of Pulang Lupa which took place in Torrijos. A monument now stands on the mountain where the battle took place, known as Pulang Lupa or "Red Mountain" due to the red soil.
In 1942, the Japanese occupied the town of Torrijos, Marinduque.
In 1945, in the Battle of Marinduque, American and Filipino troops fought in and around the town of Torrijos and Marinduque against the Japanese soldiers during World War II.</h3>

</p>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>
