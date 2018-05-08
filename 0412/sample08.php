<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title></title>

</head>
<body>
<form action="" method="get">
<dl>
<dt>日にち</dt>
<dd>
<select name="month" id="month">
<?php

for($month=1; $month<=12; $month++){
    print('<option value="' . $month . '">' . $month . '月</option>');
}
?>
</select>

<select name="day" id="day">
<?php
for($day=1; $day<=date('t'); $day++){
    print('<option value="' . $day . '">' . $day . '日</option>');
}
?>
</select>
</dd>
</dl>

<input type="submit" value="送信する">
</form>
</body>
</html>