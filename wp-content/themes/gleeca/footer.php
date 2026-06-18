<footer class="footer_area footer_three">
            <div class="footer_widgets pb_125">
                <ul class="navbar-nav vector_svg">
                    <li><img src="<?php bloginfo('template_directory');?>/img/home-3/svg/footer-l-1.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_directory');?>/img/home-3/svg/footer-l-2.png" alt=""></li>
                    <li><img src="<?php bloginfo('template_directory');?>/img/home-3/svg/footer-l-3.png" alt=""></li>
					<li><img src="<?php bloginfo('template_directory');?>/img/home-3/svg/girl.png" alt=""></li>
                    
                </ul>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <aside class="f_widgets about_wd">
                                <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Gleeca">
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
                            <aside class="f_widgets link_wd">
                                <h3 class="f_title">Quick Links</h3>
                                <ul class="navbar-nav">
                                    <li><a href="<?php echo get_site_url();?>">Home</a></li>
                                    <li><a href="<?php echo get_site_url();?>/features/">Features</a></li>
                                    <li><a href="<?php echo get_site_url();?>/pricing/">Pricing</a></li>
                                    <li><a href="<?php echo get_site_url();?>/contact-us/">Contact</a></li>
                                    
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
                            <aside class="f_widgets link_wd">
                                <h3 class="f_title">Guide</h3>
                                <ul class="navbar-nav">
                                    <li><a href="<?php echo get_site_url();?>/pricing#faqs">FAQs</a></li>
                                    <li><a href="<?php echo get_site_url();?>/knowledge-base/">Knowledge Base</a></li>
                                    <li><a href="<?php echo get_site_url();?>/blog/">Blog</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
							<aside class="f_widgets link_wd">
								<h3 class="f_title">Restaurants</h3>
								<ul class="navbar-nav">
									<li><a href="https://gleeca.com/admin/login/">Restaurant Login</a></li>
                                    <li><a href="https://gleeca.com/admin/register">Restaurant Sign up</a></li>
								</ul>
								
								<div class="social-links mt-3">
									<h3 class="f_title">Follow Us</h3>
								<ul>
									<li><a href="https://www.facebook.com/gleecaofficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/gleecaofficial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://twitter.com/gleeca_official" target="_blank"><i class="fab fa-twitter"></i></a></li>
								</ul>
								</div>
							</aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="right">
                            <ul class="nav">
                                <li><a href="<?php echo get_site_url();?>/privacy-policy/">Privacy Policy</a></li>
                                <li><a href="<?php echo get_site_url();?>/terms-and-condition/">Terms and Conditions</a></li>
                                <li><a href="<?php echo get_site_url();?>/refund-policy">Refund Policy</a></li>
                            </ul>
                        </div>
                        <div class="left">
                            <p>©
                                <script>document.write(/\d{4}/.exec(Date())[0])</script> Copyright - Gleeca (A Product of <a href="https://hyrrokkin.net" target="_blank">Hyrrokkin</a>) | All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
  </div>
	<a id="back-to-top" title="Back to Top" class="show"></a>
    <script src="<?php bloginfo('template_directory');?>/js/jquery-3.5.1.min.js"></script> 
    <script src="<?php bloginfo('template_directory');?>/assets/bootstrap/js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha512-Ah5hWYPzDsVHf9i2EejFBFrG2ZAPmpu4ZJtW4MfSgpZacn+M9QHDt+Hd/wL1tEkk1UgbzqepJr6KnhZjFKB+0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
    var sc_project=12743963; 
    var sc_invisible=1; 
    var sc_security="3ed3530c"; 
    </script>
	<script>
		var back_top_btn = $("#back-to-top");
		$(window).scroll(function () {
			if ($(window).scrollTop() > 300) {
				back_top_btn.addClass("show");
			} else {
				back_top_btn.removeClass("show");
			}
		});
		back_top_btn.on("click", function (e) {
			$("html, body").animate({ scrollTop: 0 }, "300");
		});
		AOS.init();
		function bodyFixed2() {
			var windowWidth = $(window).width();
			if ($("#sticky_doc2").length) {
				if (windowWidth > 576) {
					var tops = $("#sticky_doc2");
					var topOffset = tops.offset().top;
					var blogForm = $('.blog_comment_box');
					var blogFormTop = blogForm.offset().top -670;

					$(window).on("scroll", function () {
						var scrolls = $(window).scrollTop();
						if (scrolls >= topOffset && scrolls <= blogFormTop ) {
							tops.addClass("stick");
						} else {
							tops.removeClass("stick");
						}
					});
					$('.scroll').click(function() {  
						$(window).on("scroll", function () {
							var hackersOffset = $(".scroll").offset().top;
							var scrolls = $(window).scrollTop();
							if (scrolls < hackersOffset) {
								$(".scroll").css("padding-top", "0px");
							}
						})
					});
				}
			}
		}
		bodyFixed2();
		// 		var start = new Date();
		// 		start.setDate(start.getDate());
		// 		start.setHours(0,0,0,0) 
		// 		var endTime = new Date("<?php // the_field('offer_expires_on','option');?>");
		// 		var now   = new Date();
		// 		var diff = endTime.getTime() / 1000 - now.getTime() / 1000;
		// 		var clock = $('#clock1').FlipClock(diff, {
		// 		clockFace: 'DailyCounter',
		// 		countdown: true,
		// 		showSeconds: true
		// 		}); 
	</script>
    <script type="text/javascript"
    src="https://www.statcounter.com/counter/counter.js"
    async></script>
    <noscript><div class="statcounter"><a title="Web Analytics"
    href="https://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="https://c.statcounter.com/12743963/0/3ed3530c/1/"
    alt="Web Analytics"
    referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
    <?php wp_footer(); ?>
</body>
</html>