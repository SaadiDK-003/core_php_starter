<?php
function env($val)
{
      $file = __DIR__ . '/.env';
      $env = parse_ini_file($file);
      return $env[$val];
}

// Establish connection to MySQL without selecting a database
$db = mysqli_connect(env("HOST"), env("USER"), env("PWD"));

if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS " . env("DB");
if (mysqli_query($db, $sql)) {
      echo "Database created successfully<br>";
      mysqli_close($db);

      // Connect to the newly created database
      $conn = mysqli_connect(env("HOST"), env("USER"), env("PWD"), env("DB"));
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }

      // Create table
      $sql = "CREATE TABLE IF NOT EXISTS `users` (
        `id` INT NOT NULL,
        `username` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `password` TEXT NOT NULL,
        `role` enum('admin','client') NOT NULL DEFAULT 'client',
        `status` enum('0','1') NOT NULL DEFAULT '0'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

      if (mysqli_query($conn, $sql)) {
            echo "Table 'users' created successfully<br>";

            // Add PRIMARY KEY to 'id'
            $alterPrimaryKey = "ALTER TABLE `users` ADD PRIMARY KEY (`id`);";
            if (mysqli_query($conn, $alterPrimaryKey)) {
                  echo "Primary key added to 'id' successfully<br>";
            } else {
                  echo "Error adding primary key: " . mysqli_error($conn) . "<br>";
            }

            // Modify 'id' column to AUTO_INCREMENT
            $alterAutoIncrement = "ALTER TABLE `users` MODIFY `id` INT NOT NULL AUTO_INCREMENT;";
            if (mysqli_query($conn, $alterAutoIncrement)) {
                  echo "'id' column set to AUTO_INCREMENT successfully<br>";
            } else {
                  echo "Error setting AUTO_INCREMENT: " . mysqli_error($conn) . "<br>";
            }
      } else {
            echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }

      // Close the connection
      mysqli_close($conn);
} else {
      echo "Error creating database: " . mysqli_error($db);
}
