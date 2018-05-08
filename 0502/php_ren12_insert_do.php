<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php

   /*
    print('<img src="' . $filePath . '"/>');
}else{
    print("拡張子がgif,png,jpgのいずれかをアップロードしてください");
}
*/
?>

<?php
$db = mysqli_connect('localhost','root','','ren12db') or die(mysqli_connect_error());
mysqli_set_charset($db, 'utf8');

$sql = sprintf("INSERT INTO cd VALUES('%s','%s','%s','%d')",
mysqli_real_escape_string(db, $_POST['diskno']),
mysqli_real_escape_string(db, $_POST['title']),
mysqli_real_escape_string(db, $_POST['artist']),
mysqli_real_escape_string(db, $_POST['price'])
);

mysqli_query($db, $sql) or die(mysqli_error($db));
if($ext == '.gif' || $ext == '.jpg' || $ext == '.png'){
    $filePath = '../ren12/image/' . $file['name'];
    move_uploaded_file($file['tmp_name'],$filePath);
}

?>
<p>CDを登録しました</p>
<a href="php_ren12_select.php">一覧に戻る</a>
</body>
</html>