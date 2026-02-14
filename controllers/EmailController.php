<?php
class EmailController
{
    public function draw()
    {
        if (count($_POST) > 0) {
            $sendHtml = $_POST["html"];
            $sendHeader = $_POST["headerMSJ"];
            echo '<pre>  post info: ', var_dump($_POST), '</pre>';
            echo '<pre>  Email Send: ', var_dump(EMAIL_SEND), '</pre>';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: " . EMAIL_SEND . "\r\n";
            echo '<pre>  message: ', var_dump($sendHtml), '</pre>';
            $rta = mail($_POST["email"], $sendHeader, $sendHtml, $headers);
            if ($rta) {
                echo EMAIL_SEND . ' -> ' . $_POST["email"];
                return true;
            }
            return false;
        }
        return false;
    }
}
