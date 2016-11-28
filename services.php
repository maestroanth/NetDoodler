<?php 
	ob_start(); 
?>

      <section class="large white content first">

        <div class="container">
          <div class="row" style="margin-top: -26px;">
            <div class="col-md-12 text-center">
              <div class="title-block">
                <h1 style="margin: 0;"><img src="images/ServicesProvided.jpg" alt="Services Provided" id="ServicesProvided"  style= "max-height: 8em;

"></h1>

				<p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Software Development (Java, C++, Visual Basic, C#)</p>
				<p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Web Backend Development/Maintenance (PHP, MySQL, WordPress) </p>
				<p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Web Frontend Development/Maintenance (JS, JQuery, Ajax, HTML, CSS, Adobe Creative Suite....) </p>
				<p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Server Scripting/Maintenance (Linux, *Powershell)</p>
				<p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Apache Setup (WAMP, XAMPP, *LAMP)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Logo Design (Hand Drawn if Needed)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Animation (Hand Drawn if Needed)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Video Editing</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Audio Editing</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Electronic Music Composition/Arranging (Finale)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> *Game Development (Unreal, Unity, RPG Maker, C++/SDL)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> *Android App Development (XML/Java)
                <p id="discount" style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> **Microsoft side of things (ASP, Access, Microsoft SQL)
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> **Certain Frameworks (Ruby on Rails, Coldfusion)</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> **Unit Testing</p>
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> Other CMS's (*Symfony, *Drupal, etc) </p>
                
                
                <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;"> <i>*Anything Really.......<a href="#" role="button" onclick="showContent('contact.php');">LMK what you specifically need!</a></i></p>
                <p style= "font-family: Movi Boli; font-size: 1.2em;"> Note: Services marked with an '*' asterik means I have experience, but limited amounts, in. Services marked with two asteriks '**' mean the same as one asterik '*', and 
                I'm willing to charge at a reduced rate in order to obtain more experience.</p>
              </div>
            </div>
           <div class="col-md-12 text-center" style="border-bottom: solid; padding-bottom: 35px; ">
                 <h2 style= "font-family: Maiandra GD, Tekton Pro, Movi Boli; margin-top: 25px; margin-bottom: 60px;  text-decoration: underline;" >We (I) Would LOVE To Find Doodlers That Can.....</h2>
                 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Build WordPress Themes In Collaboration (aimed for small businesses!) </p>
                                  <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Experience with other CMF's such as Symfony, ColdFusion, RoR, etc.</p>
                 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Do Networking And Security</p>
                 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Write Unit Tests (All Languages)</p>
                 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Know the .net Side of Things (asp.net, C#/VisualBasic, Microsoft SQL/Access)</p>
                 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Has made professional mobile apps</p>
				 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Have Great Ideas That Can Broaden or Narrow Our Scope Productively (This will be most important in the online freelancing world)</p>
				 <p style= "font-family: Maiandra GD, Tekton Pro, Movi Boli;">Who has a grasp at "non-technical" artistry to add to the aesthetic of our work.  Being able to draw crayon minions or virtually paint a "Sistine Chapel" will be a plus!</p>
           </div>
          </div>
         <div class="col-md-12 text-center" style= "margin-top: 30px; border-bottom: solid; padding-bottom: 15px; ">
             	 <h1 id="ContactAFreeLancer" style="margin-top: 70px; margin-bottom: 95px; font-family: Maiandra GD;" ><a href="#" role="button" onclick="showContent('contact.php');">Contact A Doodler</a></h1>
              </div> 
		</section>

 <?php 
 		$output = ob_get_clean(); 
 		echo $output;
 		ob_end_flush();
 ?>