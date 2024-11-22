
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
    <title>Blog Details</title>
     <?php include("includes/links.php"); ?>
</head>

<body>

    <!-- ================> preloader start here <================ -->
   
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
     <?php include("includes/header.php"); ?>
    <!-- ================> header section end here <================== -->


    <!-- ================> PageHeader section start here <================== -->
   <div class="pageheadersize" style="background-image: url(images/news_fullview.jpg);">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>Blog Details</h3>
                </div>
                <!--<div class="pageheader__right">-->
                <!--    <nav aria-label="breadcrumb">-->
                <!--        <ol class="breadcrumb">-->
                <!--            <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
                <!--            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>-->
                <!--        </ol>-->
                <!--    </nav>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> Blog section start here <================== -->
    <div class="blog blog-style2 blog-single padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <img src="/images/mp.jpg" alt="blog thumb">
                                        </div>
                                        <div class="blog__content">
                                           <h4>PM Narendra Modi pays tribute to Dayananda Saraswathi on his birth aniversary</h4>
                                            <ul class="blog__content-metapost">
                                                <li><i class="far fa-calendar"></i>10 Dec, 2018</li>
                                                
                                            </ul>
                                            <p>Prime Minister Narendra Modi today paid tributes to Hindu reformer and Arya Samaj founder Dayananda Saraswati on his birth anniversary and said his emphasis on social reforms made him a personality ahead of his time.</p>
                                           <p>Tributes to the great Swami Dayananda Saraswati ji on his birth anniversary. Dayananda Saraswati ji made a remarkable contribution to education. His emphasis on social reform made him a personality ahead of his time, Modi tweeted.</p>
                                          
											<div class="blog__tags">
                                                <div class="blog__tags-left">
                                                    <div class="blog__tags-title">
                                                        <p>Tags:</p>
                                                    </div>
                                                    <div class="blog__tags-details">
                                                        <ul>
                                                            <li><a href="pmnarendramodi-fullview.php">AryaSamaj</a></li>
                                                            <li><a href="pmnarendramodi-fullview.php">Wedding Rituals</a></li>
                                                            <li><a href="pmnarendramodi-fullview.php">vedic Education</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="blog__tags-right">
                                                    <div class="blog__tags-title">
                                                        <p>Share:</p>
                                                    </div>
                                                    <div class="blog__tags-details">
                                                        <div class="footer__social">
                                                            <ul>
                                                               <li><a href="ps://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                  
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="blog__respond">
                                    <div class="section__header">
                                        <h2>Leave a Comment</h2>
                                    </div>
                                    <div class="blog__respond-details">
														<?php

$email_to ='krishnaleelak@openpixelweb.com'; //put your email address here
$subject ='AryaSamaj Nagaram'; //put the email sibject line prefix here
$email_from ='donotreply@aryasamajnagaram.org'; //put the email address that this form will be sent from
$email_from_nice ='AryaSamaj Nagaram'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$name = $_POST['name'];
	
    $email = $_POST['email'];
	$phone = $_POST['phone']; 
	
    $message = $_POST['message']; 
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "Name: $name\n\n Email Address: $email\n\n Phone Number: $phone\n\n Message: $message ";
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
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you for your Comment,<br>We will get back to you soon.</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>
                                        <form class="contact-form" action="" method="post">
                                            <input name="name" type="text" value="" placeholder="Name">
                                            <input name="email" type="text" value="" placeholder="Email">
                                            <input id="phone" name="phone" type="text" value="" placeholder="Contact Number" class="w-100">
                                            <textarea id="message" name="message" rows="10" placeholder="Type Here Your Comment"></textarea>
                                            
                                            <button type="submit" class="default-btn move-right"><span>Submit</span></button>
                                        </form>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            
                            <div class="sidebar__tab">
                                <div class="section__header">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="section__wrapper">
                                    
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                                            <div class="footer__post">
                                                <div class="section__wrapper">
                                                    <div class="footer__post-item">
                                                        <div class="footer__post-inner">
                                                            <div class="footer__post-thumb">
                                                                <a href="vhpdemans-fullview.php"><img src="/images/oo.jpg" alt="footer post"></a>
                                                            </div>
                                                            <div class="footer__post-content">
                                                                <a href="vhpdemans-fullview.php"><h6>VHP demands probe into activities of social activist Swami Agnivesh</h6></a>
                                                                <p><i class="far fa-calendar-alt"></i> 12 Jul, 2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="footer__post-item">
                                                        <div class="footer__post-inner">
                                                            <div class="footer__post-thumb">
                                                                <a href="rajnathsing-fullview.php"><img src="/images/rr.jpg" alt="footer post"></a>
                                                            </div>
                                                            <div class="footer__post-content">
                                                                <a href="rajnathsing-fullview.php"><h6>Rajnath Singh lauds Arya Samaj for promoting girls' education, clean environment.</h6></a>
                                                                <p><i class="far fa-calendar-alt"></i>12 Jul, 2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="footer__post-item">
                                                        <div class="footer__post-inner">
                                                            <div class="footer__post-thumb">
                                                                <a href="dayanand-fullview.php"><img src="/images/ll.jpg" alt="footer post"></a>
                                                            </div>
                                                            <div class="footer__post-content">
                                                                <a href="dayanand-fullview.php"><h6>Maharishi Dayanand Jayanti 2018: Date, Significance and History of Arya Samaj Founder</h6></a>
                                                                <p><i class="far fa-calendar-alt"></i> 12 Jul, 2018</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                               
                                
                           
							
                            <div class="sidebar__catagory">
                                <div class="section__header">
                                    <h2>Categories</h2>
                                </div>
                                <div class="section__wrapper">
                                    <ul>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Vedic Education</a></li>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Wedding</a></li>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Yoga Classes</a></li>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Library</a></li>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Sunday Satsang</a></li>
                                        <li><a href="pmnarendramodi-fullview.php"><i class="fas fa-chevron-right"></i>Youth Empowerment</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Blog section end here <================== -->



    <!-- ================> Social section start here <================== -->
   
    <!-- ================> Social section end here <================== -->



    <!-- ================> Footer section start here <================== -->
   <?php include("includes/footer.php"); ?>
	<!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <?php include("includes/script.php"); ?>
</body>
</html>