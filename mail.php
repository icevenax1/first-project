<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
//$subject = $_POST['subject'];

require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 0;

$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';         //Specify main and backup SMTP servers
$mail->SMTPAuth = true;                 // Enable SMTP authentication
$mail->Username = 'yanchik1996.66@gmail.com';                   // Нашь Логин
$mail->Password = '3050496qwer';                   // Наш пароль
$mail->SMTPSecure = 'ssl';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port = 465;                      // TCP port to connect to

$mail->setFrom('yanchik1996.66@gmail.com', 'Ян Нагорский');    // От кого письмо
$mail->addAddress('yanchik1996.66@mail.ru');     // Add a recipient
$mail->isHTML(true);       // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта';
$mail->Body   = ' 
Пользователь хочет: Консультацию <br>
Имя: ' . $name . '<br> 
Телефон: ' . $phone . '';
$mail->AltBody = 'Это альтернативный текст';

if (!$mail->send()) {
    return false;
} else {
return true;
}
?>
