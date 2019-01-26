<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$site = $_POST['site'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);
$site = htmlspecialchars($site);
$fio = urldecode($fio);
$email = urldecode($email);
$comment = urldecode($comment);
$site = urldecode($site);
$fio = trim($fio);
$email = trim($email);
$comment = trim($comment);
$site = trim($site);
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers = 'From: IT Department <true.it.dep@yandex.ru>' . "\r\n";
$mess = "Имя: ".$fio."\nE-mail: ".$email."\nСайт: ".$site."\n\nСообщение:\n".$comment;
/*$mess1 = "<html>
<head>
</head>
<body>
  <span>Имя: ".$fio."</span><br>
  <span>E-mail: ".$email."</span><br>
  <span>Сайт: ".$site."</span><br><br>
  <span>Сообщение:<br>".$comment."</span>
  <p>ghjdthrf</p>
</body>
</html>
";*/
//webriz.ru/25-prosteyshaya-forma-otpravki-dannyh-na-pochtu-pri-pomoschi-html-i-php.html

ini_set('display_errors','On');
error_reporting('E_ALL');
if ($site == '')
    $site = 'не указан';
if (mail("true.it.dep@yandex.ru",
    "Отзыв с сайта",
    $mess,
    $headers)) {
    echo "Сообщение успешно отправлено";
} else {
  echo "При отправке сообщения возникли ошибки";
     //header('location', 'index.html');
}
?>