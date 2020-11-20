<?php
	session_start();

	if (!isset($_SESSION['loggedIn'])) {
	    header('Location: login.php');
	    exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Instagram Log IN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:100px;">
	<div class="row justify-content-center">
		<div class="col-md-3" align="center">
			<img src="<?php echo $_SESSION['profilePicture'] ?>">
		</div>
        <div class="col-md-9" align="center">
			ID: <?php echo $_SESSION['id']; ?><br>
			Name: <?php echo $_SESSION['fullName']; ?><br>
			Website: <?php echo $_SESSION['website']; ?><br>
			Bio: <?php echo $_SESSION['bio']; ?><br>
		</div>
	</div>
</div>
</body>
</html>



