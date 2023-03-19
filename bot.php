<?php
include 'Telegram.php';

$telegram = new Telegram('6222379578:AAHoybXLC7o2voC4BRmObOiSXbes_JH1cwU');

//https://api.telegram.org/bot6222379578:AAHoybXLC7o2voC4BRmObOiSXbes_JH1cwU/setWebhook?url=https://352b-213-230-72-13.eu.ngrok.io/Najotvaqtlari_bot_2_version/bot.php

// user's info
$result = $telegram->getData();
$text = $result['message'] ['text'];
$chat_id = $result['message'] ['chat']['id'];
$first_name = $result['message']['chat']['first_name'];
$username = $result['message']['chat']['username'];

// Database
$server = "localhost";
$db_user = "user";
$db_password = "password";
$database = "najotvaqtlari";
$db = mysqli_connect($server,$db_user,$db_password,$database);

// start command
if ($text == '/start') {

    $db_insert = $db->query("SELECT chat_id FROM users WHERE chat_id = '$chat_id'")->fetch_assoc();

    if (!$db_insert){
        $db->query("insert into users (name,username,chat_id) values ('$first_name','$username','$chat_id')");
    }

    $reply = "Assalomu alaykum va rohmatullohi va barokatuh!

😊 Botimizga xush kelibsiz!

📃 Yo'riqnoma:

🕌 Polvonko'l jome masjidida belgilangan namoz vaqtlari.

🕔 Namoz vaqtlari har <b>Juma</b> kuni yangilanadi

❗️ Namoz vaqtlarini bilish uchun <b>Namoz vaqtlari</b> tugmasini bosing.
";

    $option = array(array($telegram->buildKeyboardButton("Namoz vaqtlari")));

    $keyb = $telegram->buildKeyBoard($option, $onetime=false,$resize=true);
    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => $reply,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}
// help command
if ($text == '/help') {
    $reply = "📃 Yo'riqnoma:

🕌 Polvonko'l jome masjidida belgilangan namoz vaqtlari.

🕔 Namoz vaqtlari har <b>Juma</b> kuni yangilanadi

❗️ Namoz vaqtlarini bilish uchun <b>Namoz vaqtlari</b> tugmasini bosing.

❓️ Savol va bog'lanish uchun: @dastur_muhandisi_bot
";
    $content = array('chat_id' => $chat_id, 'text' => $reply,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}
// about command
if ($text == '/about') {
    $sql = "SELECT COUNT(*) FROM users";
    $count = $db->query($sql);
    $row = $count->fetch_assoc();
    $num = $row["COUNT(*)"];

    $reply = "🤖 Najot vaqtlari bot
    
📋 Vazifa: Namoz vaqtlarini ko'rsatuvchi bot

🔵 Maqsad: Bot muammoga yechim sifatida yaratildi

Namoz vaqtlari Polvonko'l jome masjidida belgilangan namoz vaqtlari asosida ko'rsatiladi va vaqtlar har Juma kuni yangilab boriladi

📊 Statistika:

👤 Foydalanuvchilar: " . $num . "

📨 Bog'lanish uchun: @dastur_muhandisi_bot
";

    $content = array('chat_id' => $chat_id, 'text' => $reply,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}
// Namoz vaqtlari button
if ($text == 'Namoz vaqtlari') {
    $date = date('Y-m-d');
    $reply = "🕋 Namoz vaqtlari
    
🗓 Sana: " . $date . "

🕔 Bomdod: <b>5-45</b>
🕐 Peshin: <b>1-00</b>
🕓 Asr: <b>4-55</b>
🕧 Shom: <b>6:35</b>
🕗 Xufton: <b>8-15</b>

❗️ Albatta, namoz mo'minlarga vaqtida farz qilingandir.(Niso surasi,103-oyat)";

    $content = array('chat_id' => $chat_id, 'text' => $reply,'parse_mode' => 'HTML');
    $telegram->sendMessage($content);
}

