<?php

define("TITLE", "Contact Us | Franklins Fine Dining");
include('includes/header.php'); 
?>



<div id="contact">
<hr>
<h1>Get in touch with us!</h1>
<?php
    
function hs_header_injection($str)
{
    return preg_match('/[\r\n]/', $str);
}
if(isset($_POST['contact_submit']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg = $_POST['message'];
    
    if(hs_header_injection($name) || hs_header_injection($email)){ die();}

    if(!name || !email || !msg)
    {
        echo '<h4 class="error">All Fields Required. </h4><a href="contact.php" class="button block">Try Again</a>';
        exit;
    }
    
    $to = "ozoofodile@gmail.com";
    $subject ='$name sent you a message via contact form';
    $message ="Name:$name\r\n ";
    $message ="Email:$email\r\n ";
    $message ="Message:\r\n$msg ";
    
    
    if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe')
    {
        $message = '\r\n\r\n Please add $email to the mailing list.\r\n';
    }
    
    $message = wordwrap($message,72);
    
    $headers = "MIME-Version:1.0\r\n";
    $headers .= "Content-type:text/plain;charset=iso-8859-1\r\n";
    $headers .= "From:$name <email>\r\n";
    $headers .= "X-Priority:1\r\n";
    $headers .="X-MSMail-Priority:High\r\n\r\n";
    
    mail( $to,$subject,$message,$headers);
    
    
    
?>
    <h5>Thanks or Contacting Franklins</h5>
    <p>please allow 24 hoourss for a response</p>
    <p><a href="/final" class="button block">Home</a></p>
<?php
}else{ ?>
<form method="post" action="" id="contact-form">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    
        <label for="email">Email</label>
    <input type="email" id="email" name="email">
    
    
        <label for="message">Message</label>
       <textarea id="message" name="message"></textarea>
    
        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
        <label for="subscribe">Subscribe to News Letter</label>
    
    <input type="submit" class="button next" name="contact_submit" value="send Message">
    
    
</form>
    <?php } ?>
</div>

<?php
include('includes/footer.php')
?>