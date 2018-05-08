<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
$name = htmlspecialchars($_GET['my_name'],ENT_QUOTES);
print($name . "さん");
print("<p>こんにちは</p>");
?>
</body>
</html>