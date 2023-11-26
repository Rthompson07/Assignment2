<?php
require_once 'vendor/autoload.php';
require_once './lib/functions.php';
require_once './lib/db_php.php';

$connection = db_connect();
//$connection = new PDO('postgres-php', 'admin', 'password', 'INFT2100-F2023', '5432');

// Check the connection
if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}

// Initialize Faker
$faker = Faker\Factory::create();

// Generate mock data
$name = $faker->name;
$email = $faker->email;
$password = $faker->password;
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Set parameter values
$first_name = $faker->firstName;
$last_name = $faker->lastName;
$phone_extension = $faker->phoneNumber;
$user_type = 'regular';  // You may adjust this based on your user types

// Insert data into the database using prepared statements
$sql = "INSERT INTO users (email_address, first_name, last_name, phone_extension, user_type) VALUES (?, ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);

// Bind parameters
$stmt->bind_param("sssss", $email, $first_name, $last_name, $phone_extension, $user_type);



// Execute the statement
$result = $stmt->execute();

// Check the result
if ($result) {
echo "Data inserted successfully!";
} else {
echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$connection->close();

// Adding a link to the database population script
echo "<a href='db_population_script.php'>Populate Database</a>";


