<?php
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $pnum = $_POST['pnum'];
 $mail = $_POST['mail'];
 $mess = $_POST['mess'];

 $conn = new mysqli('localhost','root','','made4you');
 if($conn->connect_error){
     die('connection failed : '.$conn->connect_error);
 }else{
     $stmt = $conn->prepare("insert into contactus(fname, lname, pnum, mail, mess) 
     values(?,?,?,?,?)");
     $stmt->bind_param("ssiss" ,$fname, $lname, $pnum, $mail, $mess );
     $stmt->execute();
     echo "contacting was successfull...";
     $stmt->close();
     $conn->close();
 }
?>