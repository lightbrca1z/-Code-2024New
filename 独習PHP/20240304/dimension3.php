<?php
$data2 = [
    [
        'name' => '山田太郎',
        'age' => 35,
        'sex' => '男',
    ],
    [
        'name' => '鈴木二郎',
        'age' => 30,
        'sex' => '男',
    ],
    [
        'name' => '佐藤花子',
        'age' => 25,
        'sex' => '女',
    ],
];

foreach ($data2 as $outer) {
    foreach ($outer as $key => $value) {
        echo "$key: $value, ";
    }
    echo "<br>";
}

?>