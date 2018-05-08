<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
ご予約日:</br>
<?php
foreach ($_REQUEST["reserve"] as $reserve){
    print(htmlspecialchars($reserve . ENT_QUOTES). "<br>");
}
?>
</body>
</html>