<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '354937959:AAGorUCSKKU0uQNeLEkDUkkQROnlZ_yM6hs';
$BOT_NAME = 'bookingvilla_bot';
$chat_id = '170150137';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = Request::sendMessage(['chat_id' => $chat_id, 'text' => 'Your utf8 text 😜 ...']);
    if ($result->isOk()) {
        echo 'ok';
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}