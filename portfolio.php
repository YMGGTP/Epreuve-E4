<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="portfolio 2.css" />	
	<title>test</title>      
	<SCRIPT LANGUAGE="JavaScript" 	SRC="js/test.js"></SCRIPT>

</head>
<body>

<!-- éléments cachés pour jouer avec :target -->
<span id="s1"></span>
<span id="s2"></span>
<span id="s3"></span>
<span id="s4"></span>
<!-- Le gros conteneur qui va glisser -->
<div id="wrap">

	<!-- La navigation -->
	<ul id="nav">
		<li><a href="#s1">Accueil</a></li>
		<li><a href="#s2">Compétences</a></li>
		<li><a href="#s3">Stages</a></li>
		<li><a href="#s4">Curriculum Vitae</a></li>
	</ul>

	<!-- La slide 1 -->
	<div id="slide1">
		<div class="slide_inside">
			<!-- Le logo -->
			<h1 class="t"><img src="images/image1.png" alt="Accueil"></h1>
			
			<a class="boutton" href="#s1"></a>
			
			<a class="boutton1" href="#s2"></a>
			
			<a class="boutton2" href="#s3"></a>
			
			<a class="boutton3" href="#s4" ></a>

		</div> <!-- /.slideinside-->	 	
	</div> <!-- /#slide1 -->

	<!-- La slide 2 -->
	<div id="slide2">
		<div class="slide_inside">
			<!-- Les deux éléments en 1er plan -->
			<!-- Mettez ici les images que vous voulez  :)  -->
			<img src="images/html1.png" id="trooper" alt="">
			<img src="images/wordpress.png" id="clone" alt="">

			<h2 class="competence">Mes Compétences</h2>
			<h2 class="logiciel">Logiciels</h2>
			<ul class="li1">
				<li>Sublime Text 3</li>
				<li>Eclipse</li>
				<li>Netbeans</li>
				<li>MySQLWorkbench</li>
				<li>Filezilla</li>
				<li>Oracle Vm VirtualBox</li>
				<li>Putty</li>
				<li>Git</li>

			</ul>	
			<ul class="li"><li>Html 5</li>
				<li>CSS 3</li>
				<li>Wordpress</li>
				<li>Base de donnée SQL</li>
				<li>Sharepoint 2010</li>
				<li>Connaissance PHP</li>
				<li>Virtualisation avec VirtualBox</li>
				<li>Montage pile LAMP</li>
				<li>Notion Java</li>

			</ul>

		</div> <!-- /.slide_inside-->	     	
	</div> <!-- /#slide2 -->

	<!-- La slide 2 -->
	<div id="slide3">
		<div class="slide_inside">			
			<h2>Stages</h2>
			<?php include "stage.html"; ?>
		</div> <!-- /.slide_inside-->	    
	</div> <!--  /#slide3 -->


	<div id="slide4">
		<div class="slide_inside">
			<!-- Le logo -->
			<h1>CV</h1>
			<?php include "cv.html"; ?>
			<div class="div"></div>
		</div> <!-- /.slide_inside-->	 	
	</div> <!-- /#slide1 -->

</div>

</body></html>
