<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost, DB계정아이디, DB계정비밀번호, DB이름
	$db = new mysqli("localhost:3307","root","tksgkcjstk","post_board"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>