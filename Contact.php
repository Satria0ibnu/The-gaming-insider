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
		
		/* Style the contact form */
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 20px;
			max-width: 500px;
			width: 100%;
		}

		label {
			font-weight: bold;
			margin-bottom: 10px;
			display: block;
			font-size: 18px;
			color: #333;
			text-align: left;
			width: 100%;
		}

		input[type="text"], input[type="email"], textarea {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			background-color: #fff;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
			color: #333;
			border: 2px solid #ddd;
		}

		textarea {
			height: 150px;
			resize: none;
		}

		input[type="submit"] {
			background-color: #ffd700;
			color: #333;
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: all 0.3s ease;
			width: 100%;
			margin-top: 20px;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
		}

		input[type="submit"]:hover {
			background-color: #333;
			color: #ffd700;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
		}

		@media screen and (min-width: 768px) {
			section {
				padding: 50px;
			}

			form {
				max-width: 600px;
			}

			input[type="text"], input[type="email"], textarea {
				margin-bottom: 30px;
			}
		}

		footer {
		  background-color: #333;
		  color: white;
		  text-align: center;
		  padding: 10px;
		  position: fixed;
		  bottom: 0;
		  width: 100%;
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
	      <li class="active"><a href="Contact.php">Contact</a></li>
		  <li><a href="AdminLogin.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	
	<section>
		<h2>Get in Touch</h2>
		<p>Have a question, comment, or suggestion? We'd love to hear from you! Fill out the form below to send us a message and we'll get back to you as soon as possible.</p>
		
		<form action="ContactForm.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Your name" required>
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Your email" required>
			
			<label for="message">Message:</label>
			<textarea id="message" name="message" placeholder="Enter your message here" required></textarea>
			
			<input type="submit" value="Send Message">
		</form>
	</section>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>
