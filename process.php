<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "meekhizick@gmail.com";
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ', "From:" . $email);
    
    // header('Location: http://edgeledger.net/success.html');
  }