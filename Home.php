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

		body, header {
		  margin: 0;
		  padding: 0;
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

		.carousel {
		  position: relative;
		  height: 500px;
		  overflow: auto;
		  width: 100%;
		  margin: auto;
		}

		.slide {
		  display: flex;
		  justify-content: space-between;
		  align-items: center;
		  width: 100%;
		  height: 100%;
		  overflow: hidden;
		  position: absolute;
		  top: 0;
		  left: 0;
		  opacity: 0;
		  transition: opacity 0.5s ease-in-out;
		  z-index: 1;
		}

		.slide.active {
		  opacity: 1;
		}

		.slide img {
		  width: calc(50% - 10px);
		  height: auto;
		  object-fit: cover;
		  border-radius: 5px;
		  margin: 0 5px;
		}

		.navbtn {
		  position: absolute;
		  bottom: 20px;
		  left: 50%;
		  transform: translateX(-50%);
		  z-index: 2; /* Update the z-index to a lower value */
		}

		.prev,
		.next {
		  background-color: rgba(0, 0, 0, 0.5);
		  color: #fff;
		  font-size: 20px;
		  border: none;
		  cursor: pointer;
		  padding: 10px 20px;
		  border-radius: 5px;
		  margin: 0 10px;
		}

		.prev:hover,
		.next:hover {
		  background-color: rgba(0, 0, 0, 0.8);
		}

		/* Style the game cards */
		.game-card {
			background-color: #f2f2f2;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 2px 2px 5px rgba(0,0,0,0.6);
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

		/* Style the content section */
		section {
			background-color: #f2f2f2;
			padding: 50px 20px;
			margin: 20px;
			border-radius: 10px;
		}

		/* Style the feature section */
		.feature {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		
		.feature-image {
			flex-basis: 40%;
			margin-right: 20px;
		}
		
		.feature-content {
			flex-basis: 50%;
		}
		
		.feature h2 {
			font-size: 24px;
			margin-top: 0;
		}
		
		.feature p {
			font-size: 16px;
			line-height: 1.5;
			margin-bottom: 20px;
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
	      <li class="active"><a href="Home.php">Home</a></li>
	      <li><a href="Games.php">Games</a>
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
	<section class="carousel">
	  <div class="slide">
	    <img src="gtavslider.jpg">
	    <img src="asscreedodyslider.jpg">
	  </div>
	  <div class="slide">
	    <img src="codboslider.jpg">
	    <img src="witcherslider.jpg">
	  </div>
	  <div class="slide">
	    <img src="sims4slider.jpg">
	    <img src="diablo3slider.jpg">
	  </div>
	  <div class="navbtn">
	    <button class="prev">&#10094;</button>
	    <button class="next">&#10095;</button>
	  </div>
	</div>
	</section>


	<script src="slider.js"></script>
	</section>
	<section>
		<h2>Best Games By The Gaming Insider</h2>

		<div class="game-card">
			<img src="gtav.jpg" alt="Game">
			<h3>Grand Theft Auto V</h3>
			<p>Genre: Action</p>
			<p>Publisher: Rockstar Games</p>
			<p>Release Year: 2014</p>
		</div>

		<div class="game-card">
			<img src="asscreedody.jpg" alt="Game">
			<h3>Assassin's Creed Odyssey</h3>
			<p>Genre: Action</p>
			<p>Publisher: Ubisoft</p>
			<p>Release Year: 2018</p>
		</div>

		<div class="game-card">
			<img src="fifa21.jpg" alt="Game">
			<h3>FIFA 21</h3>
			<p>Genre: Sports</p>
			<p>Publisher: Electronic Arts</p>
			<p>Release Year: 2020</p>
		</div>

		<div class="game-card">
			<img src="minecraft.jpg" alt="Game">
			<h3>Minecraft</h3>
			<p>Genre: Simulation</p>
			<p>Publisher: Activision</p>
			<p>Release Year: 2011</p>
		</div>

		<div class="game-card">
			<img src="sims4.jpg" alt="Game">
			<h3>The Sims 4</h3>
			<p>Genre: Simulation</p>
			<p>Publisher: Electronic Arts</p>
			<p>Release Year: 2014</p>
		</div>
		
	</section>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>

