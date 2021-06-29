<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db= "gameUsers";


$conn = mysqli_connect($servername, $username, $password,$db);

if(isset($_POST['email'])){
    $uname = $_POST['email'];
    $ps = $_POST['password'];

    $sql = "select email,password,FirstName from informationtbl where email = '".$uname."' AND password = '".$ps."' Limit 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 1){
        session_start();

        echo "True";
    $_SESSION['user'] = $row['FirstName'];
    }else{
        echo "False";
    }
}
?>