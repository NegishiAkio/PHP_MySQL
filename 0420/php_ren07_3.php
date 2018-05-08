<?php
session_start();
print("登録完了しました");
print('<p>名前:' . htmlspecialchars($_SESSION['myname']) . '</p>');
print('<p>性別:' . htmlspecialchars($_SESSION['human']) . '</p>');

?>