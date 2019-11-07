<?php
session_start();
require './vendor/autoload.php';


$fb = new Facebook\Facebook([
	'app_id' => '3696940656986617',
	'app_secret' => 'bab983c58db323205dd15b5a3d908a25',
	'default_graph_version' => 'v2.7'
]);
$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl("http://localhost/Turn%20Up/guest/fb-redirect.php");
try{
	$accessToken = $helper->getAccessToken();
	if(isset($accessToken)){
		$_SESSION['access_token'] = (string)$accessToken; //convert to string
		//if session is set redirect to the index page
		header("Location:fb-redirect.php");
	}
}catch(Exception $exc){
	echo $exc->getTraceAsString();
}
//now we want to get users details like username and password
if(isset($_SESSION['access_token'])){
	try {
			$fb->setDefaultAccessToken($_SESSION['access_token']);
			$res = $fb->get('/me?locale=en_US6fields=name, email');
			$user = $res->getGraphUser();
			echo 'Hello ' ,$user->getField('name');
	} catch (Exception $exc) {
			echo $exc->getTraceAsString();
			
	}


}
?>