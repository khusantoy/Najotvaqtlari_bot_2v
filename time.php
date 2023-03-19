<?php
// Database
$server = "localhost";
$db_user = "user";
$db_password = "password";
$database = "najotvaqtlari";
$db = mysqli_connect($server,$db_user,$db_password,$database);

$start = $_POST['start'];
$finish = $_POST['finish'];
$s_oy = explode('-',$start)[1];
$s_kun = explode('-',$start)[2];
$f_oy = explode('-',$finish)[1];
$f_kun = explode('-',$finish)[2];

$vaqt_oraliq = $s_kun .'.'. $s_oy .'-'. $f_kun .'.'. $f_oy;

$bomdod = $_POST['bomdod'];
$peshin = $_POST['peshin'];
$asr = $_POST['asr'];
$shom = $_POST['shom'];
$xufton = $_POST['xufton'];

$sql = "SELECT COUNT(*) FROM vaqtlar";
$count = $db->query($sql);
$row = $count->fetch_assoc();
$num = $row["COUNT(*)"];

if ($num > 0){
    $db->query("UPDATE vaqtlar SET
    vaqt_oraliq = '$vaqt_oraliq',
    bomdod = '$bomdod',
    peshin = '$peshin',
    asr = '$asr',
    shom = '$shom',
    xufton = '$xufton'");
}else{
$db->query("INSERT INTO vaqtlar (vaqt_oraliq,bomdod,peshin,asr,shom,xufton) VALUES ('$vaqt_oraliq','$bomdod','$peshin','$asr','$shom','$xufton')");
}
header('location:vaqtlar.php?status=success');


