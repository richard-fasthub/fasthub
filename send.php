<?php
   $to = "dev@fasthub.co.tz";
   $subject = "This is subject";
   $message = "my text";

   $result = mail ($to,$subject,$message,$header);

   if( $result == true ){
      echo "Message sent successfully...";
   }else{
      echo "Sorry, unable to send mail...".print_r($result);
   }
?>