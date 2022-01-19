<?php
// Start the session
session_start();
?>
<?php
$_SESSION['currentDate'] = date('Y-m-d');
$_SESSION['servicesRendered'] = $_POST['servicesRendered'];
$_SESSION['totalPrice'] = $_POST['totalPrice'];

$_SESSION['clientName'] = $_POST['clientName'];
$_SESSION['clientEmail'] = $_POST['clientEmail'];
$_SESSION['clientAddress'] = $_POST['clientAddress'];
$_SESSION['dateOfService'] = $_POST['dateOfService'];

$_SESSION['providerName'] = "COMPANY NAME";
$_SESSION['providerEmail'] = "contracts@COMPANYNAME.COM";
$_SESSION['providerAddress'] = "1234 MAIN STREET, CITY, STATE, ZIP";
$_SESSION['providerTechnician'] = "TECHNICIAN NAME";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>|[ Contract ]| COMPANY NAME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;vertical-align:baseline;font:inherit;font-size:100%;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;}ol,ul{list-style:none;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-spacing:0;border-collapse:collapse;}

            html {margin: 25px;font-size: 2.75vw;font-family: Georgia, 'Times New Roman', Times, serif;line-height: 1.2em;}
            h1 {padding-top: 40px;padding-bottom: 40px;text-align: center;font-weight: bold;font-size: 8vw; }
            h2 {display: inline; font-weight: bold;}
            ul {padding-top: 10px;padding-left: 50px; }
            li {padding-bottom: 15px;}

            participants {display: inline-block;margin-bottom: 20px;padding-top: 20px;border-top: 2px dashed lightgrey; border-bottom: 2px dashed lightgrey; }
            p {padding-bottom: 20px;}
            hr {border-top: 2px dashed lightgrey; border-bottom: 2px dashed lightgrey;}
            input[type=text] {position: relative;top: 1vw; padding: 6px; width: 38vw;height: 7.2vw;border: 1px solid #c6c6c6;border-radius: 5px; background-color: yellow;font-size: 24px;font-family: Georgia;	-webkit-appearance: none;-moz-appearance: none; }
            input[type=text]:focus {outline: 0;}
            input[type=submit] {display: block;margin-right: auto;margin-bottom: 50px;margin-left: auto;width: 90vw;height: 18vw;border: 0;border-radius: 10px;background-color: #63ff8a;color: #fff;text-transform: uppercase;text-shadow: 1px 1px 0px #41bd60;font-size: 2em;}
            #technicianSignature {padding: 6px; padding: 6px; border-radius: 5px; border-radius: 5px; background-color: yellow; font-size: 19px; font-family: 'Yellowtail'; }
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet"> 
    </head>
    <body>


    
        <?php require("contract_body.php"); ?>



        <form action="mailer.php" method="POST">
            <p>
                Service Recipient:<br>
                <?php echo $_SESSION['clientName'] ?><br>
                <br />
                By: &nbsp;&nbsp;&nbsp;<input type="text" id="clientSignature" name="clientSignature" placeholder="SIGNATURE" autocapitalize="none" autocorrect="off" autocomplete="off" style="font-family: 'Yellowtail', sans-serif;" required>&nbsp;&nbsp;&nbsp;</u> 	Date: <?php echo $_SESSION['currentDate'] ?> <br>
                <br>
                Service Provider:<br>
                <?php echo $_SESSION['providerName'] ?><br>
                <br>
                By: &nbsp;&nbsp;&nbsp;<span id="technicianSignature"><?php echo $_SESSION['providerTechnician'] ?></span>&nbsp;&nbsp;&nbsp;</u> 	Date: <?php echo $_SESSION['currentDate'] ?> <br> <br>
            </p>
            <input type="submit" value="Sign service agreement &rarr;">
        </form>
    </body>
</html>