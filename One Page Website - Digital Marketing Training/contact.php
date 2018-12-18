<?php

// database connection //
include_once 'includes/digitalmarketing.php';

   if(isset($_POST['submit'])){
      // getting the variables //
      $name = $_POST['name'];
      $to = $_POST['email'];
      $phone = $_POST['phone'];
      $info = $_POST['info'];
      $course = $_POST['course'];


      // storing to database //                  // TABLE NAME //
      $sql = "INSERT INTO digitalmarketing 
      (name, email, phone, info, course)
      VALUES
      ('$name', '$to', '$phone', '$info', '$course');";

      mysqli_query($conn, $sql);


      // Sending email to the user //
      $subject = "Facebook Ads Training Preview";
      
      
      $message = "<h1>Registration for the Facebook Training course</h1>";
      $message .= "<b>Please confirm payment with direct bank transfer</b>";
      $message .= "<p>Account Name: John Doe</p>";
      $message .= "<p>Account Number: 12344</p>";
      $message .= "<b>You'll get a confirmation email once you finih your transaction</b>";
      
      $header = "From:info@2mstraining.com \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      
      $retval = mail ($to,$subject,$message, $header);
      
      if( $retval == true ) {
         echo "";
      }else {
         echo "Message could not be sent...";
      }
   }
         
?>

<!DOCTYPE html>
<html>
<title>Rergistered!</title>
<body>
    <h1 style="text-aling: centre; padding: 200px; padding-top:300px; padding-bottom: 20px;">Your details has been successfully submitted! Please check your email for the payment confirmations. Also, check the spam folder too.</h1>
    <a href="http://www.2mstraining.com/digitalmarketing/" style="color: #ffffff;
  background-color: #d90030;
  padding: 14px 32px;
  font-weight: 500;
  font-size: 16px;
  margin-top: 40px; border-radius:10px; margin-left:660px;">Ok</a>
</body>
</html>
      
