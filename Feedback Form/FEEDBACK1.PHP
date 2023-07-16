<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hetvi';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "connectipn successful";
}

$FirstName= $_POST['firstname'];
$LastName = $_POST['lastname'];
$Contact = $_POST['cno'];
$Email = $_POST['email'];
$Message = $_POST['message'];

$sql = "INSERT INTO person(fname, lname,contactno,email,message)
 VALUES ('$FirstName','$LastName','$Contact','$Email','$Message')";

if($conn->query($sql) === true){
    echo "Added";
}else{
    echo "Not Added";
}

?>