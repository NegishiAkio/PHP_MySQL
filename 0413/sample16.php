<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table>
<?php
for($i=1; $i<=10; $i++){
    if(!($i % 2)){
        print('<tr style="background-color:#bce0f2">');
    }else{
        print("<tr>");
    }
    print("<td>".$i."</td>");
    print("<td>".$i."行目の情報です</td>");
    print("</tr>");
}
?>
</table>
</body>
</html>