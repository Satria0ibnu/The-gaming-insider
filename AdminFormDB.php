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