
<?php
$data = array("山田太郎","横山花子","田中一郎","山本久美子");
print("<ol>");
$i =0;
while($i < count($data)){
    print('<li>'. $data[$i] . '</li>');
    $i++;
}
print('</ol>');
?>