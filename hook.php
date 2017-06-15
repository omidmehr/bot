<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '354937959:AAGorUCSKKU0uQNeLEkDUkkQROnlZ_yM6hs';
$BOT_NAME = 'bookingvilla_bot';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    $res = file_get_contents("php://input");
    $resArr = json_decode($res);

    $chat_id = $resArr['result'][0]['message']['chat']['id'];
    Request::sendMessage(['chat_id' => $chat_id, 'text' => 'Your utf8 text ًںکœ ...']);

} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e;
}