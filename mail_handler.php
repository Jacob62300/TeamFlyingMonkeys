<?php
if(isset($_POST['submit'])){
    $to = "gowan.automotive@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['selection'];
    $message = $name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
   
   
    mail($to,$subject,$message);

    }
   
  if(empty($name) || empty($email) || empty($message)) {
      header('Location:fail.html'); 
      }
  else{
      header('Location:sent.html');
      }
?>
