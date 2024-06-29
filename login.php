<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
// retrieve form data 
$username = $_POST['username'];
$email = $_POST['username']; 
$password = $_POST['password']; 
// Database Connection 
$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname="crimereport";

$conn=new mysqli($host, $dbusername ,$dbpassword,$dbname);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);

}
$query = "SELECT username,email,password FROM userdata WHERE username='$username' OR email='$email' AND password='$password'";

$result= $conn->query($query);


if($result->num_rows == 1){
    
    $_SESSION["user_id"] = $username; // Store user ID in the session
    header("Location: home_page.php"); // Redirect to the dashboard
    exit();
}
else        
{
    header("Location: login.html");
}
$conn->close();
}
?>