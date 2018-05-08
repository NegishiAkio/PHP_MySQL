<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>画面に現在の時刻を表示する</title>

  </head>
  <body>

<?php

print('現在の時刻は' . date('G時 i分 s秒') . 'です');
print("<br>");
print('今日は' . date('Y年 n月 j日'));

?>
</body>
</html>