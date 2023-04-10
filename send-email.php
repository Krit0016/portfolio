if(isset($_POST['submit'])){
  $to = "orranis.maisie@gmail.com"; // your email address
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From:" . $from;
  
  // Form validation
  if(empty($name) || empty($from) || empty($subject) || empty($message)){
    echo "Please fill in all required fields.";
  }
  else{
    // Send email
    if(mail($to, $subject, $message, $headers)){
      echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
    }
    else{
      echo "There was an error sending your message. Please try again later.";
    }
  }
}
