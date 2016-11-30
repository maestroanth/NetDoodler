<?php

//cannot name function header() since it's already been used somewhere on server or theme
function showHeader() {
	ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NetDoodler Web Design </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="NetDoodler: Web Design" />
	<meta name="description" content="We are only the finest crayon minions who are willing to put their lives on the line so that your small business website can: stick out and succeed. Freelance Web Design Services." />
  <meta name="keywords" content="HTML,CSS,XML,JavaScript, crayon minions, crayon, minion, web, design, internet, freelance, developer, programming, service, Angular, React, php, fort collins, greeley, colorado, cheyenne, wyoming, boulder, denver, longmont, loveland">
  <meta name="author" content="Anthony Walter">
	<meta property="og:image" content="http://netdoodler.com/images/logos/FINALVERSIONBIATCH!(withcaption).jpg" />
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="icon" type="image/png" href="favicon.png?v=2">
    <script src="js/assets/jquery.js"></script>
    <script src="js/validationinjavascript.js"></script>
		<script src="//cdn.jsdelivr.net/g/es6-promise@1.0.0"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jsonld/0.3.15/jsonld.js"></script>
		<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
		  "url": "http://www.netdoodler.com",
		  "contactPoint": [{
		    "@type": "ContactPoint",
		    "telephone": "+1-970-301-3202",
		    "contactType": "customer service"
		  }]
		}
		</script>
  </head>
  <body>
    <!-- Wrapper-->
    <div class="page-wrap">
    <div id="wrapper" class="container-fluid">
      <!-- Navigation block - default-->
      <nav id="mainnav" data-spy="affix" data-offset-top="40" class="navbar navbar-default navbar-fixed-top light center"> <!--  data-offset-top="40" add this in for animation top-->
        <div class="container">

          <div id="headerAdjustMarginRight" class="navbar-header hcenter" >
             <ul id="leftNavBar" class="nav navbar-nav navbar"> <!-- original was navbar-right -->
              <!-- Menu items-->

			  <li><a href="#" role="button" onclick="showContent('aboutNetDoodler.php');"  style="color: black;">
              	<img class="aboutMenu" style="font-family: Segoe Print;" src="/images/menu/AboutUnderlined(woshadow).png" alt="About"> </a>
              </li>
              <!-- showContent('aboutNetDoodler.php') -->
              <li><a href="#" role="button" onclick="showContent('services.php');" style="color: black;">
              	<img class="servicesMenu" style="font-family: Segoe Print;" src="/images/menu/ServicesUnderlined(woshadow).png" alt="Services"> </a>
              </li>



            </ul>
            <a href="index.php"   class="navbar-brand"><img style="padding-left: 2px; padding-right: 2px;" src="images/logos/FINALVERSIONBIATCH!(withcaption).jpg" alt="NetDoodler" class="light">
            <img src="images/logos/FINALVERSIONBIATCH!(withcaption).jpg" alt="NetDoodler" class="dark"></a>
         <ul id="rightNavBar" class="nav navbar-nav navbar">
              <li><a href="#" role="button" onclick="showContent('contact.php');" style="color: black;">
              <img class="contactMenu"  style="font-family: Segoe Print;" src="/images/menu/ContactUnderlined(woshadow).png" alt=Contact"   > </a>
              </li>
			  <li><a href="#" role="button" onclick="showContent('folio.php');" style="color: black;">
			  <img class="folioMenu" style="font-family: Segoe Print;" src="/images/menu/folio.png" alt="folio"> </a> <!-- src="/images/menu/UpcomingUnderlined(woshadow).png" 9/3/2016 AW -->
              </li>

            </ul>



   			<ul id="tabletMenu" class="nav navbar-nav">
              <!-- Menu items-->
              <li><a href="#" role="button" onclick="showContent('aboutNetDoodler.php');"  style="color: black; display:inline;">
              	<img class="aboutTabletMenu" style="font-family: Segoe Print;" src="/images/menu/AboutUnderlined(woshadow).png" alt="About"> </a>

              </li>
              <li ><a href="#" role="button" onclick="showContent('services.php');" style="color: black; display:inline;">
              	<img class="servicesTabletMenu" style="font-family: Segoe Print;" src="/images/menu/ServicesUnderlined(woshadow).png" alt="Services"> </a>

              </li>
              <li><a href="#" role="button" onclick="showContent('contact.php');" style="color: black; display:inline;">
              <img class="contactTabletMenu"  style="font-family: Segoe Print;" src="/images/menu/ContactUnderlined(woshadow).png" alt=Contact"   > </a>
              </li>
              <li><a href="#" role="button" onclick="showContent('folio.php');" style="color: black; display:inline;">
			  <img class="folioTabletMenu" style="font-family: Segoe Print;" src="/images/menu/folio.png" alt="Folio"> </a>

              </li>

            </ul>


        <!-- Menu For Phones -->
                <div id="phoneMenu" class="navbar-header">
            <button id="stupidSubPhoneMenu" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">

            <ul id = "phoneMenu" class="nav navbar-nav navbar-right">
              <!-- Menu items-->
              <li class="dropdown"><a href="#" role="button" onclick="showContent('aboutNetDoodler.php');" style="color: black;">
              	<img class="aboutPhoneMenu" style="font-family: Segoe Print;" src="/images/menu/AboutUnderlined(woshadow).png" alt="About"> </a>

              </li>
              <li class="dropdown"><a href="#" role="button" onclick="showContent('services.php');" style="color: black;">
              	<img class="servicesPhoneMenu" style="font-family: Segoe Print;" src="/images/menu/ServicesUnderlined(woshadow).png" alt="Services"> </a>

              </li>
              <li class="dropdown"><a href="#" role="button" onclick="showContent('contact.php');" style="color: black;">
              <img class="contactPhoneMenu"  style="font-family: Segoe Print;" src="/images/menu/ContactUnderlined(woshadow).png" alt=Contact"   > </a>
              </li>
              <li class="dropdown"><a href="#" role="button" onclick="showContent('folio.php');" style="color: black;">
			  <img class="folioPhoneMenu" style="font-family: Segoe Print;" src="/images/menu/folio.png" alt="Folio"> </a>

              </li>

            </ul>
          </div>
        </div>

        <!--
           	<section class="light" style="background-color: white;">
           	<div id="navbar" class="navbar-collapse collapse" >


          </div></section>
   		-->
      </nav>
        </div>
 <?php $output = ob_get_clean();
 		echo $output;
 		ob_end_flush();
}
 		?>
