<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './Exception.php';
require './PHPMailer.php';
require './SMTP.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();


if(empty($_POST['name'])      ||
   empty($_POST['title'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$title = $_POST['title'];
$name =$_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

try {
    $mail->CharSet = "utf-8";   //한글이 안깨지게 CharSet 설정
    $mail->Encoding = "base64";
    $mail->Host = "smtp.daum.net";// email 보낼때 사용할 서버를 지정
    $mail->SMTPAuth = true; // SMTP 인증을 사용함
    $mail->Port = 465; // email 보낼때 사용할 포트를 지정
    $mail->SMTPSecure = "ssl"; // SSL을 사용함
    $mail->Username =  "juheong-1@hanmail.net";
    $mail->Password = 'ab640210'; // 패스워드
    $mail->SetFrom('juheong-1@hanmail.net', '주흥환경 홈페이지'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
    $mail->AddAddress('juheong-1@hanmail.net');  // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
    $mail->Subject = "홈페이지에 새로운 문의사항이 등록되었습니다. 제목:$title, 작성자: $name"; // 메일 제목
    $mail->Body =
    "주흥환경 홈페이지에 새로운 문의사항이 등록되었습니다.\n\n\n\n제목: $title\n\n작성자: $name\n\n작성자 이메일: $email\n\n\n\n내용:\n$message 
    \n\n주흥환경 웹사이트: http://www.jh-entech.co.kr"; // 내용

    $mail->Send(); // 발송
    
    echo "Message Sent OK
    \n";
   }
    catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }

?>