<?php
	require 'functions.php';
	$data = query("SELECT * FROM review");
	
?>

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
		
		/* Style the review cards */
		.review {
		  display: inline-block;
		  width: 45%;
		  margin: 10px;
		  padding: 10px;
		  border: 1px solid #ccc;
		}

		.review-card {
			background-color: #f2f2f2;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 10px;
			margin: 10px;
			display: inline-block;
			width: 300px;
		}
		
		.review-card h3 {
			font-size: 18px;
			margin: 5px 0;
		}
		
		.review-card p {
			font-size: 14px;
			color: #777;
			margin: 5px 0;
		}

		.review-card:nth-child(even) {
		  background-color: #fff;
		}
		
		/* Style the form section */
		form {
			background-color: #f2f2f2;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 20px;
			margin: 20px;
			width: 500px;
		}
		
		form label {
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 10px;
			display: block;
		}
		
		form input[type=text], form textarea {
			font-size: 14px;
			padding: 5px;
			width: 100%;
			margin-bottom: 10px;
			box-sizing: border-box;
		}
		
		form button {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}

		form button[type="submit"] {
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

		form button[type="submit"]:hover {
			background-color: #333;
			color: #ffd700;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
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
	      <a class="navbar-brand" href="Home2.html">The Gaming Insider</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="Home2.php">Home</a></li>
	      <li><a href="Games2.php">Games</a>
	      <li class="active"><a href="Reviews2.php">Review</a></li>
	      <li><a href="About2.php">About</a>
	      <li><a href="Contact2.php">Contact</a></li>
		  <li><a href="AdminForm.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="AdminLogin.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	
	<section>
  		<h2>All Reviews</h2>
		<?php foreach($data as $d) : ?>
  		<div class="review-card" id="reviews-container">

			<h3><?= $d["game_title"]?></h3>
			<p>Author: <?= $d["author"]?></p>
			<p>Rating: <?= $d["rating"]?></p>
			<p>Review: <?= $d["review"]?></p>
			
		</div>
		<?php endforeach ?>
	</section>


	<section>
		<h2>Write a Review</h2>
		
		<form action="submit.php" method="post">
			<label for="title">Game Title:</label>
			<input type="text" id="title" name="title" required>
			
			<label for="author">Author:</label>
			<input type="text" id="author" name="author" required>
			
			<label for="rating">Rating:</label>
			<input type="number" id="rating" name="rating" min="1" max="5" required>
			
			<label for="review">Review:</label>
			<textarea id="review" name="review" required></textarea>
			
			<button type="submit">Submit Review</button>
		</form>

	</section>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>
