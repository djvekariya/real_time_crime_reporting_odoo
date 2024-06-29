<?php     
session_start();    
if(!isset($_SESSION["user_id"])){    
    header("Location:home_page.php");  
} 
else {   
$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname="crimereport";

$conn=new mysqli($host, $dbusername ,$dbpassword,$dbname);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);

}

if(isset($_POST["submit"])){ 
    $username = $_POST['username'];
    $address= $_POST['crime_address'];
    $crime_type= $_POST['crime_type'];
    $crime_time=$_POST['crime_time'];
    $crime_description= $_POST['crime_description'];
$query = "INSERT INTO reports (userid,crime_type,address,crime_descript) VALUES (1,'$crime_type','$address','$crime_description')";
$result= $conn->query($query);

if($result == TRUE){
    echo"
<script>
alert('Data Added Successfully');
document.location.href = 'report-crime.php';
</script>
";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report a Crime</title>
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
        <h2 style="text-align: center;">Report a Crime</h2>
        <form method="POST">
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="crime_address">Crime Address:</label>
            <input type="text" id="crime_address" name="crime_address" required>
                
                
            <label for="crime_type">Type of Crime:</label>
            <input type="text" id="crime_type" name="crime_type" required>
                
            <label for="crime_time">Crime Time:</label>
                <input type="datetime-local" id="crime_time" name="crime_time" required><br>
                
            <label for="crime_description">Crime Description:</label>
            <textarea id="crime_description" name="crime_description" required></textarea><br>
                
            
            <button type="submit" name="submit" id="submit" clsss="primary" >submit </button>
        </form>
    </div>
    
</body>

</html>

