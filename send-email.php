if(isset($_POST['submit'])){
    $to = "orranis.maisie@gmail.com"; // your email address
    $name = $_POST['name'];
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.";
}