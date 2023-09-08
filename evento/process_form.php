<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    
    $to = "darruizhomeoffice@gmail.com";
    $headers = "From: $email";
    $message = "Nome: $name\nEmail: $email\nAssunto: $subject\nMensagem:\n$message";

    
    mail($to, "Contato do site", $message, $headers);

  
    header("Location: /valorreal/contact.php");
} else {
   
    header("Location: contact.php");
}
?>
