<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php

$zip = mb_convert_kana($_REQUEST['zip'],'a','UTF-8');

if(preg_match("/\A\d{3}\-\d{4}\z/",$zip)){
    print("郵便番号:". $zip);

}else{
    print("郵便番号は123-4567の形式で入力してください");
}
?>
</body>
</html>