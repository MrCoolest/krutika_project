<?php
require_once "./config.php";

$submit = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];
     $subject = $_POST['appoinment'];
     $msg = $_POST['msg'];

     $sql = "INSERT INTO `artisian`.`contact_us` (`name`, `email`, `number`, `appoiment`,`message`, `date_time`) VALUES ('$name', '$email', '$number','$subject','$msg', current_timestamp());";

     if($conn -> query($sql)){
          $submit = "Submit Successfull!";
        }
        else{
          $submit = "Error : $sql <br> $con->error";
        }
     
        require_once('smtp/PHPMailerAutoload.php');
        $html="name : $name \nEmail : $email\nnumber : $number\nappoinment : $subject\n Message : $msg";
        function smtp_mailer($to,$subject, $msg){
             $mail = new PHPMailer(); 
             $mail->SMTPDebug  = 3;
             $mail->IsSMTP(); 
             $mail->SMTPAuth = true; 
             $mail->SMTPSecure = 'tls'; 
             $mail->Host = "smtp.gmail.com";
             $mail->Port = 587; 
             $mail->IsHTML(true);
             $mail->CharSet = 'UTF-8';
             $mail->Username = "ankitpatwa3333333@gmail.com";
             $mail->Password = "josnqgkjjtkndrfg";
             $mail->SetFrom("ankitpatwa3333333@gmail.com");
             $mail->Subject = $subject;
             $mail->Body =$msg;
             $mail->AddAddress($to);
             $mail->SMTPOptions=array('ssl'=>array(
                  'verify_peer'=>false,
                  'verify_peer_name'=>false,
                  'allow_self_signed'=>false
             ));
             if(!$mail->Send()){
                  echo $mail->ErrorInfo;
             }else{
                  return 'Sent';
             }
        }
        echo smtp_mailer('ankitpatwa2141@gmail.com','subject',$html);

      

     
}
// Close the database conection     
$conn->close(); 
header("location:./index.html");
exit;

?>