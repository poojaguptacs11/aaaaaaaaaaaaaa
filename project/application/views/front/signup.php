<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Poject</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
        <link rel="stylesheet" type="<?php echo base_url();?>text/css" media="all" href="assets/css/style-projects.css">
        

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>


    <body>

        <!-- Header -->
        
        <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
            <div class="container">
        
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     
                </div>
                <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="index">Home</a>
                    </li>
                    <li>
                        <a href="about">About</a>
                    </li>
                <li>
                        <a href="blog">Blog</a>
                    </li>
                    <li>
                        <a href="team">Team</a>
                    </li>
                    <li>
                        <a href="login">Login</a>
                    </li>
                    <li class="active">
                        <a href="Signup">Signup</a>
                    </li>
                </ul>         
            </div>
            <hr style="border: black solid 1px">
        
                <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                  
                </div>
            </div>
        </nav>

        <!--End Header -->


        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                 
                   
                <div class="col-lg-4 col-lg-offset-1">
             <h3><i class="fa fa-map-marker"></i> Contact us</h3><hr>
                    <p class="block-author"> Associates</p>
                    <p>Address: Raheja Vedanta Sector-108  </p>
                    <p>Gurgoav Haryana</p>
                       <p>Zip: 122001</p>
                    <p>Phone: 9151744638</p>
                 
                    <em class="block-author">Email: poojaguptacs11@gmail.com </em> <br>
                    <br>
                    <h3><i class="fa fa-external-link"></i> Links</h3><hr>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_skype.png" alt="Skype"></a>
                        Call us
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_facebook.png" alt="Facebook"></a>
                        Like us
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_twitter.png" alt="Twitter"></a>
                        Follow us
                    </div>
                    <br>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            
                        <form action="<?php base_url();?>signup/signup_save" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">NAME *</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">PASSWORD *</label>
                                    <input type="password" class="form-control" name="password" id="email" placeholder="password ">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">E-MAIL *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">ADDRESS *</label>
                                    <input type="text" class="form-control" name="address" id="email" placeholder="Enter Your Address">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">MOBILE-NO *</label>
                                    <input type="num" class="form-control" name="mobile_no" id="email" placeholder="Enter Your Mobile-no">
                                </div>
                                
                        <center> 
                            <button type="submit" class="btn btn-success">Submit</button>
                        </center>
                          </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->


    <!-- Footer -->
   
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
