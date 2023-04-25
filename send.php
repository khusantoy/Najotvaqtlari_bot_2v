<?php
include 'Telegram.php';

require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$bot_token = $_ENV['BOT_TOKEN'];

$telegram = new Telegram($bot_token);

$text = $_POST['text'];

// Database
include 'database.php';

$users = $db->query("SELECT chat_id FROM users")->fetch_all(1);

foreach ($users as $user){
    $content = array('chat_id' => $user['chat_id'], 'text' => $text,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}
header('location:xabarlar.php?status=success');