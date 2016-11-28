<?php 
	ob_start(); 
?>

      <section class="large white content first">
    <link rel="stylesheet" type="text/css" href="../css/core.css">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="title-block">
                <h1>Services Focker</h1>
                <p></p>
                <p> Logo Design (Hand Drawn if Needed)</p>
                <p> Animation (Hand Drawn if Needed)</p>
                <p> Backend Maintence (PHP...) <i>*.Net Hopefully Soon!</i></p>
                <p> Video Editting</p>
                <p> Audio Editting</p>
                <p> Electronic Music Composition/Arranging (Finale)</p>
                <p> Server Scripting (Linux)</p>
                <p> Database Maintenance (MySQL) <i>*Microsoft SQL Hopefully soon!</i></p>
                <p> Software Development (Java or C++)</p>
                <p> Game Development? </p>
                <p style= "margin-top: -3.4em; font-size: 1.2em;"><a href="/Misc. Downloads/Cosimous.exe" download">(Click for Playable Download and Extract the "Cosimous" Folder)</a></p>
                <p> Android App Development (XML/Java) <i>*iPhone Hopefully soon!</i></p>
                <p> CMS's (Wordpress, Drupal, etc,) *Willing to Learn or Hire Base on Demand*</p>
                
                
                <p> <i>*Anything Really.......<a href="#" role="button" onclick="showContent('contact.php');">LMK what you specifically need!</a>*</i></p>
              </div>
            </div>
           </div>
          </div>

		</section>

 <?php 
 		$output = ob_get_clean(); 
 		echo $output;
 		ob_end_flush();
 ?>