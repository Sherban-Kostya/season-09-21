<?php

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
    echo '< /table>';

$files = glob('*.txt');
foreach ($files as $v) {
    echo '<a href=">' . $v . '</a><br />';

}
