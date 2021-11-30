<?php
//var_dump($_POST, $_FILES) ;
if (array_key_exists('attach' , $_FILES));{
    move_uploaded_file($_FILES['attach']['tmp_name'], $_FILES['attach']['name']);
echo 'Ok';
}
$filename = $_GET['filename'];
$s = file_get_contents($filename);
$a = explode("\n", $s);
$users = [];
foreach ($a as $v) {
    if (strlen($v) > 0) {
        $user = explode(';', $v);
        $users[] = $user;
    }
}
echo '<table border="1">';
foreach ($users as $v) {
    echo '<tr>';
    echo '<td>' . $v[0] . '</td>';
    echo '<td>' . $v[1] . '</td>';
    echo '<td>' . $v[2] . '</td>';
    echo '</tr>';
}
echo '</table>';












//$s = file_get_contents( $_FILES['attach']['name']);
//    echo 'Ok' . $s;
//$attach = $_FILES['attach'];
//move_uploaded_file($attach['tmp_name'], $attach['name']);
//$s = file_get_contents($attach['attach']['name']);
//echo 'OK';