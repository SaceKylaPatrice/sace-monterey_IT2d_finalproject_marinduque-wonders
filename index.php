<!DOCTYPE html>
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
	<form STYLE="TEXT-ALIGN:left; font-family:Century Gothic; COLOR:darkblue; ">
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
			<ol id ="image" >
				<?php
					{
						echo "<li><a href='town1.php'><img src='jcm/map1.png' width='265'height='255'></a>";
						echo "<li><a href='town2.php'><img src='jcm/map2.png' width='265'height='255'></a>";
						echo "<li><a href='town3.php'><img src='jcm/map3.png' width='265'height='255'></a>";
						echo "<li><a href='town4.php'><img src='jcm/map4.png' width='265'height='255'></a>";
						echo "<li><a href='town5.php'><img src='jcm/map5.png' width='265'height='255'></a>";
						echo "<li><a href='town6.php'><img src='jcm/map6.png' width='265'height='255'></a>";
					}
				?>
		</div>



<div id="footer">
	<p style="font-family:Courier New ; color:white;">Copyright  &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>