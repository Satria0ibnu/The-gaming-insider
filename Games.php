<?php
	require 'functions.php';
	$data = query("SELECT 
    game.game_name, 
    genre.genre_name,
    publisher.publisher_name, 
	game.image,
    MIN(game_platform.release_year) AS release_year,
	num_sales
	FROM game_platform 
    INNER JOIN game_publisher ON game_platform.game_publisher_id = game_publisher.id 
    INNER JOIN publisher  ON game_publisher.publisher_id = publisher.id
    INNER JOIN game ON game_publisher.game_id = game.id
    INNER JOIN genre ON game.genre_id = genre.id
    INNER JOIN platform ON game_platform.platform_id = platform.id
	INNER JOIN global_sales ON game.id = global_sales.game_id
	GROUP BY game.id;");

	// button find clicked
	if (isset($_POST["find"])){
		$data = find($_POST["keyfind"]);
	}


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
		
		/* Style the game cards */
		.game-card {
			background-color: #f2f2f2;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 10px;
			margin: 10px;
			display: inline-block;
			width: 200px;
		}
		
		.game-card img {
			width: 100%;
			height: 150px;
			object-fit: cover;
			margin-bottom: 10px;
		}
		
		.game-card h3 {
			font-size: 18px;
			margin: 5px 0;
		}
		
		.game-card p {
			font-size: 14px;
			color: #777;
			margin: 5px 0;
		}
		
		/* Style the filters section */
		.filters {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
		}
		
		
		.filters select, input, button {
			font-size: 16px;
			padding: 5px;
			margin-right: 10px;
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
	      <li class="active"><a href="Games.php">Games</a>
	      <li><a href="Reviews.php">Review</a></li>
	      <li><a href="About.php">About</a>
	      <li><a href="Contact.php">Contact</a></li>
		  <li><a href="AdminLogin.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	
	<section>
	<div class="filters">
		<form action="" method="post">
			<!-- <label for="sort">Sort By:</label>
			<select id="sort" name="category" >
				<option value=""></option>
				<option value="name">Name</option>
				<option value="genre">Genre</option>
				<option value="publisher">Publisher</option>
				<option value="releaseyear">Release Year</option>
			</select>
			
			<label for="filter">Filter By:</label>
			<select id="filter" name="">
				<option value=""></option>
				<option value="name">Name</option>
				<option value="genre">Genre</option>
				<option value="publisher">Publisher</option>
			</select> -->

			
			<button type="submit" name="find"> Search </button>
			<input type="text" name="keyfind" autocomplete="off" placeholder="Type to search" size="50">
		</form>
		</div>
		
		<h2>All Games</h2>
		
		<?php foreach($data as $d) : ?>
		<div class="game-card">
			<img src="<?= $d["image"]?>" alt="Game">
			<h3><?= $d["game_name"]?></h3>
			<p>Genre: <?= $d["genre_name"]?></p>
			<p>Publisher: <?= $d["publisher_name"]?></p>
			<p>Release Year: <?= $d["release_year"]?> </p>
			<p>Global Sales: <?= $d["num_sales"]?> </p>
		</div>
		<?php endforeach; ?>
		
		</div>
	</section>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>
