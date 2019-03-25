<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("159872666307-7e05gl02v1andldh9llccl3hb7cfa7lp.apps.googleusercontent.com");
	$gClient->setClientSecret("wENhwcWSzHQPn-Ij0BdloPWd");
	$gClient->setApplicationName("tilottama tech");
	$gClient->setRedirectUri("http://localhost/corlate/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
