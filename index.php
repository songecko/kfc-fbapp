<?php

require_once 'vendor/autoload.php';

$mobileDetect = new Mobile_Detect();
$facebook = new Facebook(array(
		'appId'  => '184632401732542', 
		'secret' => '4686563548e330d16f55f8f70eccb898', 
		'allowSignedRequest' => true, // optional, but should be set to false for non-canvas apps
));

$signedRequest = $facebook->getSignedRequest();

if (!$mobileDetect->isMobile() && $signedRequest == null) 
{
	header('Location: https://www.facebook.com/KFCPuertoRico/app_184632401732542');
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>KFC Tropicana</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">        
    </head>
    <body>
    	<div class="newFlag"><img src="images/new-flag.png" class="img-responsive"></div>
    	<div class="title"><img src="images/title.png" class="img-responsive"></div>
    	<div class="text"><img src="images/text_01.png" class="img-responsive"></div>
    	
    	<div class="canastaFresa"><img src="images/canasta-fresa.png" class="img-responsive"></div>
    	<div class="canastaMango"><img src="images/canasta-mango.png" class="img-responsive"></div>
    	
    	<div class="vasoFresa"><img src="images/vaso-fresa.png" class="img-responsive"></div>
    	<div class="vasoMango"><img src="images/vaso-mango.png" class="img-responsive"></div>
    	
    	<div class="kfcLogo"><img src="images/kfc-logo.png" class="img-responsive"></div>
    	
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.transit.min.js"></script>        
        <script src="js/main.js"></script>
    </body>
</html>