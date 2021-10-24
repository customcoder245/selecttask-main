<?php 

$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

if(mail("customcoder245@gmail.com","My subject",$msg)){
	echo  "mail send";
}

?>fgfgfgf