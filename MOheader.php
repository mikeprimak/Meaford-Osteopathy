<?php

$homeclass = "";
$osteopathyclass = "";
$rachelclass = "";
$resourcesclass = "";
$contactclass = "";
$covidclass = "";


if($page == 'home'){
$homeclass = 'current';    
}elseif($page == 'osteopathy'){
$osteopathyclass = 'current';
}elseif($page == 'rachel'){
$rachelclass = 'current';    
}elseif($page == 'resources'){
$resourcesclass = 'current';
}elseif($page == 'contact'){
$contactclass = 'current';   
}elseif($page == 'covid'){
$covidclass = 'current';   
}    

?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $pagetitle ?></title>




   <!-- I added libraries and stuff -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header" data-sticky-class="not-dark"> <!-- Once I have the logo file, I can use a version with a alpha background anf change BG in this line to style="background-color:#F0F7D0;" -->

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="https://meafordosteopathy.com/" class="standard-logo" data-dark-logo="images/custom/LOGO-MEAFORD-OSTEO.png"><img src="images/custom/LOGO-MEAFORD-OSTEO.png" alt="Meaford Osteopathy Logo"></a>
						<a href="https://meafordosteopathy.com/" class="retina-logo" data-dark-logo="images/custom/LOGO-MEAFORD-OSTEO.png"><img src="images/custom/LOGO-MEAFORD-OSTEO.png" alt="Meaford Osteopathy Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
	

	
	
	
							
							<li class="<?php echo $homeclass ?>"><a href="https://meafordosteopathy.com/"><div>Home</div></a></li>
							
							<li class="<?php echo $osteopathyclass ?>"><a href="What-Is-Osteopathy"><div>Osteopathy</div></a></li>
							
							
							<!--
							<li><a href="https://meafordosteopathy.com/dev2/MOservices.php"><div>Services</div></a>
								<ul>
								<li><a href="rs-demos.html"><div>Osteopathic Therapy</div></a></li>
								<li><a href="rs-demos.html"><div>Massage Therapy</div></a></li>
								<li><a href="rs-demos.html"><div>Learn about All Services</div></a></li>
								</ul>
							</li>
							
							-->
							
							<li class="<?php echo $rachelclass ?>"><a href="About-Rachel-Gorman-Osteopath"><div>Rachel</div></a></li>
								
							<li class="<?php echo $resourcesclass ?>"><a href="Patient-Resources"><div>Resources</div></a></li>
							
							<!--
							<li class="<?php echo $covidclass ?>"><a href="covid-19.php"><div>Safety & COVID-19</div></a></li>
							-->
							
							<li class="<?php echo $contactclass ?>"><a href="Contact-Meaford-Osteopathy"><div>Contact</div></a></li>
							
						
							
							
							<li><a href="https://meafordosteopathy.clinicsense.com/book" style="padding-bottom:8px !important"><div class="button button-rounded button-small" style="margin-top:-22px; margin-left:-5px;">Book Appointment</div></a></li>


             
             <!--
                            <li><a><div style="margin-top:-68px;">
                                
                                
                                
                                

<script type="text/javascript">
    var host = (('https:' == document.location.protocol) ? 'https://' : 'http://');
    var params = "?size=small&color=gray";
    document.write(unescape('%3Cscript src="' + host +
    'meafordosteopathy.clinicsense.com/book_widget/') + params +
    unescape('" type="text/javascript"%3E%3C/script%3E'));
</script>
                                
                                
                                </div>
                                </a>
                            </li>
-->
							
							
							
							
						</ul>


					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
