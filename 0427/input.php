<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- ページタイトル -->
	<title>input.php</title>
</head>
<body>
<div id="wrap">
<div id="head">
<h1>商品登録</h1>
</div>

<div id="content">
	<!-- この下にP200のHTMLを入力してください -->
<p>登録する商品の情報を記入してください</p>

<form action="input_do.php" method="post" id="frmInput" name="frmInput">
<dl>
<dt>
	<label for="maker_id">メーカーID</label>
</dt>
<dd>
	<input type="text" name="maker_id" id="maker_id" size="10" maxlength="10" />
</dd>
<dt>
	<label for="item_name">商品名</label>
</dt>
<dd>
	<input type="text" name="item_name" id="item_name" size="35" maxlength="255" />
</dd>
<dt>
	<label for="price">価格</label>
</dt>
<dd>
	<input type="text" name="price" id="price" size="50" maxlength="255" />
</dd>
<dt><label for="keyword">キーワード</label></dt>
<dd><input type="text" name="keyword" id="keyword" size="50" maxlength="255"  ></dd>
</dl>

<input type="submit" value="送信" />


</form>

</div>
</div>
</body>
</html>
