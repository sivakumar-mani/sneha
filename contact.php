

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>SNEHA ENTERPRISES</title>
    <meta name="robots" content="noindex,nofollow">
    <!-- Meta Tags -->
    <meta name="description" content="">
    <!--  Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- Facebook OG Meta Tags -->
    <meta property="og:url" content="https://angrystudio.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <!-- Twitter Cards Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/validate.js"></script>
</head>

<body>
    <header class="hk-header">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light hk-navbar">
            <div class="container">
                <!--<a class="navbar-brand" href="#"><img src="assets/images/brand.png"></a>-->
                <a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="navbar-collapse hk-offcanvas" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Digital Marketing</a>
                                <a class="dropdown-item" href="#">UI Design</a>
                                <a class="dropdown-item" href="#">Graphics Design</a>
                                <a class="dropdown-item" href="#">Branding</a>
                                <a class="dropdown-item" href="#">WordPress Websites</a>
                                <a class="dropdown-item" href="#">Custom Web Apps</a>
                                <a class="dropdown-item" href="#">App Development</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i> My Account</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Edit Account</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul> -->
                    <span class="navbar-text hk-header-social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  </span>
                </div>
            </div>
        </nav>
    </header>

  
    <!-- Start Contact Area -->
    <section id="contact-us" class="contact-us section">
        <div class="container ">
            <div class="contact-head ">
                <div class="row ">
                    <div class="col-12 ">
                        <div class="section-title ">
                            <h2>Contact Us</h2>
                            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p> -->
                        </div>
                    </div>
                </div>
         
                		<?php 
                       
                        //  echo $_SESSION['$id'];
                        if (isset($_SESSION['$id'])){
                            $print =$_SESSION['$id'];
                            echo "<p class='successMessage fa fa-check' id='success'> $print </p>";
                            unset ($_SESSION['$id']);
                        }?>
            </div>
        </div>
    </section>
    <section id="contact-us" class="contact-us section-bg">
        <div class="container ">
            <div class="contact-head ">

                <div class="contact-info ">
                    <div class="row ">
                        <div class="col-sm-3 ">
                            <div class="single-info-head ">
                                <!-- Start Single Info -->
                                <div class="single-info ">
                                    <i class="lni lni-map "></i>
                                    <h3>Address</h3>
                                    <ul>
                                        <li>300, GST Road, Chromepet, Chennai -44</li>
                                    </ul>
                                </div>
                                <!-- End Single Info -->
                                <!-- Start Single Info -->
                                <div class="single-info ">
                                    <i class="lni lni-phone "></i>
                                    <h3>Call us on</h3>
                                    <ul>
                                        <li><a href="">+91 99000 90000</a></li>
                                        <li><a href=" ">+91 99000 90000</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Info -->
                                <!-- Start Single Info -->
                                <div class="single-info ">
                                    <i class="lni lni-envelope "></i>
                                    <h3>Mail at</h3>
                                    <ul>
                                        <li><a href="mailto:support@sneha.com ">support@sneha.com</a>
                                        </li>
                                        <li><a href="mailto:career@shopgrids.com ">career@sneha.com</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Info -->
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="contact-form-head ">
                                <div class="form-main ">
                                    <div class=" ">
                                    <form name="myForm" id="needs-validation" action="snehaphp/model/contact_class.php" method="post" onsubmit="return validate();" required>

                                            <div class="row justify-content-between text-left ">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_subject">Subject <sup>*</sup></label>
                                                        <select class="form-control demoInputBox" id="comp_subject" name="comp_subject" onfocusout="myFunction()" required>
                                                              <option>Select Subject</option>
                                                              <option value="complaint">Complaint</option>
                                                              <option value="enquiry">Enquiry</option>
                                                              <option value="others">Others</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                    Please selected any File.
                  </div>
                                                    </div>
                                                    <p id="demo"></p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_name">Reporter Name <sup>*</sup></label>
                                                        <input type="text" class="form-control demoInputBox" id="comp_name" name="comp_name" placeholder="Please Enter your name" required>
                                                        <span id="comp_name-info" class="info"></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row justify-content-between text-left ">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_email">Email address <sup>*</sup></label>
                                                        <input type="email" class="form-control demoInputBox" id="comp_email" name="comp_email" placeholder="name@example.com" required>
                                                        <span id="comp_email-info" class="info"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_number">Contact Number <sup>*</sup></label>
                                                        <input type="number" class="form-control demoInputBox" id="comp_number" name="comp_number" placeholder="Please enter primary Number" required>
                                                        <span id="comp_number-info" class="info"></span>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="row justify-content-between text-left ">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_bankname">Bank Name <sup>*</sup></label>
                                                        <input type="text" class="form-control demoInputBox" id="comp_bankname" name="comp_bankname" placeholder="Please enter Bank Name" required>
                                                        <span id="comp_bankname-info" class="info"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="comp_branch">Branch <sup>*</sup></label>
                                                        <input type="text" class="form-control demoInputBox" id="comp_branch" name="comp_branch" maxlength="10" placeholder="Please enter branch location" required>
                                                        <span id="comp_branch-info" class="info"></span>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row justify-content-between text-left ">

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="comp_baddress">Branch Address <sup>*</sup></label>  <span id="comp_baddress-info" class="info"></span>
                                                        <textarea class="form-control demoInputBox" id="comp_baddress" name="comp_baddress" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                      
                                            <div class="row justify-content-between text-left ">
                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <label for="comp_comments">Message <sup>*</sup></label><span id="comp_msg-info" class="info"></span>
                                                        <textarea class="form-control demoInputBox" id="comp_msg" name="comp_msg" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-sm-12 d-flex w-100 justify-content-between" >                                                  
                                                    <button type="reset" class="btn btn-dark">RESET</button>
                                                    <button type="submit" class="btn btn-primary">SEND</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Area -->

    <footer class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 col-lg-4 ">
                    <div class="footer-col ">
                        <h3 class="footer-title ">About</h3>
                        <p class="mb-0 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rhoncus enim accumsan, pellentesque ex vitae, lobortis lorem. Cras et suscipit mauris. Aliquam ultrices diam ullamcorper dui tempus laoreet. </p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 ">
                    <div class="footer-col ">
                        <h3 class="footer-title ">Products</h3>
                        <ul class="list-unstyled footer-list mb-0 ">
                            <li><a href="# ">CCTV</a></li>
                            <li><a href="# ">BIO Metrics</a></li>
                            <li><a href="# ">Burgular Alarms</a></li>
                            <li><a href="# ">Door Sensor</a></li>
                            <li><a href="# ">Alarms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 ">
                    <div class="footer-col ">
                        <h3 class="footer-title ">Support</h3>
                        <ul class="list-unstyled footer-list mb-0 ">
                            <li><a href="# ">Contact</a></li>
                            <li><a href="# ">Support</a></li>
                            <li><a href="# ">Forum</a></li>
                            <li><a href="# ">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 ">
                    <div class="footer-col ">
                        <h3 class="footer-title ">Contact</h3>
                        <p><i class="fas fa-home mr-2 "></i> 342 Maxwell Lane, Plangton, 128231</p>
                        <p><a href="tel:+14336331111 "><i class="fas fa-phone mr-2 "></i> +1-434-633-1111</a> </p>
                        <p class="mb-0 "><a href="mailto:contact@angrystudio.com "><i class="far fa-envelope mr-2 "></i> contact@angrystudio.com</a> </p>
                    </div>
                </div>
            </div>
            <div class="row footer-credits ">
                <div class="col-sm-12 col-md-6 justify-content-center align-self-center ">
                    <p class="mb-0 ">2020- <script>document.write(new Date().getFullYear())</script> &copy;  <a href="# ">SNEHA ENTERPRISES</a></p>
                </div>
                <div class="col-sm-12 col-md-6 ">
                    <div class="footer-credits-nav ">
                        <ul class="nav justify-content-end ">
                            <li class="nav-item "><a href="# " class="nav-link footer-fb ">TOS</a></li>
                            <li class="nav-item "><a href="# " class="nav-link footer-ig ">Privacy</a></li>
                            <li class="nav-item "><a href="# " class="nav-link footer-yt ">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js "></script>
    <script src="assets/js/bootstrap.min.js "></script>
    <script>
        $(function() {
            'use strict'

            $('[data-toggle="offcanvas "]').on('click', function() {
                $('.hk-offcanvas').toggleClass('open')
            })
        })
    </script>
</body>

</html>