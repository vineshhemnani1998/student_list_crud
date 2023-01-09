<?php

echo $stu_id = $_GET['id'];

include 'config.php';
$sql="DELETE FROM student WHERE Sid = {$stu_id}";
$result= mysqli_query($conn,$sql)  or die("Query unsuccessful.");

header("location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
