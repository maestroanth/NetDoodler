<?php 

//cannot name function footer() since it's already been used somewhere on server or theme
function showFooter() {
	ob_start(); 
?>

      <!-- Footer section - default-->
 </div>
  </div>
   </div>
      <footer class="site-footer" >


		      <!-- Bottom section - default-->
		      <section class="bottom dark">
		        <div class="container">
		          <div class="row">
		          	<div class="col-md-4" >
		
		            </div>
		            <div class="col-md-4" style="margin-left: auto;">
		              <p>&copy; NetDoodler 2016 Anthony Walter</p>
		              <p></p>
		              <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" ><img alt="Creative Commons License" style="border-width:0 margin-top: 20px; margin-left: 20%; margin-right: 30%; margin-top: 20px;" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
		              
		            </div>
		            <div class="col-md-4" style="margin-left: center;">
		
		            </div>
		            <!--
		            <div class="col-md-7 col-md-offset-1">
		              <div class="btn-group btn-group-justified"><a href="#" class="btn">
		                  <div class="fa fa-facebook"></div></a><a href="#" class="btn">
		                  <div class="fa fa-stumbleupon"></div></a><a href="#" class="btn">
		                  <div class="fa fa-twitter"></div></a><a href="#" class="btn">
		                  <div class="fa fa-linkedin"></div></a><a href="#" class="btn">
		                  <div class="fa fa-instagram"></div></a><a href="#" class="btn">
		                  <div class="fa fa-codepen"></div></a></div>
		            </div>
		            -->
		          </div>
		        </div>
		      </section>
            </footer>
      <!-- Includes-->
      <script src="js/assets/bootstrap.js"></script>
      <script src="js/assets/imagesloaded.pkgd.min.js"></script>
      <script src="js/assets/validation.js"></script>
      <script src="js/assets/isotope.pkgd.min.js"></script>
      <script src="modules/tera-slider/tera-slider.js"></script>
      <script src="modules/tera-lightbox/tera-lightbox.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/functions.js"></script>
      <script src="js/AjaxCalls.js"></script>
    </div>
  </body>
</html>
 <?php $output = ob_get_clean(); 
 		echo $output;
 		ob_end_flush();
}
 		?>