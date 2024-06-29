<?php
$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname="crimereport";

if(isset($_POST['Submit'])){ 
    // retrieve form data 
    $username = $_POST['username'];
    $address= $_POST['crime_address'];
    $crime_type= $_POST['crime_type'];
    $crime_time=$_POST['crime_time'];
    $crime_description= $_POST[''];
    
    $conn=new mysqli($host, $dbusername ,$dbpassword,$dbname);
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);

    }
    $query1="SELECT id FROM userdata into $id WHERE username='$username'";
    $conn->query($query2);
    $query1= "INSERT INTO REPORTS VALUES ('','$id','$crime_type','$crime_time','$address','$crime_description'";
    $conn->query($query2);
    echo
    "<script>
    alert('Report submit Successfully');
    document.location.href = 'report-crime.html';
    </script>";
}
?>