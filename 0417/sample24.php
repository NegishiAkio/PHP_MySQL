<?php
$success = file_put_contents('./news_data/news.txt', '<h1>2010-06-01 ホームページをリニューアルしました</h1>');

?>
<?php
if($success){
    print('<p>ファイルへの書き込みが完了しました。</p>');
}else{
        print('<p>書き込みに失敗しました。</p>');
 }

?>