<?php
 require_once '../ext/swiftmailer/lib/swift_required.php';

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $post_message = trim($_POST["message"]);
    $post_email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    if(!filter_var($post_email, FILTER_VALIDATE_EMAIL))
    {
        echo json_encode(array('error' => true, 'msg' => 'Oops! There was a problem with your submission. Please complete the form and try again.'));
        exit;
    }

    $email_content = "Email: " . $post_email . "\n\n";
    $email_content .= "Message:\n" . $post_message . "\n";
    $email_content_html = "Email: " . $post_email . "<br><br>";
    $email_content_html .= "Message:<br>" . $post_message . "<br>";
    $text = $email_content;
    $html = "<html><head></head><body>" . $email_content . "</body></html>";
    // This is your From email address
    //$from = array('contact@kgoms.com' => 'Contact KGOMS');
    $from = array("contact.kgoms@gmail.com" => 'Contact KGOMS');
    // Email recipients
    $to = array("info.kgoms@gmail.com"=>'Info KGOMS',
                "contact.kgoms@gmail.com" => 'Contact KGOMS');
    // Email subject
    $subject = 'KGOMS - Contact form submitted';
    
    // Login credentials
    $config = parse_ini_file('../../../admin/config_website.ini');
    $username = $config["username"];
    $password = $config["password"];
    
    // Setup Swift mailer parameters
    //$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername($username);
    $transport->setPassword($password);
    $swift = Swift_Mailer::newInstance($transport);
    
    // Create a message (subject)
    $message = new Swift_Message($subject);
    
    // attach the body of the email
    $message->setFrom($from);
    $message->setBody($html, 'text/html');
    $message->setTo($to);
    $message->addPart($text, 'text/plain');
    
    // send message
    if ($recipients = $swift->send($message, $failures))
    {
      echo json_encode(array('error' => false, 'msg' => 'Thank you!'));
      exit;
    }
    // something went wrong =(
    else
    {
      echo json_encode(array('error' => true, 'msg' => 'Oops! There was a problem with your submission. Please complete the form and try again.'));
      exit;
    }
  }
  else
  {
      echo json_encode(array('error' => true, 'msg' => 'There was a problem with your submission, please try again.'));
      exit;
  }
?>