<?php 

    use PHPMailer\PHPMailer\PHPMailer;
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    
        $mail = new PHPMailer();
    
        //smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "";// type your email
        $mail->Password = '';//type your password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
    
        //email settings
        $mail->isHTML(true);
    //     $mail->setFrom($email, $name);
    //     $mail->addAddress("$email");
    //     $mail->Subject = ("$subject");
    //     $mail->Body = $body;
    
    //     if($mail->send()){
    //         $status = "success";
    //         $response = "Email is sent!";
    //     }
    //     else
    //     {
    //         $status = "failed";
    //         $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    //     }
    
    //    exit(json_encode(array("status" => $status, "response" => $response)));
    
    // }
