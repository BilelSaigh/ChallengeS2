<?php
namespace App\Models;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class Mail {
    protected String $message;
    protected String $address;
    protected String $subject;
    protected String $name;


    
    public function setMessage($message) {
        $this->message = $message;
    }
    /**
     *
     * @return $message
     */
    public function getMessage() {
        return $this->message;
    }
    public function setName($name)  {
        $this->name = $name;
    }

    public function getName()  {
       return $this->name;
    }
        /**
     * @return $address
     *
     * @return void
     */
    public function getAddress() {
        return $this->address;
    }

    public function setSubject($subject){
        $this->subject =$subject;
    }

    public function getSubject() {
        return $this->subject;
    }


    public function initMail() {
        
            $mail = new PHPMailer();

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465; 

    }
    public function mail($mail) {
        //Recipients
    $mail->setFrom('from@example.com', 'Adebc');
    $mail->addAddress($this->address , $this->name);     //Add a recipient

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $this->subject;
    $mail->Body    = $this->message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();    

    }

}