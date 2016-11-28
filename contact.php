<?php 

	ob_start(); 
?>
      <section class="large white content first">

        <div class="container">
          <div style= "margin-top: -32px;" class="row">
            <div class="col-md-12 text-center">
              <div class="title-block">
                <h1 style="margin: 0;"><img src="images/ContactADoodler.jpg" alt="Contact a Doodler" style= "max-height: 1.6em; width: 10em; margin-bottom: 25px;"></h1>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <form id="form" action="/php/mail.php" name="form" class="row">
                <input id="name" type="text" placeholder="Name" name="name" class="half form-control">
                <input id="email" type="text" placeholder="E-mail" name="email" class="half form-control">
                <input id="phone" type="text" placeholder="Phone" name="phone" class="form-control">
                <textarea id="message" type="text" placeholder="Message" name="message" class="form-control"></textarea>
                <input id="human" type="text" name="human" placeholder="What is the result of 2+3?" class="last form-control">
                <button id="send" type="submit" class="btn btn-default" onclick="Validate(event)">Send Message</button>
              </form>
            </div>
           	<div class="col-md-12 text-center">
             	<p style="margin-top: 30px; font-family: quicksand, segoe print;">Feel Free to Use Your $$$ To Procure a Project You'd Like Done With Us,</p> 
                <p style="line-height: 1.3; font-family: quicksand, segoe print;">And Help Make NetDoodler Grow!!!!!</p>
                            <!-- Donation Button -->
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="YHQW98UA5NF9A">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
            </div>

          </div>

        </div>
      </section>
 <?php 
 		$output = ob_get_clean(); 
 		echo $output;
 		ob_end_flush();
 ?>