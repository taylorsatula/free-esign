<?php
// Start the session
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            input {width: 80vw; height: 2.5em;}
            form {position: absolute; top: 40%; left: 50%; margin-left: -40%;width: 80%;}
            input[type="date"] {width: 80vw; text-align: right;-webkit-appearance: none;-moz-appearance: none;}
        </style>
        <title>|[ Contract ]| COMPANY NAME</title>
    </head>
    <body>
        <form action="contract.php" method="POST">
            <input type="text" name="clientEmail" placeholder="clientEmail"><br />
            <input type="text" name="servicesRendered" placeholder="servicesRendered"><br />
            <!-- <input type="text" name="providerName" placeholder="providerName"><br /> -->
            <!-- <input type="text" name="providerAddress" placeholder="providerAddress"><br /> -->
            <!-- <input type="text" name="providerTechnician" placeholder="providerTechnician"><br /> -->
            <!-- these are hardcoded in the contract.php file -->

            <input type="text" name="clientName" placeholder="clientName"><br />
            <input type="text" name="clientAddress" placeholder="clientAddress"><br />
            <input type="text" name="totalPrice" placeholder="totalPrice"><br />
            <input type="date" id="dateOfService" name="dateOfService" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"><br />
            <br /><br />
            <button type="submit">Inject values into <br />the contract!</button>
        </form>
    </body>
</html>