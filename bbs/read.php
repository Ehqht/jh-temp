<?php include  "./db.php"; ?>

<!DOCTYPE html>
<html lang="ko">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> 주흥환경 </title>


  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css?after" rel="stylesheet">
 
</head>

<body>
  <!-- Navigation(공통) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="../index.html"><img src="../img/logo.png" width=250px></a>
      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../greet.html" aria-haspopup="true">
              회사소개 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../business1.html" aria-haspopup="true" aria-expanded="false">
              기술 및 사업</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../work1.html" 
              aria-haspopup="true" aria-expanded="false">
              사업실적</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.html"  aria-haspopup="true" aria-expanded="false">
              고객센터</a>
          </li>
        </ul>
      </div>
      <div class="nav-sub">
        <ul class="nav-sub-list  container">
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="../greet.html">인사말</a></li>
              <li><a class="nav-sub-text" href="../history.html">회사연혁</a></li>
              <li><a class="nav-sub-text" href="../certi.html">인증현황</a></li>
              <li><a class="nav-sub-text" href="../location.html">찾아오시는 길</a></li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
            </ul>
          </li>
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="../business1.html">폐수처리설비</a></li>
              <li><a class="nav-sub-text" href="../business2.html">부상분리기술</a></li>
              <li><a class="nav-sub-text" href="../business6.html">오존산화기술</a></li>
              <li><a class="nav-sub-text" href="../business5.html">위탁운영관리</a></li>
              <li><a class="nav-sub-text" href="../business3.html">측정대행</a></li>
              <li><a class="nav-sub-text" href="../business4.html">환경컨설팅 및 인허가</a></li>
            </ul>
          </li>
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="../work1.html">수처리공사</a></li>
              <li><a class="nav-sub-text" href="../work2.html">시운전</a></li>
              <li><a class="nav-sub-text" href="../work3.html">기술개발</a></li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
            </ul>
          </li>
          <li class="nav-sub0 last">
            <ul>
              <li><a class="nav-sub-text" href="../contact.html">상담문의</a></li>
              <li><a class="nav-sub-text" href="../tech-data.php">기술자료</a></li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
              <li><a class="nav-sub-text" href="../"></a>&nbsp;</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="top-util">
        <ul>
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../contact.html">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Wrap -->
  <div class="wrap">
    <!-- top img -->
    <div class="top-area mb-4" style="background-image: url(../img/scott-graham-OQMZwNd3ThU-unsplash.jpg);">
      <div class="top-area-cover"></div>
      <div class="top-text">
        <h1>Customer Center</h1>
        <p>쾌적하고 맑은 환경을 위하여, 주흥환경이 앞장서겠습니다.</p>
      </div>
    </div>
  
    <div class="row main-content">
      <!-- Sidebar Column -->
      <div class="col-lg-2 mb-4">
        <a href="../contact.html" class="side-menu text-center">고객센터</a>
        <div class="list-group">
          <a href="../tech-data.php" class="list-group-item">기술자료</a>
        </div>
      </div>
      <!-- Page Content -->
      <div class="container col">
  
        <!-- Page Heading/Breadcrumbs -->
        <div class="title-bar">
          <div class="title-bar-h1"><h1>기술자료</h1></div>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="../contact.html">고객센터</a></li>
            <li class="breadcrumb-item"><a href="../tech-data.php">기술자료</a></li>
          </ol>
        </div>

		<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<div id="board-title-bar" class="flex-box">
		<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			<?php echo $board['name']; ?> &nbsp;&nbsp;<?php echo $board['date']; ?> &nbsp;&nbsp;조회:<?php echo $board['hit']; ?>
		</div>
	</div>
	<div id="board-file">
		파일 : <?php if ($board['file']!="") {?> <a href="./upload/<?php echo $board['file']; ?>" type="text/html" download><?php echo $board['file']; } else echo '없음'?></a>
	</div>
	<div id="bo_content">
		<?php echo nl2br("$board[content]"); ?>
	</div>
	<div id="bo_line"></div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="../tech-data.php">[목록으로]</a></li>
			<li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.wrap -->

  <!-- Footer -->
  <footer class="py-4 bg-dark">
    <div class="container">
      <div class="m-0 text-center text-white">
        <ul>
          <li><span>TEL</span> 031-257-7676 </li>
          <li><span>FAX</span> 031-257-7686 </li>
          <li style="margin-right:0"><span>E-mail</span> juheong-1@hanmail.net </li>
        </ul>
      </div>
      <div class="m-0 text-center">
        <p> 사업자번호: 135-81-29393 상호명 : 주식회사 주흥환경  대표자 : 이길재
          <br>
          주 소 : 경기도 화성시 병점동로 164번길 39, 201호
        </p>
        <p class="m-0 text-center">Copyright &copy; (주)주흥환경 All rights reserved.</p>
      </div>
    </div>
    <!-- /.container -->
  
  </footer>
  
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <script src="../js/nav.js"></script>

</body>

</html>
