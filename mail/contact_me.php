 <?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

// phone == title
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['phone'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

// 보낼 Email 양식 설정 
//$to = 'juheong-1@hanmail.net'; 
$to = 'juheong-1@hanmail.net'; 
$email_subject = "홈페이지에 새로운 문의사항이 등록되었습니다.. 제목:$phone, 작성자: $name";
$email_subject = "=?UTF-8?B?".base64_encode($email_subject)."?=";
$email_body = "주흥환경 홈페이지에 새로운 문의사항이 등록되었습니다.\n\n"."\n\n제목: $phone\n\n작성자: $name\n\n작성자 이메일: $email\n\n\n\n내용:\n$message \n\n
주흥환경 웹사이트: http://www.jh-entech.co.kr";


$headers = "From: juheong\n";
$headers .= "Reply-To: $email";   
mail($to,$email_subject,$email_body,$headers);

return true;         
?>