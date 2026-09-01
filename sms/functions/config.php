<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "sms";

$conn= mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Insert into user (fname,Email,Password)
values ('Sabin', 'sabin@email.com', '12345')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}