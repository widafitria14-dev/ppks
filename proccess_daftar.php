<?php
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Nim Required");
}
// Validate user input for name and password
if (empty($_POST["nim"])) {
  die("Email is Required");
}

if (strlen($_POST["password"]) < 8) {
  die("Password must be at least 8 characters");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
  die("Password must match");
}

// Securely hash password using password_hash
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Connect to the database
require __DIR__ . "/config.php"; // Include database configuration

// Check for successful database connection
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prepared statement to prevent SQL injection
$sql = "INSERT INTO user (email,nim, password) VALUES (?, ?, ?)";
if (!$stmt = $mysqli->prepare($sql)) {
  die("SQL error (prepare): " . $mysqli->error);
}

// Bind parameters securely
$stmt->bind_param("ss", $_POST["email"], $password_hash); // Bind with hashed password

// Execute the prepared statement with error handling
if (!$stmt->execute()) {
  $error = $stmt->error;
  if ($error) {
    $error_message = "Registration failed!";
    if (strpos($error, "Duplicate")) { // Check for duplicate username/email
      $error_message = "Nim already exists.";
    }
    echo "<script>window.alert('$error_message');
            window.location='register.html';</script>";
  } else {
    echo "<script>window.alert('Unknown error: ' . $error);
            window.location='register.html';</script>";
  }
} else {
  // Registration successful, redirect or display success message
  echo "<script>window.alert('Registration successful! Please login.');
          window.location='login.php';</script>";
}

// Close the connection (optional, handled by mysqli object destructor)
$stmt->close(); // Close prepared statement (good practice)
//$mysqli->close(); // Close connection (handled automatically)

?>
