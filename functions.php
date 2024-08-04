<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "games");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function find($keyfind) {
    $query = "SELECT 
    game.game_name, 
    genre.genre_name,
    publisher.publisher_name, 
	game.image,
    MIN(game_platform.release_year) AS release_year,
	num_sales
	FROM game_platform 
    INNER JOIN game_publisher ON game_platform.game_publisher_id = game_publisher.id 
    INNER JOIN publisher ON game_publisher.publisher_id = publisher.id
    INNER JOIN game ON game_publisher.game_id = game.id
    INNER JOIN genre ON game.genre_id = genre.id
    INNER JOIN platform ON game_platform.platform_id = platform.id
	INNER JOIN global_sales ON game.id = global_sales.game_id
	WHERE game.game_name LIKE '%$keyfind%'
		OR genre.genre_name LIKE '$keyfind'
	GROUP BY game.id;";
    return query($query);
}
?>