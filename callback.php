<?php
	session_start();

	if (isset($_GET['error'])) {
		header('Location: login.php');
		exit();
	}

	require "InstagramAPI.php";

	$data = $Instagram->getAccessTokenAndUserDetails($_GET['code']);

	$_SESSION['loggedIn'] = 1;
	$_SESSION['accessToken'] = $data['access_token'];
	$_SESSION['id'] = $data['user']['id'];
	$_SESSION['username'] = $data['user']['username'];
	$_SESSION['bio'] = $data['user']['bio'];
	$_SESSION['website'] = $data['user']['website'];
	$_SESSION['fullName'] = $data['user']['full_name'];
	$_SESSION['profilePicture'] = $data['user']['profile_picture'];

	header('Location: index.php');
	exit();
?>