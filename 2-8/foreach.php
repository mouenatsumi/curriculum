<?php
$fruits = [
    'apple' => 'と言ったらりんご',
    'orange' => 'と言ったらみかん',
    'peach' => 'と言ったらもも'
  ];
  
  foreach ($fruits as $fruit => $value) {
    print($fruit . "：" . $value . "\n");
  }
?>
