<?php
// 데이터 베이스로부터 받은 데이터를 담을 클래스
class Node
{
private $id;
private $title;
public function __construct($idx, $title)
{
$this->idx = $idx;
$this->title = $title;
}
public function getId()
{
return $this->id;
}
public function gettitle()
{
return $this->title;
}
}
// 데이터 베이스 정보
$hostname = "localhost";
$username = "root";
$password = "tksgkcjstk";
$dbname = "bbs";
$rslt = array();

$conn = mysqli_connect($hostname, $username, $password, $dbname);
try{

mysqli_select_db($conn, $dbname);

$rs = mysqli_query($conn,"select * from bbs");

while($rst = mysqli_fetch_assoc($rs)){

array_push($rslt, new Node($rst["id"], $rst["title"]));
}
}
catch ( Exception $e ) {
die ( $e );
} finally {
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>title</title>
</head>
<body>
<?php
// 데이터 베이스로부터 받은 데이터를 출력
foreach($rslt as $value){
echo $value;
echo "<br />";
}
?>
</body>
</html>