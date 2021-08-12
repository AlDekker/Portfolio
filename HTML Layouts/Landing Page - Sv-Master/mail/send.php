<?php

// Файлы phpmailer

require 'PHPMailer.php';

require 'SMTP.php';

require 'Exception.php';



// Переменные, которые отправляет пользователь

$method = $_SERVER['REQUEST_METHOD'];



foreach ( $_POST as $key => $value ) {

  if ( $value != "" ) {

    $body .= '<tr><td>'. $key .':</td><td>' . $value . '</td></tr>';

  }

}



// Формирование самого письма

$title = "Заявка с сайта";

$body = '

<!--[if (gte mso 9)|(IE)]>

<table width="600" align="center"><tr><td style="padding-top:0; padding-bottom:0; padding-right:0; padding-left:0; margin:0px;">

<![endif]-->

<table align="center" cellspacing="0" cellpadding="5" border="2" bordercolor="#a8a8a8" style="width: 100%; max-width: 600px;">' . $body . '

</table>

<!--[if (gte mso 9)|(IE)]>

</td></tr></table><![endif]-->

';



// Настройки PHPMailer

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {

  $mail->isSMTP();   

  $mail->CharSet = "UTF-8";

  $mail->SMTPAuth   = true;

  // $mail->SMTPDebug = 2; // Показ ошибок

  $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

  

  // Настройки вашей почты

  $mail->Host       = 'smtp.mail.ru';

  $mail->Username   = 'name'; // Логин на почте

  $mail->Password   = 'PASSWORD'; // сюда ввести пароль от почты

  $mail->SMTPSecure = 'ssl';

  $mail->Port       = 465;

  $mail->setFrom('name', 'Творческая мастерская'); // Адрес самой почты и имя отправителя

  

  // Получатель письма

  $mail->addAddress('name');  

  // $mail->addAddress('АДРЕС_ПОЛУЧАТЕЛЯ'); // Ещё один, если нужен

  

  // Прикрипление файлов к письму

  for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {

    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));

    $filename = $_FILES['userfile']['name'][$ct];

    if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {

      $mail->addAttachment($uploadfile, $filename);

    } else {

      $msg .= 'Failed to move file to ' . $uploadfile;

    }

  }

  // Отправка сообщения

  $mail->isHTML(true);

  $mail->Subject = $title;

  $mail->Body = $body;    

  

  // Проверяем отравленность сообщения

  if ($mail->send()) {$result = "success";} 

  else {$result = "error";}

  

} catch (Exception $e) {

  $result = "error";

  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";

}



// Отображение результата

echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);