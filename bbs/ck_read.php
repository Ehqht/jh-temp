<?php
include "./db.php"; /* db load */
?>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>

<script type="text/javascript">
	$(function(){
		$("#writepass").dialog({
		 	modal:true,
		 	title:'관리자만 볼 수 있는 자료입니다.',
			width:400,
			buttons:{
				Close: function(){
					location.replace("../tech-data.php");
			 	}
			}
	 	});
	});
</script>
<?php

$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
$sql = mq("select * from password"); /* 받아온 idx값을 선택 */
$password = $sql->fetch_array();
$bpw = password_hash($password['admin'], PASSWORD_DEFAULT);

?>
<div id='writepass'>
	<form action="" method="post">
		 <p>비밀번호: <input type="password" name="pw_chk" /> <input type="submit" value="확인" /></p>
	 </form>
</div>
	 <?php
	 	if(isset($_POST['pw_chk'])) //만약 pw_chk POST값이 있다면
	 	{
	 		$pwk = $_POST['pw_chk']; // $pwk변수에 POST값으로 받은 pw_chk를 넣습니다.
			if(password_verify($pwk, $bpw)) //다시 if문으로 DB의 pw와 입력하여 받아온 bpw와 값이 같은지 비교를 하고
			{
			?>
				<script type="text/javascript">location.replace("./read.php?idx=<?php echo $bno; ?>");</script><!-- pwk와 bpw값이 같으면 read.php로 보내고 -->
			<?php 
			}else{ ?>
				<script type="text/javascript">alert('비밀번호가 틀립니다');</script><!--- 아니면 비밀번호가 틀리다는 메시지를 보여줍니다 -->
			<?php } } ?>