<?php

$file = file_get_contents('json_sample.json');
$json = json_decode($file);

echo $json->title;
echo "<br/>";
echo $json->items[0]->title;
echo "<br/>";

foreach ($json->items as $item):
?>
・<a href="<?php echo $item->url;?>"><?php echo $item->title; ?></a><br>
<?php
endforeach
?>