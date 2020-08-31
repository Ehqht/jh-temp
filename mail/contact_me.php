<?php
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

//$title = strip_tags(htmlspecialchars($_POST['title']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'livia3609@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "새로운 문의사항이 있습니다. 제목:$phone 작성자: $name";
$email_body = "주흥환경 홈페이지에 새로운 문의사항이 등록되었습니다.\n\n"."세부사항은 다음과 같습니다.\n\n제목: $phone\n\n작성자: $name\n\n작성자 이메일: $email_address\n\n\n\n내용:\n$message



주흥환경 웹사이트: http://www.jh-entech.co.kr";


$headers = "From: livia3609@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>