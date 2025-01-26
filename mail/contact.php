<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = denisnovicov1@gmail.com; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: 
$name\n\n\nEmail: 
$email\n\nSubject: 
$m_subject\n\nMessage: 
$message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>


<!-- <?php 
// Проверяем, что все поля заполнены, и email валидный
if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);  // Установим код 400 (Bad Request) вместо 500
    exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = filter_var(strip_tags(htmlspecialchars($_POST['email'])), FILTER_SANITIZE_EMAIL);
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Проверяем, что email валидный
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);  // Неверный email
    exit();
}

$to = "denisnovicov1@gmail.com"; // Change this email to your //
$subject = "$m_subject: $name";
$body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";

// Заголовки для почты
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";  // Установим правильную кодировку

// Отправка письма
if (!mail($to, $subject, $body, $headers)) {
    http_response_code(500);  // Ошибка при отправке
}
// -->
*/ -->

