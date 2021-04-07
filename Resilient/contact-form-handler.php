<?php

  if (isset($_POST['submit'])) {  
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    
    $mailto = "asifmashik@gmail.com";   
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n ".$message;
   
    
    mail($mailto, $txt, $headers);
    header("Location: index.html?mailsend");
}

