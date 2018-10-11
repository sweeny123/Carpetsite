<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
	<link rel="icon" href="#"><!-- used for icon in tab-->
	
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
				
				<ul class="navbar-nav ">
					<li class="nav-item col-md-2 ">
						<a href='../index.html'>Home</a>
					</li>
					<li class="nav-item col-md-2" >
						<a href='about.html'>About</a>
					</li>
					<li class="nav-item dropdown" >
						<a class="nav-item nav-link dropdown-toggle" href='#' id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
							<a class="dropdown-item" href="gallery.php?1">Residential</a>
							<a class="dropdown-item" href="gallery.php?2">Commercial</a>
							<a class="dropdown-item" href="gallery.php?3">Our Services</a>
						</div><!--closes dropdown-->
					</li>
					<li class="nav-item col-md-2 active">
						<a href='gallery.html'>Gallery</a>
					</li>
					<li class="nav-item col-md-2" >
						<a href='faq.html' >FAQs</a>
					</li>
					<li class="nav-item col-md-2">
						<a href='quote.html'>Contact</a>
					</li>
					<li class="nav-item col-md-3">
						<a href="tel:5852719050">(585) 271-9050</a>
					</li>
					<li>
						<h2><a href="#" class="fa fa-facebook"  ></a></h2>
					</li>
					<li>
						<h2><a href="#" class="fa fa-twitter" ></a></h2>
					</li>
					<li>
						<h2><a href="#" class="fa fa-instagram" ></a></h2>
					</li>
				</ul>
				</div><!-- closes collapse div-->
			</nav><!--closes nav-->
			
			<div  class="jumbotron jumbotron-fluid header " >
				<div class="container" >
					<h1>Wagner Carpets</h1> 
						<h2></h2>
						<h5>Formerly known as Cliff Kemp Carpet and Flooring</h5>
						<h6><a href="tel:5852719050">(585) 271-9050</a></h6>
						<h6><a href="mailto:info@wagnercarpetsroc.com">info@wagnercarpetsroc.com</a></h6>
						<a href="quote.html" class="btn btn-info">Got a Question?</a>
				</div>
				
			</div>
		</header><!--closes header-->
		
		<div class="page-content">
			<div id="gallerybuttons" class="container">
				<div class="row">
					<div class="col-lg-0 col-md-0 col-sm-1"></div>
					<button id="residentialbutton" class="btn btn-secondary col-md-3 col-sm-3 gallerybutton" onclick="toggleResidential();">Residential</button>
					<div class="col-lg-0 col-md-0 col-sm-1"></div>
					<button id="commercialbutton" class="btn btn-secondary col-md-3 col-sm-3 gallerybutton" onclick="toggleCommercial();">Commercial</button>
					<div class="col-lg-0 col-md-0 col-sm-1"></div>
					<button id="servicesbutton" class="btn btn-secondary col-md-3 col-sm-3 gallerybutton" onclick="toggleServices();">Services</button>
				</div><!--closes row-->
   			</div><!--closes gallerybuttons-->
			
			
			<div id="residential" class="gallerycontainer col-10 opaque">
			<?php
				
				$residential_folder_path = '../media/BoundCarpet/'; //residential images folder path
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
							<img src="<?php echo $residential_file_path;?>" class="gallery img-thumbnail col-md-3 col-sm-12"/>
							
			<?php
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($residential_folder);
			?>
			</div><!--closes gallerycontainer-->
			
			<div id="commercial" class="gallerycontainer col-10 opaque">
			<?php
				
				$commercial_folder_path = '../media/CommercialCarpet/'; //commercial images folder path
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
							<img src="<?php echo $commercial_file_path;?>" class="gallery img-thumbnail col-md-3 col-sm-12"/>
							
			<?php
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($commercial_folder);
			?>
			</div><!--closes gallerycontainer-->
			
			<div id="services" class="gallerycontainer col-10 opaque">
			<?php
				
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
							<img src="<?php echo $services_file_path;?>" class="gallery img-thumbnail col-md-3 col-sm-12"/>
							
			<?php
							} 
						}
					}
				else
				{
					echo "the folder was empty !";
				}
				closedir($services_folder);
			?>
			</div><!--closes gallerycontainer-->
			
			
		</div><!--closes page-content-->
		
		<footer>
			<!-- address, contact info-->
			<div class="card">
				<div class="card-body">
				<ul class="list-group text-center">
					<li class="list-group-item">
						<h6>Contact:</h6>
					</li>
					<li class="list-group-item">
						<a href="tel:5852719050" class="btn btn-outline-primary">Call Me</a>
						<a href="mailto:info@wagnercarpetsroc.com" class="btn btn-outline-primary">Email Me</a>
					</li>
					<li class="list-group-item">
						<br>	
						<h3>Wagner Carpets</h3>
					</li>
					<li class="list-group-item">
						<p>The Highest Quality Carpet and Flooring Services in Upstate New York</p>
					</li>
					<li class="list-group-item">
						<p>Formerly known as Cliff Kemp Carpet and Flooring</p>
					</li>
					<li class="social-foot">
						<a href="#" class="fa fa-facebook"  ></a>
						<a href="#" class="fa fa-twitter" ></a>
						<a href="#" class="fa fa-instagram" ></a>
						<a href="#" class="fa fa-pinterest" ></a>
					</li>
				</ul>
				</div><!--closes card body-->
			</div><!--closes card-->
			<div class="card">
				<div class="card-body">
				<ul class="list-group text-center">
					<li class="list-group-item">
						<h6>Hours of Operation:</h6>
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
			</div<!--Closes Card-->
		</footer>
		<div class="card footer-card">
			<div class="card-body">
				<ul class="list-group text-center">
					<li class="list-group-item">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.762150496734!2d-77.62183618451778!3d43.172516579140634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b4462c7319e3%3A0xaffbeea96c528478!2s850+St+Paul+St+%2335%2C+Rochester%2C+NY+14605!5e0!3m2!1sen!2sus!4v1538688343815" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					<li>
				</ul>
			</div><!--closes card body-->
		</div><!--Closes card-->
	</div><!--closes container-fluid-->
	
	<script src='../js/animateHeadings.js'></script> 	
		
</body>
</html>
