<?php
session_start();
 
// Storing session data
$_SESSION["name"] = $_POST['name'];
//$_SESSION["lastname"] = "Parker";
    $_SESSION["mail"]=$_POST['email'];
	$_SESSION["slot"]=$_POST['selection'];
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Hello World</title>
        <style>

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            background-color: aqua;
            display: table;
        }
            .border{
                
                background-color: black;
    font-size:25px;
    color:#fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 0px;
            }
        .my-block {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            color: black;
        }
        </style>
    </head>
    <body style="background-image:url(goodalt.jpg)">
<?php
if(isset($_POST['submit'])){
    $select1 = $_POST['email'];
    $select2= $_POST['name'];
    
    $to = $select1;
$subject = 'Invitation later';
$from = 'akawasthi743@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">This is to inform you that you have registered successfully.For further Details of event click on the link given below :</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
}
?>
        <a href=vmart.htm><i class="fa fa-arrow-right" style="font-size:75px"></i></a>
		<b>You have registered Successfully Open your mail for More details </b>
        <a href=https://accounts.google.com><button>Click Here!</button></a>		
    </body>
</html>