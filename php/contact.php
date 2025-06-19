<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = htmlspecialchars($_POST["name"] ?? '');
  $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
  $message = htmlspecialchars($_POST["message"] ?? '');

  $to = "contact@example.com";
  $subject = "Nouveau message du site Les Abysses de l'Inconnu";
  $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8\r\n";
  $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

  if(mail($to, $subject, $body)){
    header("Location: ../contact.html?success=1");
  } else {
    header("Location: ../contact.html?error=1");
  }
  exit;
} else {
  header("Location: ../contact.html");
  exit;
}
?>
