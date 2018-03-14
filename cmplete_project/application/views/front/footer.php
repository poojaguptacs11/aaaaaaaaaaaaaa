								

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">&copy; 2014 Developer</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By <a href="http://themewagon.com/" target="_blank">ThemeWagon</a></div>
                    </div>
                </div>
            </div>
        </footer>	<!-- site-footer -->


       <script>
            new WOW().init();
        </script>

        <script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.actual.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.isonscreen.js"></script>
       
        <script src="js/main.js"></script>

        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                            0:{
                                items:1,
                            },
                            600:{
                                items:1,
                            },
                            1000:{
                                items:1,
                            }
                    }
                })
            });
        </script>

    </body>
</html>
