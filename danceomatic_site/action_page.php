<?php

if (isset($_POST['Send'])) 
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailfrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailto = "martin@danceomatic.dk";
    $headers = "From: ". $emailfrom; 
    $txt = "You have recieved an e-mail from ". $name. ". \n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");

}