<?php
include 'Telegram.php';

$telegram = new Telegram('6222379578:AAHoybXLC7o2voC4BRmObOiSXbes_JH1cwU');

$text = $_POST['text'];

// Database
include 'database.php';

$users = $db->query("SELECT chat_id FROM users")->fetch_all(1);

foreach ($users as $user){
    $content = array('chat_id' => $user['chat_id'], 'text' => $text,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}
header('location:xabarlar.php?status=success');