<?php
include "./db.php"; /* db load */
?>

<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css?after" />
<script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../vendor/jquery/jquery-ui.min.js"></script>


<script type="text/javascript">
	$(function(){
		$("#writepass").dialog({
		 	modal:true,
		 	title:'글쓰기를 위해 관리자 비밀번호를 입력하세요.',
		 	width:400,
	 	});
	});
</script>
<?php

//$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
$sql = mq("select * from password"); /* 받아온 idx값을 선택 */
$password = $sql->fetch_array();
$bpw = password_hash($password['admin'], PASSWORD_DEFAULT);

?>
<div id='writepass'>
	<form action="" method="post">
 		<p>비밀번호: <input type="password" name="pw_chk" /> <input type="submit" value="확인" /></p>
		<p><a href="../tech-data.php">돌아가기</a></p>
	 </form>
</div>
	 <?php
	 	if(isset($_POST['pw_chk'])) //만약 pw_chk POST값이 있다면
	 	{
	 		$pwk = $_POST['pw_chk']; // $pwk변수에 POST값으로 받은 pw_chk를 넣습니다.
			if(password_verify($pwk, $bpw)) //다시 if문으로 DB의 pw와 입력하여 받아온 bpw와 값이 같은지 비교를 하고
			{
			?>
				<script type="text/javascript">location.replace("./write.php");</script>
			<?php 
			}else{ ?>
				<script type="text/javascript">alert('비밀번호가 틀립니다');location.replace("./index.php");</script><!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->
			<?php } } ?>