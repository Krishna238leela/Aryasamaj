
<!DOCTYPE html>
<html lang="en">

<head>
   	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
		<meta name="description" content="Discover the essence of Vedic teachings and community fellowship at Arya Samaj Nagaram. Join us in our mission to promote spiritual growth, social welfare, and cultural heritage.">
<meta name="keywords" content="AryaSamajnagaram, Nagaram, wedding, 16 Sanskars in Hinduism, vedic education, Sunday Satsang, Vedic teachings, community harmony, spiritual growth, social welfare, cultural heritage, Vedic philosophy, mandir, truth, righteousness, spiritual seekers, cultural enrichment">
<link rel="canonical" href="https://aryasamajnagaram.org/" />
<link rel="image_src" href="images/socialmedia-image.jpg" />
<meta property="og:title" content="AryaSamaj Nagaram">
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://aryasamajnagaram.org/"  />
<meta property="og:image" content="images/socialmedia-image.jpg"/>
<meta property="og:site_name" content="AryaSamaj Nagaram"/>
<meta property="og:description" content="Discover the essence of Vedic teachings and community fellowship at Arya Samaj Nagaram.">
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" value="@AryaSamaj Nagaram" />
<meta property="twitter:url" content="https://aryasamajnagaram.org/" />
<meta property="twitter:title" content="AryaSamaj Nagaram"/>
<meta property="og:description" content="Discover the essence of Vedic teachings and community fellowship at Arya Samaj Nagaram.">	
  
    <title>Contact Us</title>
   <?php include("includes/links.php"); ?>
</head>

<body>

    <!-- ================> preloader start here <================ -->
   
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
   
    <!-- ================> Header Cart <================ -->



    <!-- ================> header section start here <================== -->
   <?php include("includes/header.php"); ?>
    <!-- ================> header section end here <================== -->


    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheadersize" style="background-image: url(images/contact-baner.jpg);">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>Contact</h3>
                </div>
                <!--<div class="pageheader__right">-->
                <!--    <nav aria-label="breadcrumb">-->
                <!--        <ol class="breadcrumb">-->
                <!--            <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
                <!--            <li class="breadcrumb-item active" aria-current="page">Contact</li>-->
                <!--        </ol>-->
                <!--    </nav>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    
    <!-- ================> Contact section start here <================== -->
    
	<div class="contact padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section_header text-center">
                <h2>Get In Touch</h2>
                <div class="heading-sec-img" style="margin-top: -13px;">
                     <img src="images/title-image.png" alt="img">
                  </div>
                <p>Thank you for your interest in Arya Samaj. If you have any questions, feedback, or inquiries, please feel free to reach out to us</p>
            </div>
            <div class="section__wrapper">
                <div class="contact__form">
				
				       <?php

$email_to ='info@aryasamajnagaram.org'; //put your email address here
$subject ='AryaSamaj Nagaram'; //put the email sibject line prefix here
$email_from ='donotreply@aryasamajnagaram.org'; //put the email address that this form will be sent from
$email_from_nice ='AryaSamaj Nagaram'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
    $email = $_POST['email'];
	$phone = $_POST['phone']; 
	
    $message = $_POST['message']; 
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "Name: $name\n\n Last Name: $lname\n\n Email Address: $email\n\n Phone Number: $phone\n\n Message: $message ";
           $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;
//$headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_to;

mail($emailTo, $subject, $body, $headers);
$emailSent = true;
	// create email headers
}
?>
    <?php if(isset($emailSent) && $emailSent == true) {   //If email is sent ?>

        <div class="container">
        <div class="row">
         
            <div class="col-md-9 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you for contacting,<br>We will get back to you soon.</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
				
                    <form class="contact-form d-flex flex-wrap justify-content-between" action=""  method="post">
                        <input type="text" placeholder="First Name" id="name" name="name" required="required">
						<input type="text" placeholder="Last Name" id="lname" name="lname" required="required">
                        <input type="text" placeholder="Your Email" id="email" name="email" required>
                        <input type="text" placeholder="Phone Number" id="phone" name="phone" required>
                        <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                    </form>
					  <?php } ?>
                    
                </div> 
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Location section start here <================== -->
    <div class="location">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="location__left">
                        <div class="location__map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243956.78229925345!2d78.08313199453123!3d17.1787354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xad18245ab0009da7%3A0x98414fd5d33d77d9!2swww.aryasamajnagaram.com!5e0!3m2!1sen!2sin!4v1713010783956!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="location__right padding--top padding--bottom">
                        <div class="location__info">
                         
                            <div class="location__info-bottom">
                                <div class="section__header">
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-list">
                                        <ul>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <p><strong>AryaSamaj Nagaram</strong><br>
 Hno 3-5 , P No 6&7,<br>
 Opp Vijaya Hospital,SV Nagar,<br>
Hyderabad, 500083, Telangana.</p>
                                                </div> 
                                            </li>
											 <li>
                                                <div class="location__info-left">
                                                 <i class="fas fa-phone-alt"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                 <a href="tel:+91-8309801619">  +91-8309801619</a>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="location__info-left">
                                                 <i class="fas fa-envelope"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                 <a href="info@aryasamajnagaram.org">info@aryasamajnagaram.org</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Location section end here <================== -->


    <!-- ================> Social section start here <================== -->
    <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    <li class="social__list-facebook">
                        <a href="ps://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a>
                    </li>
                   
                    <li class="social__list-instagram">
                        <a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <span>instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->



    <!-- ================> Footer section start here <================== -->
  <?php include("includes/footer.php"); ?>
	<!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <?php include("includes/script.php"); ?>
</body>
</html>

<style>
    li.contact a {
    color: #002147 !important;
}
</style>