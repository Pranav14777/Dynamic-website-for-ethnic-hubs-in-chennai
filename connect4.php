<?php
  error_reporting(E_ALL);
    ini_set('display_errors', 1);

  $name=$_POST['name'];
  $email=$_POST['email'];
  // $date=$_POST['date'];
  // $time=$_POST['time'];
  // $no=$_POST['no'];
  

  $conn= new mysqli('localhost','root','','first');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

  }else{
    $stmt = $conn->prepare("insert into second (name,email) values(?,?)");
    $stmt->bind_param('ss',$name,$email);
    $stmt->execute();
    echo "registered Suucessfully...";
    $stmt->close();
    $conn->close();
  }

?>