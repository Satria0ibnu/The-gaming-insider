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
		
		/* Style the about section */
		.about {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		
		.about h2 {
			font-size: 24px;
			margin-bottom: 10px;
		}
		
		.about p {
			font-size: 16px;
			line-height: 1.5;
			margin-bottom: 20px;
			text-align: justify;
		}
		
		/* Style the team section */
		.team {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			margin-top: 20px;
		}
		
		.team-member {
			background-color: #f2f2f2;
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 10px;
			margin: 10px;
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 200px;
			text-align: center;
		}
		
		.team-member img {
			border-radius: 50%;
			width: 100px;
			height: 100px;
			object-fit: cover;
			margin-bottom: 10px;
		}
		
		.team-member h3 {
			font-size: 18px;
			margin: 5px 0;
		}
		
		.team-member p {
			font-size: 14px;
			color: #777;
			margin: 5px 0;
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
	      <li class="active"><a href="About.php">About</a>
	      <li><a href="Contact.php">Contact</a></li>
		  <li><a href="AdminLogin.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	
	<section class="about">
	<h2>Welcome to Game Reviews</h2>
		<p>Game Reviews is a team of experienced gamers who are dedicated to sharing their gaming experiences and insights with others. We believe that gaming is more than just a pastime; it's a way of life. Our team is passionate about exploring new games, analyzing their strengths and weaknesses, and sharing our honest opinions with fellow gamers.</p>
		<p>Our goal is to provide unbiased and informative reviews of the latest games. We understand that choosing the right game to play can be overwhelming, especially with the vast selection of games available today. That's why we strive to provide detailed reviews that cover all aspects of the game, including graphics, gameplay, story, sound, and replay value.</p>
		<p>We believe that every game has its own unique strengths and weaknesses, and we aim to highlight them in our reviews. Our team of gamers comes from diverse backgrounds, so we can offer a broad range of perspectives and insights into the gaming industry.</p>
		<p>At Game Reviews, we are committed to providing high-quality content that celebrates the creativity and diversity of the gaming industry. We believe that gaming is a powerful medium that can bring people together, and we want to share that experience with others.</p>
	</section>
	
	<section class="team">
		<div class="team-member">
			<img src="Foto Satria.png" alt="Team Member">
			<h3>Satria Ibnu Pamungkas</h3>
			<p>Member</p>
		</div>
		<div class="team-member">
			<img src="Foto Marcellino.jpg" alt="Team Member">
			<h3>Marcellino T.M.H.</h3>
			<p>Project Leader</p>
		</div>
		<div class="team-member">
			<img src="Foto Leo.jpg" alt="Team Member">
			<h3>Marchelleo Suhandi</h3>
			<p>Member</p>
		</div>
	</section>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>	
