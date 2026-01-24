<?php 
 $txt1 = "Learn PHP";
 $txt2 = "W3Schools.com";

 echo "<h2>$txt1</h2>";
 echo "<p>Study PHP at $txt2</p>";

 //Diferences between echo and print
 echo "This is output using echo.<br>";
 print "This is output using print.<br>";
 //echo can take multiple parameters, print can only take one argument
 echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
 //print "This " , "string " , "was " , "made " , "with multiple parameters.<br>"; // This will cause an error 
 print "This string was made with a single argument.<br>";