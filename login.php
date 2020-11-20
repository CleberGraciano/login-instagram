<?php
    require "InstagramAPI.php";
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
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png"><br><br>
                <form>
                    <input class="form-control" type="email" placeholder="Email..." name="email"><br>
                    <input class="form-control" type="password" placeholder="Password..." name="password"><br>
                    <input type="submit" value="Log In">
                    <input onclick="javascript: window.location = '<?php echo $Instagram->getLoginURL() ?>';" type="button" value="Log In With Instagram">
                </form>
			</div>
		</div>
	</div>
</body>
</html>



