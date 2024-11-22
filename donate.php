
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
    <title>Donate</title>
    <?php include("includes/links.php"); ?>
</head>

<body>

    <!-- ================> preloader start here <================ -->
  
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
    <?php include("includes/header.php"); ?>
    <!-- ================> header section end here <================== -->


    <!-- ================> PageHeader section start here <================== -->
     <div class="pageheadersize" style="background-image: url(images/donation-banner.jpg);">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>Donate</h3>
                </div>
                <!--<div class="pageheader__right">-->
                <!--    <nav aria-label="breadcrumb">-->
                <!--        <ol class="breadcrumb">-->
                <!--            <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
                <!--            <li class="breadcrumb-item active" aria-current="page">Donate</li>-->
                <!--        </ol>-->
                <!--    </nav>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->
<div class="donate-text">
    if you want to donate please donate through this number <a href="tel:+91-8309801619">+91-8309801619</a>
</div>

    <!-- ================> Event section start here <================== -->
 <div class="checkout-page padding--top padding--bottom bg-light">
        <div class="container">
            <div class="row">
			
			
			<?php

$email_to ='info@aryasamajnagaram.org'; //put your email address here
$subject ='AryaSamaj Nagaram'; //put the email sibject line prefix here
$email_from ='donotreply@aryasamajnagaram.org'; //put the email address that this form will be sent from
$email_from_nice ='AryaSamaj Nagaram'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$first_name = $_POST['name'];
	$last_name = $_POST['lname'];
    $email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone']; 
	$postalcode = $_POST['postalcode'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$amount = $_POST['amount'];

	
	
    
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "First Name: $name\n\n Last Name: $lname\n\n Email Address: $email\n\nAddress: $address\n\nPhone Number: $phone \n\nZip Code: $postalcode\n\nCountry: $country\n\nState: $state\n\nCity: $city\n\nAmount: $amount\n\ndonatetype: $donatetype";
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
         
            <div class="col-md-6 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you,for Donate</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
			
			
			
			
                <form  class="contact-form" method="post" action="">
                    <div class="row gutter-lg">
                        <div class="col-lg-12 mb-6">
                            <div class="checkout-area-left">
                                <div class="bg-white mb-3">
                                    <div class="cal-title bg-title py-3 px-4">
                                        <h4 class="mb-0">Donation Details</h4>
                                    </div>
                                    <div class="cal-body p-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name *</label>
                                                <input type="text" id="name" class="form-control" name="name" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Last Name *</label>
                                                <input type="text" id="lname" class="form-control" name="lname" required="">
                                            </div>
                                        </div>
                                         <label>Email address *</label>
                                        <input type="text" id="email" class="form-control" name="email" required="">
										     <label> Address *</label>
                                        <input type="text" id="address" class="form-control" name="address" required="" placeholder="House number and Street name">
                                         <div class="row">
										 <div class="col-sm-6">
                                                <label>Phone *</label>
                                                <input type="text" id="phone" class="form-control" name="phone" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Postcode / ZIP *</label>
                                                <input type="text" id="postalcode" class="form-control" name="postalcode" required="">
                                            </div>
                                            
                                        </div>
										<label>Country / Region *</label>
                                        <input type="text" id="country" class="form-control" name="country" required="">
                                   
                                        
                                        <div class="row">
										<div class="col-sm-6">
                                                <label>State *</label>
                                                <input type="text" id="state" class="form-control" name="state" required="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Town / City *</label>
                                                <input type="text" id="city" class="form-control" name="city" required="">
                                            </div>
                                            
                                        </div>
                                       
                                       
										<label>Amount *</label>
                                        <input type="text" id="amount" class="form-control" name="amount" required="" placeholder="Rs1000">
                                       
                                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      
                    </div>
                </form>
				 <?php } ?>
            </div>
        </div>
    </div>
    <!-- ================> Social section start here <================== -->
    
    <!-- ================> Social section end here <================== -->



    <!-- ================> Footer section start here <================== -->
   <?php include("includes/footer.php"); ?>
   <!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
  <?php include("includes/script.php"); ?>
</body>
</html>

