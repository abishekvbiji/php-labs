<?php
	/*9.  
	$input = "qburst technologies"; 
 
	From the above input generate the below outputs, 
 
	● Qburst technologies 
	● Qburst Technologies 
	● QBURST TECHNOLOGIES */
  $input = "qburst technologies";
  echo ucfirst($input)."<br>";
  echo ucwords($input)."<br>";
  echo strtoupper($input);
?>