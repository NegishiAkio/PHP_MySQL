<?php
require('dbconnect.php');


$sql = sprintf("INSERT INTO search VALUES('', '%s','%s','%s','%s')",

    mysqli_real_escape_string($db, $_POST['name']),
    mysqli_real_escape_string($db, $_POST['address']),
    mysqli_real_escape_string($db, $_POST['human']),
    mysqli_real_escape_string($db, $_POST['skill'])
    );
mysqli_query($db, $sql) or die(mysqli_error($db));
?>