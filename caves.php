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
			<ol id ="image">
			
			
			
			<li><a href="cave1.html"><img src="jcm/phy1.jpg" width="265"height="255"></a>
				<p class="a">Phyton Cave</p></li>
			<li><a href="cave2.html"><img src="jcm/san1.jpg" width="265"height="255"></a>
				<p class="a">San Isidro Cave</p></li>
			<li><a href="cave3.html"><img src="jcm/tar1.jpg" width="265"height="255"></a>
				<p class="a">Tarug Cave</p></li>
			<li><a href="cave4.html"><img src="jcm/bat4.jpg" width="410"height="350"></a>
				<p class="a">Bathala Cave</p></li>
			<li><a href="cave5.html"><img src="jcm/ka1.jpg" width="410"height="350"></a>
				<p class="a">Kaamon Cave</p></li>
			
		</div>

<div id="footer">
	<p style="font-family:Courier New ; color:white;">
		Copyright   &copy; 2022 Marinduque Wonders</p>
</div>
</body>
</html>