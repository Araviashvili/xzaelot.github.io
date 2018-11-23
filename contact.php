<?php
 if(isset($_post['submit'])){
   $name = $_post['Name'];
   $Surname = $_post['Last_Name'];
   $company = $_post['Company'];
   $MailFrom = $_post['email'];
   $number = $_post['number'];
   $text = $_post['why'];
   $mailTo="xzaelot@yahoo.com";
   $subject="An invitation request";
   $header = "From:".$MailFrom;
   $txt="An invitation request sent from".$company".\n\n";

   mail($mailTo,$subject,$header);
   header("location:index.php?mailsend")
 }
