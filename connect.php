<?php
$email =$_POST['email'];
$psw =  $_POST['psw'];
//Db Connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into login(email,psw) 
    values(?,?)");
    $stmt->bind_param("ss",$email,$psw);
    $stmt->execute();
    echo "LoginSuccessful";
    $stmt->close();
    $conn->close();
}



?>