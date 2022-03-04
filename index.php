<?php
$userEmail= "";
if(isset($_POST['submit']))
{
  $userEmail = $_POST['email'];
  if(filter_var($userEmail, FILTER_VALIDATE_EMAIL))
  {
     $subject = "Thanks for subscribing us- Cafenod";
     $message = "Thanks for subsscribing ,stay tuned";
     $sender = "From: jayashree3602@gmail.com";
     if (mail($userEmail,$subject, $message, $sender))
     {
         echo "Thank you";
         $userEmail= "";
     }
     else
     {
       echo "Mail not sent";
     }
  }
  else
  {
    echo $userEmail "not valid";
  }
}
?>
