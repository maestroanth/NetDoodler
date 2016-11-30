<?php

require_once('includes/header.php');
require_once('includes/footer.php');
require_once('analyticstracking.php');

showHeader();//add parameters if I want a changing logo on each page in header  
showContent();
showFooter();


 //remember don't do inlines anymore fo  quick css fixes.  It overwrit es some of the responsiveness I tend to forget about!!
function showContent() {//AJAX par

	?>


	<div id="theContent"> <!-- margin-top is temp fix until I fix the header div -->
      <!-- Tera Slider block - default-->
      <div class="slider">
        <!-- Slides container-->
        <ul class="slides" > <!-- AW -->



           <!-- Slide 1 Note: I'm hardcoding the responsiveness of just images now under ID "ImageSlide"...goal is to do all images instead of text and headings all the time"-->
          <li class="slide">
            <section class="hero">
              <div id="ImageSlide" style="background-image:url(images/Slides/Slide1newv.jpg);" class="bg parallax"></div>
              <div class="container vcenter">
                <div class="row">
                <!-- 	<img src="images/Slides/Slide1.jpg" style="width: 100%; height: auto;"> <!-- will have to hardcord better responsiveness later -->
                <!--
                  <div class="col-md-12 text-center">
                    <h1 id="sliderHead" style="margin-bottom: 32px;">Want Originality?</h1>
                    <p id="sliderText">"- When you choose NetDoodler, you're not just hiring a random legion of nerds who can code!"</p>
                    <p id="sliderText">"- You are helping out specifically chosen, newly arising freelancers from a multitude of backgrounds."</p>
                    <p id="sliderText">"- This means by being free from any corporate agenda, we have a no-holds-bar in the type of work we can do!!!"</p>

                    <!--  <a role="button" onclick="showContent('services.php');"class="btn hollow anchor">Explore NetDoodler</a>
                  </div>
                   -->
                </div>
              </div>
            </section>
          </li>


          <!-- Slide 2-->
          <li class="slide dark">
            <section class="hero">
              <div id="ImageSlide" style="background-image:url(images/Slides/Slide2.jpg);" class="bg parallax"></div>
              <div class="container vcenter">
                <div class="row">
                	<!--  <img src="images/Slides/Slide2.jpg" style="width: 100%; height: auto;"> <!-- will have to hardcord better responsiveness later -->
                <!--
                  <div class="col-md-12 text-center">
                    <h1 id="sliderHead" style="margin-bottom: 32px;">Want Originality?</h1>
                    <p id="sliderText">"- When you choose NetDoodler, you're not just hiring a random legion of nerds who can code!"</p>
                    <p id="sliderText">"- You are helping out specifically chosen, newly arising freelancers from a multitude of backgrounds."</p>
                    <p id="sliderText">"- This means by being free from any corporate agenda, we have a no-holds-bar in the type of work we can do!!!"</p>

                    <!--  <a role="button" onclick="showContent('services.php');"class="btn hollow anchor">Explore NetDoodler</a>
                  </div>
                   -->
                </div>
              </div>
            </section>
          </li>
                    <!-- Slide 3-->
          <li class="slide">
            <section class="hero">
              <div id="ImageSlide" style="background-image:url(images/Slides/Slide3.jpg);" class="bg parallax"></div>
              <div class="container vcenter">
                <div class="row">
                <!-- 	<img src="images/Slides/Slide1(new).jpg" style="width: 100%; height: auto;"> <!-- will have to hardcord better responsiveness later -->
                <!--
                  <div class="col-md-12 text-center">
                    <h1 id="sliderHead" style="margin-bottom: 32px;">Want Originality?</h1>
                    <p id="sliderText">"- When you choose NetDoodler, you're not just hiring a random legion of nerds who can code!"</p>
                    <p id="sliderText">"- You are helping out specifically chosen, newly arising freelancers from a multitude of backgrounds."</p>
                    <p id="sliderText">"- This means by being free from any corporate agenda, we have a no-holds-bar in the type of work we can do!!!"</p>

                    <!--  <a role="button" onclick="showContent('services.php');"class="btn hollow anchor">Explore NetDoodler</a>
                  </div>
                   -->
                </div>
              </div>
            </section>
          </li>

                              <!-- Slide 4-->
          <li class="slide">
            <section class="hero">
              <div id="ImageSlide" style="background-image:url(images/Slides/Slide4.jpg);" class="bg parallax"></div>
              <div class="container vcenter">
                <div class="row">
                <!-- 	<img src="images/Slides/Slide1.jpg" style="width: 100%; height: auto;"> <!-- will have to hardcord better responsiveness later -->
                <!--
                  <div class="col-md-12 text-center">
                    <h1 id="sliderHead" style="margin-bottom: 32px;">Want Originality?</h1>
                    <p id="sliderText">"- When you choose NetDoodler, you're not just hiring a random legion of nerds who can code!"</p>
                    <p id="sliderText">"- You are helping out specifically chosen, newly arising freelancers from a multitude of backgrounds."</p>
                    <p id="sliderText">"- This means by being free from any corporate agenda, we have a no-holds-bar in the type of work we can do!!!"</p>

                    <!--  <a role="button" onclick="showContent('services.php');"class="btn hollow anchor">Explore NetDoodler</a>
                  </div>
                   -->
                </div>
              </div>
            </section>
          </li>
        	       <!-- Slide 5 Video-->
          <li class="slide">
            <section class="hero">
              <div id="ImageSlide" style="background-image:url(images/Slides/Slide5.jpg);" class="bg"></div>
              <div class="container vcenter">
                <div class="row">
                <!--
                  <div  class="col-md-12 text-center" >
                  <h1><img src="images/Slides/BlankSideBackground.jpg" alt="Smiley face" style= "width: 180%; margin-left: -38%; margin-top: -6%;"></h1>
	<!--  	   <p id="sliderText"> "- Sick of the professional, but generic looking sites that simply follow procedure?"</p>
                    <p id="sliderText"> "- Do you not want your website to fall in this same black pit and actually stick out?"</p>
                  </div>-->
                </div>
              </div>
            </section>
          </li>
          <!-- Slide 6 (dark + MP4 video)-->
          <!-- sometime add this screenshot to background in slide
			<div style="background-image:url(images/epicscreenshot.bmp);" class="bg parallax"></div>
			-->
          <li class="slide dark">
            <section class="hero">
              <div class="bg">
                <video id="vid" controls="true" class="embed-responsive-item fs parallax">
                  <source src="videos/NetDoodlerIntroVideo.mp4" type="video/mp4" >
                </video>
              </div>

            </section>
          </li>




           <!-- Old shit-->

 			<!--
          <li class="slide dark">
            <section class="hero">
              <div style="background-image:url(images/14.jpg);" class="bg parallax"></div>
              <div class="container vbottom">
                <div class="row">
                  <div class="col-md-12">
                    <h1 id="sliderHead" >It's time</h1>
                    <p id="sliderText">"One shouldn't have to sacrifice creativity for the sake of looking professional."</p>
                  </div>
                </div>
              </div>
            </section>
          </li>
          -->
          <!-- Slide 1 (dark + MP4 video)-->
          <!-- sometime add this screenshot to background in slide
			<div style="background-image:url(images/epicscreenshot.bmp);" class="bg parallax"></div>

          <li class="slide dark">
            <section class="hero">
              <div class="bg">
                <video autoplay loop class="embed-responsive-item faded fs parallax">
                  <source src="videos/indre.webm" type="video/webm">
                  <source src="videos/JustBestClip.mp4" type="video/mp4">
                </video>
              </div>
              <div class="container vbottom">
                <div class="row">
                  <div class="col-md-12 text-right" style="margin-left: -12%;">
                    <h1 id="sliderHead" >A Glimpse at Animations To Come</h1>
                    <p id="sliderText"><i>(Imagine Hand-Drawn Animations For Your Site!)</i></p>
                  </div>
                </div>ffff
              </div>
            </section>
          </li>
                   <!-- Slide 3 (dark)-->
                   <!--  -
          <li class="slide dark">
            <section class="hero">
              <div style="background-image:url(images/07.jpg);" class="bg parallax"></div>
              <div class="container vbottom">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h1 id="sliderHead" > When you choose NetDoodler:</h1>
                    <p id="sliderText"> - you're helping out talented, newly arising freelancers without any corporate agenda and big dreams!!!</p>
                  </div>
                </div>
              </div>
            </section>
          </li>
-->
        </ul>
      </div>
      <h4 style="margin-left: 26%; margin-right: 26%; line-height: 2em; padding-top: 4%; padding-bottom: 4%; text-align: center;"> <i>" - We employ only the finest crayon minions who are willing to put their lives on the line so that your small business website can: <b>stick out</b> and <b>succeed</b>."</i> </h4>
			<!--      <h4 style="margin-left: 26%; margin-right: 26%; line-height: 2em; margin-top: 4%; margin-bottom: 4%;"> <i>" - braving the audacious batt  which help small businesses <b>stick out</b> and succeed."</i> </h4>-->
 	</div>



	<?php
}
?>
<script type="text/javascript">
window.onload = function() {
	var vid = document.getElementById("vid");
    vid.pause();
}

</script>
