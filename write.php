<?php
$conn = mysql_connect("localhost", "juheong", "*ab293AB293**AB#$", "bbs");
if($conn){
    echo "DB connected";
}else{
    echo "fail to connect";
}
$sql = "
    INSERT INTO bbs(title, name, email, content, date)
    VALUES('{$_POST['phone']}', '{$_POST['name']}','{$_POST['email']}', '{$_POST['message']}', NOW());
";

$res=mysql_query($conn, $sql);
var_dump($res);
?>

