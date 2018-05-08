
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<title></title>

</head>
<body>
<?php
for($x=10; $x<=70; $x++){
    print($x);
    print("<br>");
}
?>
<select name="age" id="age">
<?php
for($i=10; $i<=70; $i++){
    print('<option value="' . $i . '">' . $i . '歳</option>');

}
?>
</select>
</body>
</html>