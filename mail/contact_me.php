<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>James W Moody</title>
    <link href="http://jameswmoody.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/sass/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300|Roboto|Open+Sans+Condensed:300|Open+Sans" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Nab Bar -->

  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://jameswmoody.com/">&#60;&#47;JamesWMoody&#62;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://jameswmoody.com/">Home</a></li>
            <li><a href="../blog/">Blog</a></li>
            <li><a href="../webdev/">WebDev</a></li>
            <li><a href="../travel/">Travel</a></li>
            <li class="active"><a class="active-link"href="http://jameswmoody.com/#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find Me<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Social</li>
                <li><a target="_blank" href="https://www.facebook.com/jwmradio">Facebook</a></li>
                <li><a target="_blank" href="http://instagram.com/jwm___">Instagram</a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/moodyjames">LinkedIn</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Dev Stuff</li>
                <li><a target="_blank" href="https://github.com/jameswmoody">GitHub</a></li>
                <li><a target="_blank" href="http://codepen.io/jameswmoody/">CodePen</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </div>
    </div>
  </div>

<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  function IsInjected($str)
  {
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
        );
                
    $inject = join('|', $injections);
    $inject = "/$inject/i";
     
    if(preg_match($inject,$str)) {
          return true;
      } else {
          return false;
      }
  }
  
  if(IsInjected($visitor_email)) {
      echo "Bad email value!";
      exit;
  }

    $email_from = 'james@jameswmoody.com';
    $email_subject = "New Form submission";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $visitor_email\n\nPhone: $phone\n\nMessage:\n$message";

    $to = "jamesmoodyradio@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>

    <!-- Content -->
  <div class="container content-head">
    <div class="row">
      <div class="col-md-12">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Thanks!</h1>
          <p>I'll be in touch shortly.</p>
      </div>
    </div>
  </div>

    <!-- JS -->

  <script>
    var timer = setTimeout(function() {
      window.location='http://jameswmoody.com/'
    }, 3000);
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://jameswmoody.com/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://jameswmoody.com/script.js"></script>
  </body>
</html>