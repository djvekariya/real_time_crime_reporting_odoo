<?php
$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname="crimereport";

$conn=new mysqli($host, $dbusername ,$dbpassword,$dbname);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);

}

if(isset($_POST["submit"])){ 
    $name = $_POST['name'];
    $mobile= $_POST['num'];
    $username= $_POST['username'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];

    $query = "INSERT INTO userdata (name,username,mobile,email,password) VALUES ('$name','$username','$mobile','$email','$password1')";
    $result= $conn->query($query);

    if($result == TRUE){
        echo"
        <script>
        alert('redister Successfully');
        document.location.href = 'report-crime.php';
        </script>
        ";
    }

}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Real-Time Crime Reporting System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container label {
            margin-bottom: 10px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Register for Crime Report</h2>
        <form method="POST">

            
            <label for="username">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="username">Mobile Number:</label>
            <input type="text" id="num" name="num" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>



            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password1" required>

            <button type="submit" name="submit" id="submit" >submit </button>
        </form>
    </div>

</body>
</html>
