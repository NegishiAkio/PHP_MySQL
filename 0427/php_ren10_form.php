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
<h1>会員登録</h1>
</div>

<div id="content">
	<!-- この下にP200のHTMLを入力してください -->
<p>登録する商品の情報を記入してください</p>

<form action="php_ren10_do.php" method="post" id="frmInput" name="frmInput">
<dl>
<dt>
	<label for="name">名前</label>
</dt>
<dd>
	<input type="text" name="name" id="name" size="10" maxlength="10" />
</dd>
<dt>
	<label for="address">住所</label>
</dt>
<dd>
	<input type="text" name="address" id="address" size="35" maxlength="255" />
</dd>
<dt>
	<label for="human">性別</label>
</dt>
<dd>
	<input type="text" name="human" id="human" size="50" maxlength="255" />
</dd>
<dt><label for="skill">スキル</label></dt>
<dd><input type="text" name="skill" id="skill" size="50" maxlength="255"  ></dd>
</dl>

<input type="submit" value="送信" />


</form>

</div>
</div>
</body>
</html>