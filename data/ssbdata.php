<?php

$ssb_data = $_REQUEST['ssb_data'];

if ($ssb_data == 1){ 
	function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$data = ' Email : '. check_input($_POST['ssb_email']).' , '. PHP_EOL;


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$data))
{
    die("E-mail address not valid"); 
}
else{
	
	$file = "sm_subcribers-list.csv"; 
	$fp = fopen($file, "a")or die("Error Couldn't open $file for writing!");
	fwrite($fp, $data)or die("Error Couldn't write values to file!"); 
	fclose($fp); 
}



/*
$data = array(

	 array($_POST['name']),
	 array($_POST['email'] )
	);
	*/


include 'subscribe_msg.php';
}


 ?>
