<?php
	/*8. $input = array('PHP', 'is', 'a', 'widely­used', 'open', 'source', 'general­purpose', 'scripting', 
	'language'); 
 
	From the above input generate the below outputs, 
 
	1. PHP is a widely­used open source general­purpose scripting language 
	2. PHP­is­a­widely­used­open­source­general­purpose­scripting­language 
	3.  
	PHP 
	is 
	a 
	widely­used 
	open 
	source 
	general­purpose 
	scripting 
	language  */
  $input = array('PHP', 'is', 'a', 'widely­used', 'open', 'source', 'general­purpose', 'scripting', 
  'language');
  echo "1.";
  for($i=0;$i < sizeof($input);$i++)
  {
  	if($i==sizeof($input)-1)
  		echo "$input[$i]<br>";
  	else
  		echo "$input[$i] ";
  }
  echo "2.";
  for ($i=0; $i < sizeof($input); $i++) { 
    if($i==sizeof($input)-1)
   		echo "$input[$i]<br>";
   	else
   		echo "$input[$i]-";
  }
	echo "3.<br>";
  for ($i=0; $i < sizeof($input); $i++) { 
    if($i==sizeof($input)-1)
   		echo "$input[$i]";
   	else
   		echo "$input[$i]<br>";
  }

 	
?>