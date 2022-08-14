<?php
    //A namespace allows you to place a bunch of code 
    // under a name and not have any naming conflicts 
    // with classes, functions and constants.

   namespace SMTP;
      class Mail{
          public $mes = 'SMTP mail';
      }
   namespace Mailgun;
      class Mail{
        public $mes = 'Mailgun mail';
      }
        
   use SMTP\Mail as SMTPMail;
   use Mailgun\Mail as MailgunMail;

   $smtp_mailer = new SMTPMail;
   echo $smtp_mailer->mes;
   $mailgun_mailer = new MailgunMail;
   echo '<br>'.$mailgun_mailer->mes;
?>