<!DOCTYPE html>
<html>
   <head>
   
   <title>homepage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <script type="text/javascript" src="homepageJS.js"></script>
   
</head>
   <body>
   
   <div class="TitleBar">
   
	<p>Orion's HomePage </p>
   
    </div>
   
   <div class="leftsidenav">
   
   <a href="directory.html">directory</a>
   
   </div>
   
   <div class="main" align="center">
   
   <figure class="myImage">
      <img src="photoOfMe.jpg" width="100%" height="100%">
      </figure>
	  
	  <br>
   
   <p> My name is Orion Christensen.</p>
   <br>
   <p> I live in Idaho, USA</p>
   <br>
   <p> I enjoy hiking, camping, and the great outdoors.</p> 
   
   <br>
   
   <!--php l, day, F month, j, dont know, Y year, H hour, i minute, sa seconds-->
   
   <?php
   date_default_timezone_set("America/Idaho");
   print date("l, F j, Y h:i:sa", strtotime("-7 hours"));
   ?>
   <br>
 
	<!-- style="display:none" -->
      <div id="imageDiv" style="display:none">
	  <!--<img class="imageSpot" src="northtrees.jpg" width="50%" height="50%">-->
	  <p> for some reason my image wouldnt load so #trees trees trees trees trees trees</p>
	  
	  </div>
	  
	  <button onclick="changeImage()">Click Me for an idaho landscape!</button>
   
   </div>
   
   <div class="rightsidenav">
  
    </div>
   
     </body>
</html>
