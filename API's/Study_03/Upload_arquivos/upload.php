<?php

session_start();
$file = filter_input(INPUT_POST, $submit, FILTER_SANITIZE_STRING);
if($file){

}
else{
	$_SESSION['msg'] = "<p style='font-color':red;>";Error to Upload File</p>'
	header('location':index.php);
}

?>