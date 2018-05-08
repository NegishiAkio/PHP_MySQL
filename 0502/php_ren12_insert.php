<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="php_ren12_insert_do.php" method="post" enctype="multipart/form-data">
<p>登録する商品の情報を記入してください。</p>
<p>diskno</p>
<input type="text" name="diskno" id="diskno">
<p>タイトル</p>
<input type="text" name="title" id="title">
<p>アーティスト</p>
<input type="text" name="artist" id="artist">
<p>価格</p>
<input type="text" name="price" id="price">
<p>画像</p>
<input type="file" name="image" id="image" /></br></br>

<input type="submit" value="送信する" />
</form>
</body>
</html>