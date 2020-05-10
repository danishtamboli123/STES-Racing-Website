<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$teamname = $_POST['TeamName'];
$phnumber = $_POST['PhNumber'];
$formcontent=" From: $name \n Team Name: $teamname \n Phone Number: $phnumber \n Message: $message";
$recipient = "stesracing@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$sent = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

if ($sent) {
?><!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="STES Racing" content="The offical website of STES Racing">
    <meta name="STES" content="Sinhgad Technical Education Society">
    <meta name="Racing" content="Fsae Racing Team of STES">
    <meta name="Sinhgad" content="College Location">
    <meta name="Sinhgad College" content="FSAE Team">
    <meta name="Sinhgad College of Engineering" content="FSAE Team">
    <meta name="Sinhgad Technical Education Society" content="FSAE Team">
    <meta name="FSAE" content="Formula Society of Automotive Engineers">
    <meta name="Formula" content="FSAE">
    <meta name="Formula Society of Automotive Engineers" content="FSAE">
    <meta name="Formula Bharat" content="FSAE">
    <meta name="Supra" content="FSAE">
    <meta name="keywords" content="Singhad,Sinhgad College,FSAE,Formula SAE,Formula Bharat,Supra,Baja,Formula Society of Automotive Engineers,Student,Student Team,STES,Sinhgad Technical Education Society,">
   <meta name="description" content="STES Racing is Sinhgad Technical Education Society’s Formula SAE Team, consisting of undergraduate students with the goal to build world class combustion vechicles.">
    <title>About Us — STES Racing</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Didact+Gothic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Voltaire">
    <link rel="stylesheet" href="assets/css/styles.min.css">
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">	
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">	
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">	
<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style>
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/img/display_loading.gif) center no-repeat #fff;
	background-color: #919191;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
$(window).load(function() {
		// Animate loader off screen
		setTimeout(function() {
  $(".se-pre-con").fadeOut("slow");;
}, 1000);
	});
</script>
</head>
<title>STES Racing | Formula SAE Team</title>
</head>
<div class="se-pre-con"></div>
<body style="background-color:#000000;overflow-wrap: break-word;">
<div>
        <div class="header-dark" style="background-image:url(&quot;assets/img/IMG_20180714_1508361.jpg&quot;);height:100vh;color:rgb(255,255,255);background-position:center;">
            <div style="height:100vh;background-color:rgba(0,0,0,0.5);">
                <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                    <div class="container-fluid"><a class="navbar-brand" href="/"><img src="assets/img/Logo White.png" alt="STES Racing Logo" width="100%" style="height:32px;width:auto;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="border:none;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div
                            class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav"></ul>
                            <form class="form-inline mr-auto" target="_self">
                                <div class="form-group"><label for="search-field"></label></div>
                            </form><span class="navbar-text"></span>
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="about-us" style="color:rgb(255,255,255);">ABOUT US</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Team">TEAM</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Cars">CARS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Sponsors">SPONSORS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="FSAE">FSAE</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Contact">CONTACT US</a></li>
                            </ul>
                    </div>
            </div>
            </nav>
<div style='text-align:center;font-size:calc(1em + 5vw);padding: 25vh 5vh 50vh;'><b>Thank You, Our Team members will get back to you shortly.</b></div>
<div class="footer-dark" style="padding-top:0;padding-bottom:0;background-color:rgb(0,0,0);">
        <footer>
            <div class="container" style="padding-top:25px;padding-bottom:25px;">
                <div class="row">
                    <div class="col-sm-6 col-md-3 offset-sm-3 offset-xl-3 item">
                        <h3>ABOUT</h3>
                        <ul>
                            <li><a href="Team">Team</a></li>
                            <li><a href="Cars">Cars</a></li>
                            <li><a href="Sponsors">Sponsors</a></li>
                            <li><a href="FSAE">What is FSAE?</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3><a href="Contact" style="color:rgb(255,255,255);">CONTACT US</a></h3>
                        <p>STES Racing</p>
                        <p>Singhad College of Engineering,</p>
                        <p>Ambegaon BK,Pune</p>
                        <p>Maharashtra 411041,India</p>
                        <p>Email ID: stesracing@gmail.com</p>
                    </div>
                </div>
                <div class="col item social" style="margin-top:12px;"><a href="https://www.facebook.com/stesracingteam/"><i class="icon ion-social-facebook" style="color:#00ff00;"></i></a><a href="https://www.instagram.com/stesracing"><i class="icon ion-social-instagram" style="color:#00ff00;"></i></a>
                    <a
                        href="https://twitter.com/stesracing"><i class="icon ion-social-twitter" style="color:#00ff00;"></i></a><a href="https://www.linkedin.com/company/stes-racing"><i class="icon ion-social-linkedin" style="color:#00ff00;"></i></a></div>
                <p class="copyright">STES Racing © <?php echo date('yy') ?></p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>STES Racing | Formula SAE Team</title>
</head>
<body style="background-color:#000000;">
<div>
        <div class="header-dark" style="background-image:url(&quot;assets/img/IMG_20180714_1508361.jpg&quot;);height:100vh;color:rgb(255,255,255);background-position:center;">
            <div style="height:100vh;background-color:rgba(0,0,0,0.5);">
                <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                    <div class="container-fluid"><a class="navbar-brand" href="/"><img src="assets/img/Logo White.png" alt="STES Racing Logo" width="100%" style="height:32px;width:auto;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1" style="border:none;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div
                            class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav"></ul>
                            <form class="form-inline mr-auto" target="_self">
                                <div class="form-group"><label for="search-field"></label></div>
                            </form><span class="navbar-text"></span>
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="about-us" style="color:rgb(255,255,255);">ABOUT US</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Team">TEAM</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Cars">CARS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Sponsors">SPONSORS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="FSAE">FSAE</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Contact">CONTACT US</a></li>
                            </ul>
                    </div>
            </div>
            </nav>
<div style='text-align:center;font-size:calc(1em + 5vw);padding: 25vh 5vh 50vh;'><b>Something went wrong, Please try again later.</b></div>
<div class="footer-dark" style="padding-top:0;padding-bottom:0;background-color:rgb(0,0,0);">
        <footer>
            <div class="container" style="padding-top:25px;padding-bottom:25px;">
                <div class="row">
                    <div class="col-sm-6 col-md-3 offset-sm-3 offset-xl-3 item">
                        <h3>ABOUT</h3>
                        <ul>
                            <li><a href="Team">Team</a></li>
                            <li><a href="Cars">Cars</a></li>
                            <li><a href="Sponsors">Sponsors</a></li>
                            <li><a href="FSAE">What is FSAE?</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3><a href="Contact" style="color:rgb(255,255,255);">CONTACT US</a></h3>
                        <p>STES Racing</p>
                        <p>Singhad College of Engineering,</p>
                        <p>Ambegaon BK,Pune</p>
                        <p>Maharashtra 411041,India</p>
                        <p>Email ID: stesracing@gmail.com</p>
                    </div>
                </div>
                <div class="col item social" style="margin-top:12px;"><a href="https://www.facebook.com/stesracingteam/"><i class="icon ion-social-facebook" style="color:#00ff00;"></i></a><a href="https://www.instagram.com/stesracing"><i class="icon ion-social-instagram" style="color:#00ff00;"></i></a>
                    <a
                        href="https://twitter.com/stesracing"><i class="icon ion-social-twitter" style="color:#00ff00;"></i></a><a href="https://www.linkedin.com/company/stes-racing"><i class="icon ion-social-linkedin" style="color:#00ff00;"></i></a></div>
                <p class="copyright">STES Racing © <?php echo date('yy') ?></p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>
<?php
}
?>