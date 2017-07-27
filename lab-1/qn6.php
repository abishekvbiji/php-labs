<?php
	/*6. Script to break the entire string mentioned below into array. Separate it with '.' 
   "What distinguishes PHP from something like client­side JavaScript is that the code is executed 
	on the server, generating HTML which is then sent to the client. The client would receive the 
	results of running that script, but would not know what the underlying code was. You can even 
	configure your web server to process all your HTML files with PHP, and then there's really no 
	way that users can tell what you have up your sleeve.The best things in using PHP are that it is 
	extremely simple for a newcomer, but offers many advanced features for a professional 
	programmer. Don't be afraid reading the long list of PHP's features. You can jump in, in a short 
	time, and start writing simple scripts in a few hours." 
	 */
  $input="What distinguishes PHP from something like client­side JavaScript is that the code is executed 
	on the server, generating HTML which is then sent to the client. The client would receive the 
	results of running that script, but would not know what the underlying code was. You can even 
	configure your web server to process all your HTML files with PHP, and then there's really no 
	way that users can tell what you have up your sleeve.The best things in using PHP are that it is 
	extremely simple for a newcomer, but offers many advanced features for a professional 
	programmer. Don't be afraid reading the long list of PHP's features. You can jump in, in a short 
	time, and start writing simple scripts in a few hours.";
	$segment=explode(".", $input);
	foreach ($segment as $value) {
		echo "$value<br>";
	}
  ?>