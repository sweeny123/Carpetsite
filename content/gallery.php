<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
	<link rel="shortcut icon" type="image/png" href="../favicon.png"><!-- used for icon in tab-->
	
	<!--BOOTSTRAP 4-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/marcus.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
	<!--Adobe Edge Fonts declaration-->
	<script src="//use.edgefonts.net/poiret-one;rosario.js"></script>
	
	<!--webkit fonts declaration-->
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa|Taviraj" rel="stylesheet">
	
	<!-- CSS containing social media icons:  Reference https://www.w3schools.com/howto/howto_css_social_media_buttons.asp for more info -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	
	<!--theme stylesheet-->
	<link rel="stylesheet" type="text/css" href="../theme1.css">
	
	<!--site specific stylesheet-->
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	
	<!--this script will take the buttonVar number and select a button-->
	<script src="../js/buttonSelector.js"></script>
	
	<!--Ekko Lightbox declaration-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

</head>

<body onload="buttonSelector();">
    
	<div class="container-fluid">
	
		<header>
				
			<!--scripts for gallery buttons-->
  	  	  	  <script src="../js/toggleResidential.js"></script>
	  	  	  <script src="../js/toggleCommercial.js"></script>
		  	  <script src="../js/toggleServices.js"></script>
			  
			<!-- navigation-->
			<nav id="nav" class="visible navbar navbar-expand-lg navbar-light bg-light" >
			
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse " id="navbarSupportedContent" >
				
				<ul class="navbar-nav nav-fill w-100">
					<li class="nav-item" >
						<a href='../index.html'>Home</a>
					</li>
					<li class="nav-item" >
						<a href='about.html'>About</a>
					</li>
					<li class="nav-item dropdown" >
						<a class="nav-item nav-link dropdown-toggle" href='#' id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
							<a class="dropdown-item" href="carpet.html">Carpet</a>
							<a class="dropdown-item" href="flooring.html">Flooring</a>
						</div><!--closes dropdown-->
					</li>
					<li class="nav-item dropdown" >
						<a class="nav-item active nav-link dropdown-toggle" href='#' id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
							<a class="dropdown-item" href="gallery.php?1">Carpet</a>
							<a class="dropdown-item" href="gallery.php?2">Flooring</a>
							<a class="dropdown-item" href="gallery.php?3">Indoor/Outdoor</a>
						</div><!--closes dropdown-->
					</li>
					<li class="nav-item" >
						<a href='faq.html' >FAQs</a>
					</li>
					<li class="nav-item" >
						<a href='quote.html' >Contact</a>
					</li>
					<li class="nav-item" >
						<a href="tel:5852719050">(585) 271-9050</a>
					</li>
					<li>
						<h3><a href="https://www.facebook.com/wagcarpetsroc/" class="fa fa-facebook" target="_blank"></a></h3>
					</li>
					<li>
						<h3><a href="https://www.instagram.com/wagnercarpets/" class="fa fa-instagram" target="_blank"></a></h3>
					</li>
					
				</ul>
				</div><!-- closes collapse div-->
			</nav><!--closes nav-->
			
			<div  class="jumbotron jumbotron-fluid" >
				<div class="container" >
					<img src="../media/WClogo/WCLogoClear.png" alt="company logo"> 
				</div>
			</div>
		</header><!--closes header-->
		
		<div class="page-content">
			
			<div class="container background-tan">
				<div class="row">
					<div class="col-sm-10 col-md-4"></div>
					<h2 class="display-4 text-center col-sm-0 col-md-4">Gallery</h2>
				</div><!--closes row-->
				<br/><br/>
			</div><!--closes container-->
			
			
			
			<div class="container w-100 background-tan">
					<div id="gallerybuttons" class="container">
						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<button id="residentialbutton" class="carpetfont btn btn-secondary col-3 col-sm-3 col-md-2 col-lg-2 gallerybutton buttonfont" onclick="toggleResidential();">Carpet</button>
							<div class="col-1 col-sm-1 col-md-2 col-lg-2"></div>
							<button id="commercialbutton" class="carpetfont btn btn-secondary col-3 col-sm-3 col-md-2 col-lg-2 gallerybutton buttonfont" onclick="toggleCommercial();">Flooring</button>
							<div class="col-1 col-sm-1 col-md-2 col-lg-2"></div>
							<button id="servicesbutton" class="carpetfont btn btn-secondary col-3 col-sm-3 col-md-2 col-lg-2 gallerybutton buttonfont" onclick="toggleServices();">Indoor/Outdoor</button>
						</div><!--closes row-->
					</div><!--closes gallerybuttons-->
			</div><!--closes container-->
			
			
			<div id="residential" class="gallerycontainer container opaque">
				<div class="row">
					<h2 class="text-center col-12">Carpet</h2>
				</div><!--closes row-->
				<br/><br/>
				<div class="row">
			<?php
				$row_counter=0;
				$residential_folder_path = '../media/ResidentialCarpet/'; //residential images folder path
				$num_residential_files = glob($residential_folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);//grabs all the images in the directory

				$residential_folder = opendir($residential_folder_path);//opens the directory
				
				if($num_residential_files > 0)
					{
					while(false !== ($residential_file = readdir($residential_folder))) //reads directory to get file name, stops when there are no more images
						{
						$residential_file_path = $residential_folder_path.$residential_file;// get an image
						$residential_extension = strtolower(pathinfo($residential_file_path ,PATHINFO_EXTENSION));//returns only the extension
						if($residential_extension=='jpg' || $residential_extension =='png' || $residential_extension == 'gif' || $residential_extension == 'bmp' || $residential_extension == 'jpeg') //if there is an image of any of these types......
							{
			?>       
							<a href="<?php echo $residential_file_path;?>" data-toggle="lightbox" data-gallery="residential-gallery" data-type="image" class="col-12 col-sm-12 col-md-3 col-lg-3">
							<img src="<?php echo $residential_file_path;?>" class="gallery img-thumbnail "/>
							</a>
							<?php 
								$row_counter=$row_counter+1;
								if($row_counter % 4 == 0)
									{
							?>
										</div>
										<div class="row">
									
			<?php
									}
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($residential_folder);
			?>
				</div><!--closes row-->
			</div><!--closes gallerycontainer-->
			
			<div id="commercial" class="gallerycontainer container opaque">
				<div class="row">
					<h2 class="text-center col-12">Flooring</h2>
				</div><!--closes row-->
				<br/><br/>
				<div class="row">
			<?php
				$row_counter=0;
				$commercial_folder_path = '../media/ResidentialHardSurface/'; //commercial images folder path
				$num_commercial_files = glob($commercial_folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);//grabs all the images in the directory

				$commercial_folder = opendir($commercial_folder_path);//opens the directory
				
				if($num_commercial_files > 0)
					{
					while(false !== ($commercial_file = readdir($commercial_folder))) //reads directory to get file name, stops when there are no more images
						{
						$commercial_file_path = $commercial_folder_path.$commercial_file;// get an image
						$commercial_extension = strtolower(pathinfo($commercial_file_path ,PATHINFO_EXTENSION));//returns only the extension
						if($commercial_extension=='jpg' || $commercial_extension =='png' || $commercial_extension == 'gif' || $commercial_extension == 'bmp' || $commercial_extension == 'jpeg') //if there is an image of any of these types......
							{
			?>       
							<a href="<?php echo $commercial_file_path;?>" data-toggle="lightbox" data-gallery="commercial-gallery" data-type="image" class="col-12 col-sm-12 col-md-3 col-lg-3">
							<img src="<?php echo $commercial_file_path;?>" class="gallery img-thumbnail "/>
							</a>
							<?php 
								$row_counter=$row_counter+1;
								if($row_counter % 4 == 0)
									{
							?>
										</div>
										<div class="row">
			<?php
									}
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($commercial_folder);
			?>
				</div><!--closes row-->
			</div><!--closes gallerycontainer-->
			
			<div id="services" class="gallerycontainer container opaque">
				<div class="row">
					<h2 class="text-center col-12">Indoor/ Outdoor</h2>
				</div><!--closes row-->
				<br/><br/>
				<div class="row">
			<?php
				$row_counter=0;
				$services_folder_path = '../media/IndoorOutdoor/'; //services images folder path
				$num_services_files = glob($services_folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);//grabs all the images in the directory

				$services_folder = opendir($services_folder_path);//opens the directory
				
				if($num_services_files > 0)
					{
					while(false !== ($services_file = readdir($services_folder))) //reads directory to get file name, stops when there are no more images
						{
						$services_file_path = $services_folder_path.$services_file;// get an image
						$services_extension = strtolower(pathinfo($services_file_path ,PATHINFO_EXTENSION));//returns only the extension
						if($services_extension=='jpg' || $services_extension =='png' || $services_extension == 'gif' || $services_extension == 'bmp' || $services_extension == 'jpeg') //if there is an image of any of these types......
							{
			?>       
							<a href="<?php echo $services_file_path;?>" data-toggle="lightbox" data-gallery="services-gallery" data-type="image" class="col-12 col-sm-12 col-md-3 col-lg-3">
							<img src="<?php echo $services_file_path;?>" class="gallery img-thumbnail"/>
							</a>
							<?php 
								$row_counter=$row_counter+1;
								if($row_counter % 4 == 0)
									{
							?>
										</div>
										<div class="row">
			<?php
									}
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($services_folder);
			?>
				</div><!--closes row-->
			</div><!--closes gallerycontainer-->
			
			
		</div><!--closes page-content-->
		
		<footer class="container">
			<div class="row">
			<!-- address, contact info-->
			<div class="card col-md-6 col-sm-12 background-blue">
				<div class="card-body">
				<ul class="list-group text-center">
					<li class="list-group-item background-blue">
						<h3 class="display-4 text-white">Contact:</h3>
					</li>
					<li class="list-group-item background-blue">
						<a href="tel:5852719050" class="btn btn-outline-light">Call Me</a>
						<a href="mailto:wagnercarpets@gmail.com" class="btn btn-outline-light">Email Me</a>
					</li>
					<li class="list-group-item background-blue">
						<br>	
						<h3>Wagner Carpets</h3>
					</li>
					<li class="list-group-item background-blue">
						<p>The Highest Quality Carpet and Flooring Services in Rochester, New York</p>
					</li>
					<li class="list-group-item background-blue">
						<p>Formerly known as Cliff Kemp Carpet and Flooring</p>
					</li>
					<li class="social-foot">
						<a href="https://www.facebook.com/wagcarpetsroc/" class="fa fa-facebook" target="_blank"></a>
						<a href="https://www.instagram.com/wagnercarpets/" class="fa fa-instagram" target="_blank"></a>
					</li>
				</ul>
				</div><!--closes card body-->
			</div><!--closes card-->
			<div class="card  col-sm-12 col-md-6">
				<div class="card-body">
				<ul class="list-group text-center hours">
					<li class="list-group-item">
						<h3 class="display-4">Hours of Operation:</h3>
					</li>
					<li class="list-group-item">
						<p>Monday 8:00 - 5:00pm</p>
						<p>Tuesday 8:00 - 5:00pm</p>
						<p>Wednesday 8:00 - 4:00pm</p>
						<p>Thursday 8:00 - 5:00pm</p>
						<p>Friday 8:00-4:00pm</p>
						<p>Saturday Closed</p>
						<p>Sunday Closed</p>
					</li>	
				</ul>
				</div><!--closes card body-->
			</div><!--Closes Card-->
			</div><!--Closes row-->
			
			<div class="row">
			<div class="card col-md-12 col-sm-12 background-tan">
				<div class="card-body">
					<ul class="list-group text-center map">
						<li class="list-group-item background-tan-lite">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.762150496734!2d-77.62183618451778!3d43.172516579140634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b4462c7319e3%3A0xaffbeea96c528478!2s850+St+Paul+St+%2335%2C+Rochester%2C+NY+14605!5e0!3m2!1sen!2sus!4v1538688343815"  frameborder="0" style="border:0" allowfullscreen></iframe>
						<li>
					</ul>
				</div><!--closes card body-->
			</div><!--Closes card-->
			</div><!--ends row-->
		</footer>
	</div><!--closes container-fluid-->
	<script src='../js/animateHeadings.js'></script> 
	<script src='../js/lightBox.js'></script>
	
		
</body>
</html>
