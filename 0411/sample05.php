<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
print("性別:" . htmlspecialchars($_POST['gender'], ENT_QUOTES))
?>
</body>
</html>