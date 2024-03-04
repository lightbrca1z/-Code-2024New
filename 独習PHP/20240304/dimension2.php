<?php
$data2 = [
    [
        ['Sなし','Mなし','Lなし'],
        ['Sりんご','Mりんご','Lりんご'],
        ['S洋ナシ','M洋ナシ','L洋ナシ'],
    ],
    [
        ['Sもも','Mもも','Lもも'],
        ['Sすもも','Mすもも','Lすもも'],
        ['Sプラム','Mプラム','Lプラム'],
    ],
    [
        ['Sみかん','Mみかん','Lみかん'],
        ['S八朔','M八朔','L八朔'],
        ['Sネーブル','Mネーブル','Lネーブル'],
    ],
];

foreach ($data2 as $outer) {
    foreach ($outer as $inner) {
        foreach ($inner as $value) {
            echo $value . ", ";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>