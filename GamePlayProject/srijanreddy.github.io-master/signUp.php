<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db= "gameUsers";


$conn = mysqli_connect($servername, $username, $password,$db);

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $ps = $_POST['password'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];


    $sql = "INSERT INTO informationtbl(FirstName, LastName, Email, Password, TypeUser) VALUES ('".$fname."','".$lname."','".$email."','".$ps."',1)";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "True";
    }else{
        echo "False";
    }
}
?>