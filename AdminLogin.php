<!DOCTYPE html>
<html>
<head>
	<title>The Gaming Insider</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		/* Style the page header */
		header {
			background-color: #222;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		/* Style the navigation menu */
		nav {
			background-color: #333;
			padding: 10px;
			text-align: center;
		}

		/* Style the links in the navigation menu */
		nav a {
			display: inline-block;
			color: #fff;
			padding: 10px;
			text-decoration: none;
			font-weight: bold;
			font-size: 20px;
			margin: 0 10px;
			transition: all 0.3s ease;
		}

		nav a:hover {
			color: #ffd700;
		}

		/* Style the content section */
		section {
			background-color: #f2f2f2;
			padding: 50px 20px;
			margin: 20px;
			border-radius: 10px;
		}

        form {
            background-color: #C0C0C0; 
            border-radius: 30px; 
            height: auto; 
            width: 400px; 
            text-align: center; 
            padding-bottom: 5px; 
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            align-items: center; 
            flex-direction: column;
        }
		
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="Home.php">The Gaming Insider</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="Home.php">Home</a></li>
	      <li><a href="Games.php">Games</a>
	      <li><a href="Reviews.php">Review</a></li>
	      <li><a href="About.php">About</a>
	      <li><a href="Contact.php">Contact</a></li>
		  <li class="active"><a href="Admin.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	
	<div class="container mt-5">
		<form method="post" action="AdminLogin2.php">
			<br>
			<span style="font-size: 15px;"><b>The Gaming Insider</b></span>
			<br><br>
			Username  : <input type="text" name="username"><br><br>
			Password  : <input type="password" name="password"><br><br>
			<input type="submit" name="login" value="Log In"> <br> <br>
		</form>
	</div>
</body>
</html>
