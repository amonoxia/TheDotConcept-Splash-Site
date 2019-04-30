<?php
if(isset($_POST['submit'])){
    $to = "info@thedotconcept.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "TheDotConcept.com Contact Form submission";
    $subject2 = "Copy of your form submission on TheDotConcept.com";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: thankyou.html');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <title>TheD•tConcept. Let's connect the Dots</title>
<link rel="stylesheet" href="css/style190429.css">
<link rel="stylesheet" href="css/stylemobile190429.css">
</head>

<body>
<!-- Mobile-only video section -->
<div class="mobile">
  <video autoplay muted loop id="myVideo">
    <source src="images/dots_color.mp4" type="video/mp4">
  </video>
</div>
<!-- End mobile only video section -->
<div class="main">
  <canvas id='canvas'></canvas>
  <script  src="js/index.js"></script>
  <input type="checkbox" id="menu" class="menu_checkbox">
  <label for="menu">
    <div class="button_show">show</div>
  </label>
  <!-- tiny buttons -->
  <div class="button_accessibility">
    <a href="accessible.html">
      <img src="https://img.icons8.com/material-sharp/26/000000/accessibility2.png" alt="Click here for accessibility and text version of this website.">
    </a>
  </div>
    <div class="body_accessibility">
      <div class="body_circle">
        <h2>Need accessibility?</h2>
        <p>Click on the <img src="https://img.icons8.com/material-sharp/26/000000/accessibility2.png"> icon to switch to the text version of this website.</p></div>
      </div>
  <div class="button_instructions">
    <img src="https://img.icons8.com/material-two-tone/24/000000/user-manual.png" alt="Instructions">
  </div>
    <div class="body_instructions">
      <div class="body_circle">
        <h2>Instructions</h2>
        <p>Move your mouse to paint.
        <br>Click once to change the ink color.
        <br>Click twice to refresh the canvas.
        <p>Ink colors are selected at random.</p>
        <p>Click "<b>show</b>" to show the content or to see the whole canvas.</p>
        <p>Mouse affect created by <a href="https://codepen.io/tholman/pen/ifDak">Tim Holman</a>.</p>
      </div>
    </div>
    <!-- end tiny buttons -->
<!-- begin the body of the page -->
  <div class="body">
    <div class="body_square">
      <h2>Contact us</h2>
      <p>Give us a call or send us an email for more information, or fill out the form below.
      <br>
      <span class="formspace">Tel:</span><a href="tel:+15037419151">503.741.9151</a>
      <br>
      <span class="formspace">Email:</span><a href="mailto:info@thedotconcept.com">info@thedotconcept.com</a>
      <form name="contactform" method="post" action="send_form_email.php">
        <span class="formspace"><label for="name">Your Name:</label></span>
        <input type="text" name="name"><br>
        <span class="formspace"><label for="email">Email:</label></span>
        <input type="text" name="email"><br>
        <span class="formspace"><label for="phone">Phone:</label></span>
        <input type="text" name="phone"><br>
        <span class="formspace"><label for="message">Message:</label></span>
        <textarea type="text" name="message"></textarea><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
<!-- end the body of the page -->
  <div class="sidebar">
    <div class="sidebar_items">
      <ul>
        <li><a href="home.html">home</a></li>
        <li><a href="services.html">services</a></li>
<!--        <li><a href="portfolio.html">portfolio</a></li> -->
<!--    <li><a href="blog.html">blog</a></li> -->
        <li class="active"><a href="contact.html">contact</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="footer"><p>©2019 Christia Hall. TheD•tConcept.com. <a href="contact.html">Contact Us</a>.</p></div>
</div>
</body>

</html>
