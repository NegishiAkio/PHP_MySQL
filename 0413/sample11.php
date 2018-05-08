<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
if(empty($_REQUEST['my_name'])){
    print("名前を記入してください");
}else{
    print("正しく入力されています");
}

?>
</body>
</html>