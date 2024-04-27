<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    
    $telegramToken = "6851886376:AAHCSe_Ph1uTi-o-qZYF_Fa6330M3bIV05o";
    $chatId = "YOUR_TELEGRAM_CHAT_ID";
    
    $message = "Новая заявка\n" .
               "Имя: " . $name . "\n" .
               "Телефон: " . $phone;
    
    $url = "https://t.me/PertinerMyBot" . $telegramToken . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message);
    
    $response = file_get_contents($url);
    if ($response) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки.";
    }
}
?>
