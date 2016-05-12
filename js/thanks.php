<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
Thanks
</title>
<body>
<?php


//Store the variables from the form
$subject = strip_tags($_POST["subject"]);
$content = strip_tags($_POST["message"]);
$from = "     From:" .strip_tags($_POST["from"])."               Email Address: ".strip_tags($_POST["address"]);
$to = "linkena@gmail.com";
$message = $content. $from;
$error = false;

if($subject ==""){
				$error = true;
				print("<p>ERROR: You haven't entered <strong> Subject </strong> of the message. <br/></p>");
			}
if($content ==""){
				$error = true;
				print("<p>ERROR: You haven't entered <strong> a message</strong>. <br/></p>");
			}	
if(strip_tags($_POST["from"]) == ""){
				$error = true;
				print("<p>ERROR: You haven't entered <strong> your name</strong>. <br/></p>");
			}	
if(strip_tags($_POST["address"]) == ""){
				$error = true;
				print("<p>ERROR: You haven't entered <strong> your email</strong>. <br/></p>");
			}	
if(strstr(strip_tags($_POST["address"]), "@") == false){
				$error = true;
				print("<p>ERROR: Your <strong>email </strong> is the wrong format. <br/></p>");
			}	
if(strstr(strip_tags($_POST["address"]), ".") == false){
				$error = true;
				print("<p>ERROR: Your <strong>email </strong> is the wrong format. <br/></p>");
			}				
if($error == false){
				print("<p>Thanks for submitting your message!</p>");
  mail($to, $subject, $message);
  }

?>
</body>
</html>