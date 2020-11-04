<?php include  "./bbs/db.php"; ?>

<!DOCTYPE html>
<html lang="ko">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> 주흥환경 </title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css?after" rel="stylesheet">
 
</head>

<body>
  <!-- Navigation(공통) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="img/logo.png" width=250px></a>
      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="greet.html" aria-haspopup="true">
              회사소개 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="business1.html" aria-haspopup="true" aria-expanded="false">
              기술 및 사업</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="work1.html" 
              aria-haspopup="true" aria-expanded="false">
              사업실적</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html"  aria-haspopup="true" aria-expanded="false">
              고객센터</a>
          </li>
        </ul>
      </div>
      <div class="nav-sub">
        <ul class="nav-sub-list  container">
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="greet.html">인사말</a></li>
              <li><a class="nav-sub-text" href="history.html">회사연혁</a></li>
              <li><a class="nav-sub-text" href="certi.html">인증현황</a></li>
              <li><a class="nav-sub-text" href="location.html">찾아오시는 길</a></li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
            </ul>
          </li>
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="business1.html">폐수처리설비</a></li>
              <li><a class="nav-sub-text" href="business2.html">부상분리기술</a></li>
              <li><a class="nav-sub-text" href="business6.html">오존산화기술</a></li>
              <li><a class="nav-sub-text" href="business5.html">위탁운영관리</a></li>
              <li><a class="nav-sub-text" href="business3.html">측정대행</a></li>
              <li><a class="nav-sub-text" href="business4.html">환경컨설팅 및 인허가</a></li>
            </ul>
          </li>
          <li class="nav-sub0">
            <ul>
              <li><a class="nav-sub-text" href="work1.html">수처리공사</a></li>
              <li><a class="nav-sub-text" href="work2.html">시운전</a></li>
              <li><a class="nav-sub-text" href="work3.html">기술개발</a></li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
            </ul>
          </li>
          <li class="nav-sub0 last">
            <ul>
              <li><a class="nav-sub-text" href="contact.html">상담문의</a></li>
              <li><a class="nav-sub-text" href="tech-data.php">기술자료</a></li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
              <li><a class="nav-sub-text" href=""></a>&nbsp;</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="top-util">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Wrap -->
  <div class="wrap">
    <!-- top img -->
    <div class="top-area mb-4" style="background-image: url(img/scott-graham-OQMZwNd3ThU-unsplash.jpg);">
      <div class="top-area-cover"></div>
      <div class="top-text">
        <h1>Customer Center</h1>
        <p>쾌적하고 맑은 환경을 위하여, 주흥환경이 앞장서겠습니다.</p>
      </div>
    </div>
  
    <div class="row main-content">
      <!-- Sidebar Column -->
      <div class="col-lg-2 mb-4">
        <a href="contact.html" class="side-menu text-center">고객센터</a>
        <div class="list-group">
          <a href="tech-data.php" class="list-group-item">상담문의</a>
          <a href="tech-data.php" class="list-group-item"><strong>기술자료</strong></a>
        </div>
      </div>
      <!-- Page Content -->
      <div class="container col">
  
        <!-- Page Heading/Breadcrumbs -->
        <div class="title-bar">
          <div class="title-bar-h1"><h1>기술자료</h1></div>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="./contact.html">고객센터</a></li>
            <li class="breadcrumb-item"><a href="./tech-data.php">기술자료</a></li>
          </ol>
        </div>

      <div id="board_area">
        <table class="list-table">
          <thead>
          <tr>
            <th width="70">번호</th>
            <th width="500">제목</th>
            <th width="120">글쓴이</th>
            <th width="100">작성일</th>
            <th width="100">조회수</th>
            <th width="70" class="nn">첨부파일</th>
          </tr>
          </thead>
        <?php
         if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
              $page = 1;
            }
              $sql = mq("select * from board");
              $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
              $list = 5; //한 페이지에 보여줄 개수
              $block_ct = 5; //블록당 보여줄 페이지 개수

              $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
              $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
              $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

              $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
              if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
              $total_block = ceil($total_page/$block_ct); //블럭 총 개수
              $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

              $sql2 = mq("select * from board order by idx desc limit $start_num, $list");  
              while($board = $sql2->fetch_array()){
              $title=$board["title"]; 
                if(strlen($title)>30)
                { 
                  $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                }
                //$sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                //$rep_count = mysqli_num_rows($sql3);
              ?>
        <tbody>
          <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500"><?php 
             $lockimg = "<img src='./img/lock.png' alt='lock' title='lock' with='20' height='20' />";
             $fileimg = "<img src='./img/file.png' title =".$board['file']." alt='file' with='20' height='20' />";
            if($board['lock_post']=="1")
            { ?>
              <a href='./bbs/ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
            }else{  ?>
            <a href='./bbs/read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; }?><span class="re_ct"></span></a></td>
          <td width="120"><?php echo $board['name']?></td>
          
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
          <td width="70" class="nn"> <a href="./upload/<?php echo $board['file']; ?>" type="text/html" download>  <?php if($board['file']!="") echo $fileimg ?></a></td>
        </tr>
        </tbody>
        <?php } ?>
        </table>
    
        <!---페이징 넘버 --->
        <div id="" >
          <ul class="flex-box">
          <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'><<</li>"; //처음이라는 글자에 빨간색 표시 
          }else{
            echo "<li><a href='?page=1'><<</a></li>"; //아니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<li><a href='?page=$pre'><</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<li><a href='?page=$next'>></a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'>>></li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'>>></a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
          ?>
          </ul>
        </div>
        <div id="write_btn">
          <a href="./bbs/ck_write.php"><button class="btn btn-info"> 글쓰기 </button></a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <script src="js/nav.js"></script>

</body>

</html>
