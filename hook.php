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


    // Handle telegram webhook request
    $telegram->handle();
    $res = file_get_contents("php://input");
    $update = json_decode($res);
    var_dump($update);
} catch (TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e;
}