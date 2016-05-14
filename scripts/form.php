

<?php 
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";
    $emailSent="";
    
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   if (empty($_POST["name"])) {
     $nameErr = 'Please include your name!';
   } else {
     $name = test_input($_POST["name"]);
   }
  
   if (empty($_POST["email"])) {
     $emailErr = 'Please include an email where we can contact you!';
   } else {
     $email = test_input($_POST["email"]);
   }
    
   if (empty($_POST["message"])) {
     $messageErr = 'Please include your message here.';
   } else {
     $message = test_input($_POST["message"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}  

if (($name=="")||($email=="")||($message=="")) 
    { 
    $emailSent='Email was not sent!'; 
    } 
else{         
    mail("ll567@cornell.edu", $name, $email, $message); 
    $emailSent='Email was sent!';
    } 
   
?> 