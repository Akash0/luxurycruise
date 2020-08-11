<?php
 
if($_POST) {
    $Name = "";
    $Email = "";
    $Telephone = "";
    $visitor_type = "default";
    $Subject = "";
    $Message = "";
     
    if(isset($_POST['Name'])) {
        $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['Email'])) {
        $Email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['Email']);
        $Email = filter_var($Email, FILTER_VALIDATE_EMAIL);
         
    }
     
    if(isset($_POST['Telephone'])) {
        $Telephone = filter_var($_POST['Telephone'], FILTER_SANITIZE_NUMBER_INT);
    }
     
     
    if(isset($_POST['Subject'])) {
        $Subject = htmlspecialchars($_POST['Subject']);
    }
 
     if(isset($_POST['Message'])) {
        $Subject = htmlspecialchars($_POST['Message']);
    }
 
 
    $recipient = "bhinkah.y@knowledgeplus.mu";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $Email . "\r\n";
 
    $email_content = "<html><body>";
    $email_content .= "<table style='font-family: Arial;'><tbody><tr><td style='background: #eee; padding: 10px;'>Visitor Name</td><td style='background: #fda; padding: 10px;'>$Name</td></tr>";
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Email</td><td style='background: #fda; padding: 10px;'>$Email</td></tr>";
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Phone</td><td style='background: #fda; padding: 10px;'>$Telephone</td></tr>";
   
    $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Visitor Type</td><td style='background: #fda; padding: 10px;'>$visitor_type</td></tr></tbody></table>";
 
    $email_content .= "<p style='font-family: Arial; font-size: 1.25rem;'><strong>Special Request from $Name &mdash;</strong><i> $Subject</i>.</p>";

    $email_content .= "<p style='font-family: Arial; font-size: 1.25rem;'><strong>Message from $Name &mdash;</strong><i> $Message</i>.</p>";
    $email_content .= '</body></html>';
 

        if(mail($recipient, "Interested in Cruise/Foreign Recruitment", $email_content, $headers)) {
            echo '<script language="javascript">';
            echo 'alert("Thank you for your message.")';
            echo '</script>';

        } else {
            echo '<script language="javascript">';
            echo 'alert("We are sorry but the email did not go through.")';
            echo '</script>';
        }
     
    } else {
        echo '<script language="javascript">';
        echo 'alert("Something went wrong")';
        echo '</script>';
    }
?>