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
    $email = $_POST['email'];
    $select2= $_POST['name'];
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Akash <akawasthi743@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$to=$email;
$body="Its an Imense Pleasure for Ranchimall to inform you that You have registered Successfully for the Event .For further details of event click the link: <a href=\"http://localhost/ranchimall/fb.php \"> <button>Click here!</button></a>";
$subject="Invitation by Ranchi mall";
mail($to, $subject, $body, $headers);
}

			
?>
        <a href=vmart.htm><i class="fa fa-arrow-right" style="font-size:75px"></i></a>
		<b>You have registered Successfully Open your mail for More details </b> 
		<a href=https://accounts.google.com><button>Click Here!</button></a>
    </body>
</html>