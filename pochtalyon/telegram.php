<?php

/* https://api.telegram.org/bot5570675798:AAH_C3yw9kDfETrrQ_2B4fAG1DZeyoKbBfI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$choice = $_POST['user_choice'];
$token = "5570675798:AAH_C3yw9kDfETrrQ_2B4fAG1DZeyoKbBfI";
$chat_id = "-669948577";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email пользователя: ' => $email,
  'Телефон пользователя: ' => $phone,
  'Выбранное предпочтение пользователя: ' => $choice
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.php');
} else {
  echo "Error, text @pavlovdeveloper";
}
?>
