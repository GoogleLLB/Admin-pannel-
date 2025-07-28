<?php
// Dummy username & password (real use: database)
$adminUser = "admin";
$adminPass = "12345";

// Get POST data
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $adminUser && $password === $adminPass) {
    header("Location: dashboard.html");
} else {
    echo "<script>alert('Invalid credentials!'); window.location='index.html';</script>";
}
?>
