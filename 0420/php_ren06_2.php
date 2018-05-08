<?php
session_start();
print("<p>↓はセッション変数によって、渡されたユーザ名</p>");
print(htmlspecialchars($_SESSION['name']));
print("<p>↓はPOSTによって、渡されたユーザ名</p>");
print(htmlspecialchars($_POST['user_name']));

?>