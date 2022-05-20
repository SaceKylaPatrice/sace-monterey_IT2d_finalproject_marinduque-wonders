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
	<img src="jcm/title.jpg" width="965" height="300" id="img1"><form STYLE="TEXT-ALIGN:left; font-family:AR BERKLEY; COLOR:darkblue; ">
	
	
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
			
			
			echo "<li><a href='developer.php'><img src='css/picah.jpg' width='300'height='300'><p align='center'></p></a>"

			?>
				
			<h3 style= "font-family: century gothic; text-align: left; font-size: 16;">

			&nbsp&nbsp&nbspNAME: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp KYLA PATRICE SOBERANO SACE </br>
			&nbsp&nbsp&nbspCOURSE: &nbsp&nbsp BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</br>
			&nbsp&nbsp&nbspYEAR: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp SECOND YEAR</br>
			&nbsp&nbsp&nbspGENDER: &nbsp&nbsp FEMALE</br>
			&nbsp&nbsp&nbspAGE: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 20</br>
			&nbsp&nbsp&nbspBIRTHDAY:&nbsp JANUARY 9, 2002</br>
			&nbsp&nbsp&nbspADDRESS: &nbsp DAWIS, GASAN, MARINDUQUE</br>
			</h3></br>

			<h4 style="font-family:courier new ; text-align: CENTER; color:	deeppink;"> -------------Life is the hardest course the man could take------------------ </h4>
			<hr></li>
			
			
			
		</div>

<div id="footer">
	<p style="font-family:lucida bright ; color:white;">
		Copyright  &copy; 2016 Marinduque Wonders</p>
</div>
</body>
</html>