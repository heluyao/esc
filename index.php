<?php
 $str = 'window.sourceURL = "http://app.ft.com/";alert(window.sourceURL);';

 echo '{"basejs":"'.strProc($str,1).'"}';

function strProc($string,$bIsHtml=false){ 
if (!$bIsHtml){ 
	$string=htmlspecialchars($string); 
} 
$string=str_replace('/','\/',$string); 
$string=str_replace('"','\"',$string); 


return $string; 
} 

?>