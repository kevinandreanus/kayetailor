<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{
    public function email(){
        return view("email");
    }

    public function composeEmail(Request $request){
        require base_path("vendor/autoload.php");

        $mail = new PHPMailer(true);

        try {

            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'kayetailor.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'admin@kayetailor.com';
            $mail->Password = 'qwe123!@#';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->setFrom('admin@kayetailor.com', 'Admin KayeTailor');
            $mail->addAddress('info.kayetailor@gmail.com');

            // $mail->isHTML(true);

            $mail->Subject = 'Kaye Tailor Website Contact Us';
            $mail->Body = "Name: ".$request->name."\r\n"."Email: ".$request->email."\r\n"."Subject: ".$request->subject."\r\n"."Message:\r\n".$request->message;

            if(!$mail->send()) {
                // return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                return 'gagal';
            }else {
                // return back()->with("success", "Email has been sent.");
                return 'sukses';
            }

        } catch (Exception $e) {
            //  return back()->with('error','Message could not be sent.');
            return 'gagal banget';
        }

    }
}