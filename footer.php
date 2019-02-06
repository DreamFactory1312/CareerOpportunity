<!--Bottom-->
    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">

            <!--row-fluids-->
            <div class="row-fluid">

                <!--Contact Form-->
                <div class="span3">
                    <h4>ADDRESS</h4>
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> support@email.com
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Website:</strong> www.domain.com
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Toll Free:</strong> 631-409-3105
                        </li>
                    </ul>
                </div>
                <!--End Contact Form-->

                <!--Important Links-->
                <div id="tweets" class="span3">
                    <h4>OUR COMPANY</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>  
                </div>
                <!--Important Links-->

                <!--Archives-->
                <div id="archives" class="span3">
                    <h4>ARCHIVES</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">December 2012 (1)</a></li>
                            <li><a href="#">November 2012 (5)</a></li>
                            <li><a href="#">October 2012 (8)</a></li>
                            <li><a href="#">September 2012 (10)</a></li>
                            <li><a href="#">August 2012 (29)</a></li>
                            <li><a href="#">July 2012 (1)</a></li>
                            <li><a href="#">June 2012 (31)</a></li>
                        </ul>
                    </div>
                </div>
                <!--End Archives-->

                <!--Start Developer Form-->
                <div class="span3">
                    <h4>Developer</h4>
                    <ul class="unstyled address">
					    <li>
                            <i class="icon-name"></i><strong>Md. Juyel Rana</strong><br />Patuakhali Science And Technology University <br />Faculty of Computer Science And Engineering
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> juyelcse11th@gmail.com
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Website:</strong> www.myetechnical.blogspot.com
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Phone:</strong> +8801738526656
                        </li>
                    </ul>
                </div>
                <!--End Developer Form-->

            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->

    </section>
    <!--/bottom-->

    <!--Footer-->
    <footer id="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span5 cp">
                    &copy; 2016 <a target="_blank" href="index.php" title="Career Opportunity">Carrer Opportunity</a>. All Rights Reserved.
                </div>
                <!--/Copyright-->

                <div class="span6">
                    <ul class="social pull-right">
                        <li><a href="https://www.facebook.com/"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="icon-pinterest"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="icon-google-plus"></i></a></li>                       
                        <li><a href="https://www.youtube.com/"><i class="icon-youtube"></i></a></li>
                        <li><a href="https://www.tumblr.com/"><i class="icon-tumblr"></i></a></li>                        
                        <li><a href="https://dribbble.com/"><i class="icon-dribbble"></i></a></li>
                        <li><a href="https://en.wikipedia.org/wiki/RSS"><i class="icon-rss"></i></a></li>
                        <li><a href="https://github.com/"><i class="icon-github-alt"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="icon-instagram"></i></a></li>                   
                    </ul>
                </div>

                <div class="span1">
                    <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                </div>
                <!--/Goto Top-->
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <!--  Login form -->
    <div class="modal hide fade in" id="loginForm" aria-hidden="false">
        <div class="modal-header">
            <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
            <h4>Login Form</h4>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
            <form class="form-inline" action="index.html" method="post" id="form-login">
                <input type="text" class="input-small" placeholder="Email">
                <input type="password" class="input-small" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <a href="#">Forgot your password?</a>
        </div>
        <!--/Modal Body-->
    </div>
    <!--  /Login form -->

    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Required javascript files for Slider -->
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <!-- /Required javascript files for Slider -->
	
	<!-- Auto dropdown menu, just touch the cursor and then dropdown strat -->
	<!-- <script>
        $(function() {
            $(".dropdown").hover(
                function(){ $(this).addClass('open') },
                function(){ $(this).removeClass('open') }
             );
        });
    </script> -->
	<!-- Auto dropdown menu, just touch the cursor and then dropdown strat -->
	
	<script>
        $('.dropdown').hover(
            function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
            }, 
            function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
            }
        );

        $('.dropdown-menu').hover(
            function() {
                $(this).stop(true, true);
            },
            function() { 
                $(this).stop(true, true).delay(200).fadeOut();
            }
        );
    </script>
	
    </body>
</html>