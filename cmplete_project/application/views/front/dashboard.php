<?php $this->load->view('front/header');?>
<style type="text/css">
    input[type="text"],input[type="password"],input[type="number"],input[type="email"], textarea {
    display: block;
    margin: 0 auto;
    width: 100%;
    background: transparent;
    border: 1px solid #fff;
    padding: 12px 15px;
    margin-bottom: 30px;
}

</style>
        <div class="content-block" id="contact">
            <div class="overlay-3">
                <header class="block-heading cleafix text-center">
                    <h1>Sign Up /<?php echo  $this->session->userdata('email');?></h1>
                    <!-- <p>Feel Free to Contact</p> -->
                </header>
                <div class="block-content text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInLeft">
                                <form class="contact-form" action="<?php echo base_url();?>signup/signup_save" method="post">
                                    <input type="text" name="name" placeholder="Username" required autocomplete="off">
                                    <input type="password" name="password" placeholder="Password" required autocomplete="off">
                                    <input type="email" name="email" placeholder="Email-id" required>
                                    <input type="text" name="address" placeholder="Address" required>
                                    <input type="number" name="mob_no" placeholder="Mobile-no" required>
                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                            <div class="col-md-6 wow animated fadeInRight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-info">
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <p><strong> Address:</strong> Gurgoan Haryana,Sector-108,Raheja Vedanta,122001.
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-mobile"></i>
                                                </div>
                                                <p><strong> Cell No:</strong> 9151744638 </p>
                                            </div>
                                            <div class="clearfix">
                                                <div class="rotated-icon">
                                                    <div class="sqaure-nebir"></div>
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <p>
                                                    <strong> Email:</strong> poojaguptacs11@gmail.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                  <div class="row">
                                    <ul class="social-box">
                                        <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="g-plus-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="linkedin-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- block-content -->
            </div>  <!-- overlay-3 -->
        </div>  <!-- content-block -->

       <?php $this->load->view('front/footer');?>
       