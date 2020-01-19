<!DOCTYPE html>
<html>
   <head>
   
   <title>homepage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   
</head>
   <body>
   
   <div class="TitleBar">
   
	<p>Orion's HomePage </p>
   
    </div>
   
   <div class="leftsidenav">
   
   <a href="directory.html">directory</a>
   
   </div>
   
   <div class="main">
   
   <figure class="myImage">
      <img src="photoOfMe.jpg" width="175" height="140">
      </figure>
   
   <p> My name is Orion Christensen.</p>
   <br>
   <p> I live in Idaho, USA</p>
   <br>
   <p> I enjoy hiking, camping, and the great outdoors.</p>   
   <br>
   
   <!--php l, day, F month, j, dont know, Y year, H hour, i minute, sa seconds-->
   
   <?php
   date_default_timezone_set("America/Idaho");
   print date("l, F j, Y h:i:sa");
   ?>
   <br>
   
   
   <button  onclick = "document.getElementById('imageSpot').src='galena.jpg'">Click Me for an idaho landscape!
      </button>
	  
	  <img id="imageSpot" src="galenaCoverUp.jpg">
   
   </div>
   
   <div class="rightsidenav">
  
    </div>
   
     </body>
</html>
