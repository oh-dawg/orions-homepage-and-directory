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
      <img src="photoOfMe.jpg" width="175" height="140"><figcaption class="theCaption">Orion in repose</figcaption>
      </figure>
   
   <p> My name is Orion Christensen.</p>
   <br>
   <p> I live in Idaho, USA</p>
   <br>
   <p> I enjoy hiking, camping, and the great outdoors.</p>   
   <br>
   
   <?php
   print date("l, F j, Y");
   ?>
   
   <!--strtotime("+8 hours")-->
   
   </div>
   
   <div class="rightsidenav">
  
    </div>
   
     </body>
</html>
