
<?php     
session_start();    
if(!isset($_SESSION["user_id"])){    
    header("Location:home_page.php");  
}
    $con = mysqli_connect("localhost", "root", "", "crimereport");
    if(!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<?php
$query = "SELECT * FROM reports"; 
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractive Table</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .table-container {
            max-width: 800px;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
            color: black;
        }
        tr:hover {
            background-color: #ddd;
            color: black;
        }
        .table-header {
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <div class="table-header">
            <h2>Crime Reports</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>crime_type</th>
                    <th>crime_address</th>
                    <th>crime_time</th>
                    <th>crime_description</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                    while($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['userid']; ?></td>
                    <td><?php echo $rows['crime_type']; ?></td>
                    <td><?php echo $rows['address']; ?></td>
                    <td><?php echo $rows['crime_time']; ?></td>
                    <td><?php echo $rows['crime_descript']; ?></td>
                    </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
