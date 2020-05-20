<?php

if (isset($_POST['email'])) {

  $email_to = "contact@sohagedev.com";

  $email_subject = "sohagdev.com";

  //Errors to show if there is a problem in form fields.

  function died($error)
  {

    echo "We are sorry that we can procceed your request due to error(s)";

    echo "Below is the error(s) list <br /><br />";

    echo $error . "<br /><br />";

    echo "Please go back and fix these errors.<br /><br />";

    die();
  }

  // validation expected data exists

  if (
    !isset($_POST['name']) ||

    

    !isset($_POST['email']) ||

    
    !isset($_POST['message'])

    

  ) {

    died('We are sorry to proceed your request due to error within form entries');
  }

  $full_name = $_POST['name']; // required

 

  $email_from = $_POST['email']; // required

  $comments = $_POST['message']; // required

  

  $error_message = "";

  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if (!preg_match($email_exp, $email_from)) {

    $error_message .= 'You entered an invalid email<br />';
  }

  $string_exp = "/^[A-Za-z .'-]+$/";

  if (!preg_match($string_exp, $full_name)) {

    $error_message .= 'Invalid Full name<br />';
  }
  if (strlen($comments) < 2) {

    $error_message .= 'Invalid comments<br />';
  }
  

  if (strlen($error_message) > 0) {

    died($error_message);
  }

  $email_message = "Form details below.\n\n";

  function clean_string($string)
  {

    $bad = array("content-type", "bcc:", "to:", "cc:", "href");

    return str_replace($bad, "", $string);
  }

  $email_message .= "First Name: " . clean_string($full_name) . "\n";

  

  $email_message .= "Email: " . clean_string($email_from) . "\n";

 

  $email_message .= "Comments: " . clean_string($comments) . "\n";

  // create email headers

  $headers = 'From: ' . $email_from . "\r\n" .

    'Reply-To: ' . $email_from . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

  @mail($email_to, $email_subject, $email_message, $headers);
  ?>

  <!-- Success message -->
 <!-- Modal section1 starts -->
   
      
  <!-- end message -->
<?php

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="evolution.ico">
    <title>EvolutionBeauty</title>
    <!-- custom fonts for the text and titles -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/911Fontsimpact.ttf" rel="stylesheet">
    <!-- Icons for this template -->
    <link href="assets/fonts/font-awesome/css/all.css" rel="stylesheet">
    <!-- build:css -->
    <link href="assets/css/app.css" rel="stylesheet">
    <!-- endbuild -->
</head>

<body>
    <!-- header part start -->
    <header>
        <div class="main-logo">
            <a href="index.html"><img src="assets/img/logo-eb.png" alt="logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html" class="active">Contact</a></li>
            </ul>
        </nav>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>
    </header>
    <!-- header-part-ends -->
    <!-- main-body -->
    <div class="container-fluid main-title-services mt-5 pt-5 pl-0 pr-0" style="background-color: #FF9087;">
        <h1>MASSAGE SENT</h1>
    </div>
    <!-- headline ends -->
    
    <!-- main-body-ends -->
    <div class="container-fluid footer-area">
        <footer class="container footer-container">
            <div class="row">
                <div class="col-md-6 footer-info">
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="http://www.helix-d.com/" target="_blank">EvolutionBeauty</a>
                </div>
                <div class="col-md-6 social-icon pr-0">
                    <a href="#"><img src="assets/icons/facebook-square-brands.svg" alt="icon"></a>
                    <a href="#"><img src="assets/icons/twitter-brands.svg" alt="icon"></a>
                    <a href="#"><img src="assets/icons/instagram-brands.svg" alt="icon"></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/vendor/jquery.slim.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- build:js -->
    <script src="assets/js/app.js"></script>
    <!-- endbuild -->
</body>

</html>