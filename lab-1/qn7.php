<?php
	/*7. Script to decode this html entities 
	&lt;html&gt;&lt;body&gt;Hey!&lt;/body&gt;&lt;/html&gt; */
	$s="&lt;html&gt;&lt;body&gt;Hey!&lt;/body&gt;&lt;/html&gt;"; 
	echo html_entity_decode($s);
 	
?>