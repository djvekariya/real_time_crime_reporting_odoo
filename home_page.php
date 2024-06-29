

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Crime Reporting System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpeg') no-repeat center center fixed;
            background-size: cover;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar a:hover {
            background-color: #575757;
            color: white;
        }
        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }
        .dropdown {
            float: right;
            overflow: hidden;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            transition: background-color 0.3s;
        }
        .logout{
            float: right;
            overflow: hidden;
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: -1px -1px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            transition: background-color 0.8s;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
        }
        .dropdown-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            transition: background-color 0.3s;
        }
        .dropdown-content a:hover {
            background-color: #575757;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        .content {
            padding: 20px;
            color: white;
        }
        .navbar .logo {
            float: left;
            font-size: 22px;
            font-weight: bold;
            padding: 14px 20px;
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">Crime Report</a>
        <a href="home.html" target="_blank" class="active">Home</a>
        <a href="report-crime.php" target="_blank">Report a Crime</a>
        <a href="take_data_crime.php" target="_blank">View Reports</a>
        <a href="contact.html" target="_blank">Contact Us</a>
        <?php
            session_start();   
            if(!isset($_SESSION["user_id"])){
            ?>
        <div class="dropdown">
            <button class="dropbtn">Account 
                <i class="fa fa-caret-down"></i>
            </button>
                    <div class="dropdown-content">
                    <a href="login.html" target="_blank">Login</a>
                    <a href="newregister.php" target="_blank">Register</a>
                     </div> 
            <?php  
             }
             else{
             ?>
             <a href="logout.php"><input type="submit" class="logout" name="submit" value="logout"></a>
              </div>
             <?php
             }
             ?>
        </div>
    </div>

    <div class="content" id="home" height="">
        <h1>Welcome to the Real-Time Crime Reporting System</h1>
        <p>Use this platform to report crimes and view reports in real-time.</p>
    </div>

</body>
</html>


