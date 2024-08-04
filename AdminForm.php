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

		.wrapper {
		  display: flex;
		  flex-direction: column;
		  height: 100vh;
		}

		.top {
		  background-color: #f2f2f2;
		  padding: 20px;
		  text-align: center;
		}

		.bottom {
		  display: flex;
		  flex: 1;
		}

		.left {
		  flex: 1;
		  padding: 20px;
		  background-color: #ddd;
		}

		.right {
		  flex: 1;
		  padding: 20px;
		  background-color: #ddd;
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

		table {
		  border-collapse: collapse;
		  width: 100%;
		  max-width: 800px;
		  margin: 0 auto;
		  font-size: 16px;
		}

		thead {
		  background-color: #ddd;
		  font-weight: bold;
		}

		th, td {
		  padding: 10px;
		  text-align: left;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {
		  background-color: #f5f5f5;
		}

	</style>
	<script>
	  function showForm() {
	    var selectBox = document.getElementById("select-option");
	    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
	    var forms = document.getElementsByTagName("form");

	    for (var i = 0; i < forms.length; i++) {
	      forms[i].style.display = "none";
	    }

	    if (selectedValue != "") {
	      document.getElementById(selectedValue).style.display = "block";
	    }
	  }

	  function showTable() {
	    var selectBox = document.getElementById("select-table");
	    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
	    var tables = document.getElementsByTagName("table");

	    for (var i = 0; i < tables.length; i++) {
	      tables[i].style.display = "none";
	    }

	    if (selectedValue != "") {
	      document.getElementById(selectedValue).style.display = "table";
	    }
	  }

	  // Call showTable() when the second dropdown is changed
	  document.getElementById("select-table").addEventListener("change", showTable);
	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="Home2.php">The Gaming Insider</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="Home2.php">Home</a></li>
	      <li><a href="Games2.php">Games</a>
	      <li><a href="Reviews2.php">Review</a></li>
	      <li><a href="About2.php">About</a>
	      <li><a href="Contact2.php">Contact</a></li>
		  <li class="active"><a href="AdminForm.php">Admin</a></li>
	    </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="AdminLogin.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="wrapper">
	  <div class="top">
	  <h1>The Gaming Insider</h1>
	  </div>
	  <div class="bottom">
		<div class="left">
		  <section>
		    <h2>Submit Information about a Video Game</h2>
		    <br>
		    <select id="select-option" onchange="showForm()">
		      <option value="" selected disabled>Select an option</option>
		      <option value="game">game</option>
		      <option value="game_platform">game_platform</option>
		      <option value="game_publisher">game_publisher</option>
		      <option value="genre">genre</option>
		      <option value="global_sales">global_sales</option>
		      <option value="platform">platform</option>
			  <option value="publisher">publisher</option>
		    </select>
		    <form id="game" style="display: none;" action="GameDB.php" method="post">
			    <h3>Input Game Information</h3>
			    <label for="id">id:</label>
			    <input type="number" id="id" name="id" placeholder="Enter the id" required><br>
			    <label for="genre_id">genre_id:</label>
			    <input type="number" id="genre_id" name="genre_id" placeholder="Enter the genre_id" required><br>
			    <label for="game_name">game_name:</label>
			    <input type="text" id="game_name" name="game_name" placeholder="Enter the game_name" required><br>
			    <label for="image">image:</label>
			    <input type="text" id="image" name="image" placeholder="Enter the image" required><br>
			    <input type="submit" value="Submit Game Information">
			</form>
		    <form id="game_platform" style="display: none;" action="GamePlatformDB.php" method="post">
		      <h3>Input Game Platform</h3>
		      <label for="id">id:</label>
		      <input type="number" id="id" name="id" placeholder="Enter the id" required><br>
		      <label for="game_publisher_id">game_publisher_id:</label>
		      <input type="number" id="game_publisher_id" name="game_publisher_id" placeholder="Enter the game_publisher_id" required><br>
		      <label for="platform_id">platform_id:</label>
		      <input type="number" id="platform_id" name="platform_id" placeholder="Enter the platform_id" required><br>
		      <label for="release_year">release_year:</label>
		      <input type="number" id="release_year" name="release_year" placeholder="Enter the release_year" required><br>
		      <input type="submit" value="Submit Game Platform">
		    </form>
		    <form id="game_publisher" style="display: none; " action="GamePublisherDB.php" method="post">
		      <h3>Input Game Publisher</h3>
		      <label for="id">id:</label>
		      <input type="number" id="id" name="id" placeholder="Enter the id" required><br>
		      <label for="game_id">game_id:</label>
		      <input type="number" id="game_id" name="game_id" placeholder="Enter the game_id" required><br>
		      <label for="publisher_id">publisher_id:</label>
		      <input type="number" id="publisher_id" name="publisher_id" placeholder="Enter the publisher_id" required><br>
			  <input type="submit" value="Submit Game Publisher">
		    </form>
			<form id="genre" style="display: none;" action="GenreDB.php" method="post">
		      <h3>Input Game Genre</h3>
		      <label for="id">id:</label>
		      <input type="number" id="id" name="id" placeholder="Enter The id" required><br>
		      <label for="genre_name">genre_name:</label>
		      <input type="text" id="genre_name" name="genre_name" placeholder="Enter The genre_name" required><br>
		      <input type="submit" value="Submit Genre">
		    </form>
			<form id="global_sales" style="display: none;" action="GlobalSalesDB.php" method="post">
		      <h3>Input Game Global Sales</h3>
		      <label for="id">game_id</label>
		      <input type="number" id="game_id" name="game_id" placeholder="Enter The game_id" required><br>
		      <label for="num_sales">num_sales:</label>
		      <input type="number" id="num_sales" name="num_sales" placeholder="num_sales" required><br>
		      <input type="submit" value="Submit Global Sales">
		    </form>
			<form id="platform" style="display: none;" action="PlatformDB.php" method="post">
		      <h3>Input Game Platform</h3>
		      <label for="id">id</label>
		      <input type="number" id="id" name="id" placeholder="Enter The id" required><br>
		      <label for="platform_name">platform_name:</label>
		      <input type="text" id="platform_name" name="platform_name" placeholder="Enter the platform_name" required><br>
		      <input type="submit" value="Submit The Platform">
		    </form>
			<form id="publisher" style="display: none;" action="PublisherDB.php" method="post">
		      <h3>Input Game Publisher</h3>
		      <label for="id">id</label>
		      <input type="number" id="id" name="id" placeholder="Enter The id" required><br>
		      <label for="publisher_name">publisher_name:</label>
		      <input type="text" id="publisher_name" name="publisher_name" placeholder="Enter the publisher_name" required><br>
		      <input type="submit" value="Submit The Publisher">
		    </form>
		  </section>
		  <script src="AdminFormLeft.js"></script>
		</div>
		<div class="right">
		<section>
		<h2>The Table From The Database</h2>
		<br>
		<select id="select-table" onchange="showTable()">
		      <option value="" selected disabled>Select an option</option>
		      <option value="game-table">game</option>
		      <option value="game_platform-table">game_platform</option>
		      <option value="game_publisher-table">game_publisher</option>
		      <option value="genre-table">genre</option>
		      <option value="global_sales-table">global_sales</option>
		      <option value="platform-table">platform</option>
			  <option value="publisher-table">publisher</option>
		    </select>
		<br>
		<table id="game-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Genre ID</th>
		      <th>Game Name</th>
		      <th>Image</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel game
		      $result = mysqli_query($conn, "SELECT * FROM game");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['genre_id'] . "</td>";
		        echo "<td>" . $row['game_name'] . "</td>";
		        echo "<td>" . $row['image'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="game_platform-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Publisher ID</th>
		      <th>Platform ID</th>
		      <th>Release Year</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel game
		      $result = mysqli_query($conn, "SELECT * FROM game_platform");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['game_publisher_id'] . "</td>";
		        echo "<td>" . $row['platform_id'] . "</td>";
		        echo "<td>" . $row['release_year'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="game_publisher-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Game ID</th>
		      <th>Publisher ID</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel game
		      $result = mysqli_query($conn, "SELECT * FROM game_publisher");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['game_id'] . "</td>";
		        echo "<td>" . $row['publisher_id'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="genre-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Genre Name</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel genre
		      $result = mysqli_query($conn, "SELECT * FROM genre");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['genre_name'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="global_sales-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>Game ID</th>
		      <th>Num Sales</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel game
		      $result = mysqli_query($conn, "SELECT * FROM global_sales");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['game_id'] . "</td>";
		        echo "<td>" . $row['num_sales'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="platform-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Platform Name</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel platform
		      $result = mysqli_query($conn, "SELECT * FROM platform");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['platform_name'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		<table id="publisher-table" style="display: none;">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Publisher Name</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		      // Koneksi ke database
		      $conn = mysqli_connect("localhost", "root", "", "games");
		      if (!$conn) {
		        die("Koneksi gagal: " . mysqli_connect_error());
		      }
		  
		      // Query untuk mendapatkan data dari tabel publisher
		      $result = mysqli_query($conn, "SELECT * FROM publisher");
		  
		      // Loop melalui setiap baris data dan tampilkan di dalam tabel
		      while($row = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['publisher_name'] . "</td>";
		        echo "</tr>";
		      }
		  
		      // Tutup koneksi ke database
		      mysqli_close($conn);
		    ?>
		  </tbody>
		</table>
		</section>
		</div>
	  </div>
	</div>
	<footer>
	<p>&copy; 2023 The Gaming Insider</p>
	</footer>
</body>
</html>