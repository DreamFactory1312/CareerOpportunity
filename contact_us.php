<?php include("header.php")?>        
<!-- /header -->

    <!--Start Latest Opportunity-->
    <section class="container">
	    <div class="row-fluid">
		    <!--Latest Opportunity-->
		    <div class="span8">
			    <h3 class="text-uppercase" style="color:black; margin-left:30px;">Contact Form</h3>
			</div>
			
			<div class="span8">
                <h4>To contact us, please fill up the form bellow or mail us mjuyelrana@gmail.com</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Name(<span style="color: red">*</span>)</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Name">
                        <label>Email Address(<span style="color: red">*</span>)</label>
                        <input type="email" class="input-block-level" required="required" placeholder="Your email address">
						<label>Subject</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Subject">
                    </div>
                    <div class="span7">
                        <label>Message(<span style="color: red">*</span>)</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>  <!-- span8 -->
		
			
			<aside class="row-fluid">
		        <div class="span4">
				
                    <!-- Latest Jobs -->					
					
					<!--Facebook like Option-->
					<div id="like_us_on_facebook_header">
					    <div class="header">
					        <h4 style="color:white; margin-left:20px;">Like Us On Facebook</h4>
					    </div>
					    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcareeropportunity24%2F&tabs=timeline&width=380&height=320&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="380" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
					<!--Facebook like Option-->					
				<!--Latest News-->
					
				</div><!-- span4 -->
		    </aside>	<!-- row-fluid -->
			
		</div> <!-- row-fluid -->
    </section><!-- container -->
    <!--End Latest Opportunity-->

<?php include("footer.php")?>