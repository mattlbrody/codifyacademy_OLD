<?php

require("postmark.php");

if (isset($_POST['submit'])) {

	$email = ($_POST['email']);
	
	$postmark = new Postmark("8c96df8c-c1cd-4cd4-8988-2392424abca8","sambrody@codifyacademy.com");
	
	$result = $postmark->to("sambrody@codifyacademy.com")
		->subject("FBA")
		->plain_message($email)
		//->attachment('File.pdf', $file_as_string, 'application/pdf')
		->send();
	
	if($result === true)
		$home_url = 'http://codifyacademy.com/courseadd.php';
    	header('Location: ' . $home_url);
		
}

?>
