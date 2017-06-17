<?php
ini_set('error_reporting', E_ALL);
use \Longman\TelegramBot\Request;
use \Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Exception\TelegramException;
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '354937959:AAGorUCSKKU0uQNeLEkDUkkQROnlZ_yM6hs';
$BOT_NAME = 'bookingvilla_bot';
$hook_url = 'https://bot-bookingbot.7e14.starter-us-west-2.openshiftapps.com/hook.php';
try {
    // Create Telegram API object
    $telegram = new Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (TelegramException $e) {
    echo $e;
}