<?php
ini_set('error_reporting', E_ALL);
use \Longman\TelegramBot\Request;
use \Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Exception\TelegramException;

// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '354937959:AAGorUCSKKU0uQNeLEkDUkkQROnlZ_yM6hs';
$BOT_NAME = 'bookingvilla_bot';
try {
    // Create Telegram API object
    $telegram = new Telegram($API_KEY, $BOT_NAME);
    $res = file_get_contents("php://input");
    $resArr = json_decode($res,true);
    var_dump($telegram);
    echo '<br>';
var_dump($resArr);
//    $chat_id = $resArr['result'][0]['message']['chat']['id'];
//    echo $chat_id;
//    Request::sendMessage(['chat_id' => $chat_id, 'text' => 'Your utf8 text ًںکœ ...']);

} catch (TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e;
}