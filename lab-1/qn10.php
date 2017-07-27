<?php
	/*10. With the below input print the output as “PHP” 
 
	$input1 = "          PHP          "; 
	$input2 = "PHP          "; 
	$input3 = "        PHP ";  */
  $input1 = "          PHP          ";
  $input2 = "PHP          ";
  $input3 = "        PHP ";
  echo str_replace(" ","",$input1)."<br>";
  echo str_replace(" ","",$input2)."<br>";
  echo str_replace(" ","",$input3);
?>