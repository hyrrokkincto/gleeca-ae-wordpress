<?php
   /**
    * Template Name: Pricing New Template 
    */
   get_header(); ?>
<style> 
   .pricing-container .lead {
   font-size: 1.2rem;
   font-weight: 500;
   }
   .pricing-container .pricing-bg {
   position: absolute;
   left: 48%;
   top: -300px;
   -webkit-transform: translateX(-50%);
   -o-transform: translateX(-50%);
   transform: translateX(-50%);
   max-width: 950px;
   z-index: -1;
   }
   .pricing-container .card {
   position: relative;
   }
   .pricing-container .card-deck .card:last-child:after {
   background-image: url(/wp-content/themes/gleeca/img/popular-tag.svg);
   position: absolute;
   top: -65px;
   right: -40px;
   content: "";
   width: 125px;
   height: 100%;
   background-repeat: no-repeat;
   background-size: 85%;
   }
   .pricing-container .card-body {
   background-color: #fff;
   height: 100%;
   display: flex;
   -ms-flex-pack: justify;
   justify-content: space-between;
   -ms-flex-direction: column;
   flex-direction: column;
   position: relative;
   overflow: hidden;
   border: 1px solid rgba(90, 122, 190, .12);
   border-radius: 0.5rem;
   -webkit-box-shadow: 0 3px 0 0 rgb(90 122 190 / 12%);
   box-shadow: 0 3px 0 0 rgb(90 122 190 / 12%);
   }
   .pricing-container .card-body:focus,
   .pricing-container .card-body:hover,
   .pricing-container .card-body.active {
   -webkit-box-shadow: 0 1px 1px 0 rgb(90 122 190 / 10%), 0 10px 20px 0 rgb(90 122 190 / 20%);
   box-shadow: 0 1px 1px 0 rgb(90 122 190 / 10%), 0 10px 20px 0 rgb(90 122 190 / 20%);
   }
   .pricing-container .card-body.active .btn-outline-primary {
   background-color: #007bff;
   color: #fff;
   }
   .pricing-container .card-body .title {
   color: #2d3440;
   }
   .pricing-container .card-body .sub-title {
   color: #7c899f;
   }
   .pricing-container .card-body ul li {
   margin-bottom: 1rem;
   display: flex;
   align-items: baseline;
   text-align: left;
   }
   .pricing-container .card-body ul li i {
   color: #0067ff;
   padding-right: 8px;
   }
   .text-muted {
   font-size: 1.2rem !important;
   text-decoration: line-through;
   } 
   .footer-countdown{
   background: #0067ff; 
   position: fixed;
   bottom: 0;
   left: 0;
   right: 0; 
   padding: 10px 0;
   padding-bottom: 6px;
   z-index: 5;
   } 
   .footer-countdown .timer, .footer-countdown .countdown-title{
   color: #fff;
   line-height: initial;
   }
   .offer-price h1{
   font-size: 26px; 
   }
   .regular-price h1{
   font-size: 26px; 
   color: #6c757d!important;
   }
   .regular-price{
   position: relative;
   color: #6c757d!important;
   }
   .regular-price:after {
   content: " ";
   display: block;
   width: 85%;
   border-top: 2px solid #6c757d;
   height: 28px;
   position: absolute;
   bottom: 0;
   left: 19px;
   transform: rotate(-26deg);
   }
   @media (max-width: 1199.98px) { 
   .footer-countdown .countdown-title, 
   .footer-countdown .timer{
   font-size: 28px; 
   margin-bottom: 5px !important;
   }
   }
   @media (max-width: 768px) { 
   .footer-countdown .countdown-title, 
   .footer-countdown .timer{
   font-size: 18px; 
   margin-bottom: 5px !important;
   }
   }
   @media (max-width: 575.98px) { 
   .footer-countdown .timer span {
   font-size: 18px !important;
   }
   .footer-countdown .timer b{
   font-size: 24px;
   margin-bottom: 10px !important;
   }
   }
</style>
<div class="doc_banner_area search-banner-light-2">
   <div class="container">
      <div class="breadcrumb_text">
         <h1><?php the_field('banner_main_title'); ?></h1>
         <p> <?php the_field('banner_description'); ?></p>
      </div>
   </div>
   <div class="text-center">
      <div class="d-flex align-items-center justify-content-center mt-40"><a href="https://gleeca.com/admin/register" onclick="gtag_report_conversion_pricing()" class="btn action_btn btnhover thm_btn mb-3" type="submit">Get Started</a>
      </div>
   </div>
</div>
<div class="container pb_100">
   <div class="col-lg-12">
      <article id="post" class="documentation_info">
         <div class="documentation_body" id="documentation">
            <div class="main_title text-center">
               <h2 data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000"><?php the_field('s1-title'); ?></h2>
               <p><?php the_field('s1-description'); ?></p>
            </div>
            <div class="pricing-container">
               <!-- New Start -->
               <div class="card-deck mb-3 text-center">
                  <div class="card mb-4 box-shadow">
                     <div class="card-header" style="background-color: rgba(0,163,255,0.15);">
                        <h3 class="my-0 font-weight-bold">Gleeca Free</h3>
                        <p class="sub-title"><u class="text-danger"><b>You configure</b></u> Gleeca by yourself</p>
                     </div>
                     <div class="card-body">
                        <h1 class="card-title pricing-card-title">ZERO <small class="text-muted"></small></h1>
                        <h6 class="pb-3 text-danger border-bottom mt-3">Instant Onboarding. GoLive at your pace. It's Free forever for startup brands always.</h6>
                        <ul class="list-unstyled">
                           <li> 
                              <i class="fas fa-check"></i> <span class="text-danger">500 Orders/month</span>
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Dine-in & Takeaway POS
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Online Ordering Website
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> QR Code Digital Menu
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Order Ticket (KOT)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Token Management System
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Payment Online
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Customer Data
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> E-bill (10 SMS Free)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Basic Accounting
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Single Kitchen
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Printer
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Ticket Centre Support
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Kitchen Display System
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Multi Kitchen & Printers
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Additional Branches <br><br>
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Phone/Remote Desktop Support
                           </li>
                         
                           <li> 
                              <i class="fas fa-times text-danger"></i> Waiter Mobile App
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> User App in Your Store Name
                           </li>
                          
                        </ul>
                        <a href="https://gleeca.com/admin/register/"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button></a>
                        <p class="pt-2">Zero Renewal Cost</p>
                     </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                     <div class="card-header" style="background-color: rgb(255 146 29 / 15%);">
                        <h3 class="my-0 font-weight-bold">Gleeca Standard</h3>
                        <p class="sub-title"><u class="text-success"><b>We configure</b></u> Gleeca for you</p>
                     </div>
                     <div class="card-body">
                        <div class="row mb-3">
                           <div class="col-md-6" style="border-right: 2px dashed #ddd;">
                              <div class="offer-price">
                                 <span>Offer Price</span>
                                 <h1>INR 6000</h1>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="regular-price">
                                 <span>Regular Price</span>
                                 <h1>
                                    INR 8000
                                 </h1>
                              </div>
                           </div>
                        </div>
                        <h6 class="pb-3 text-success border-bottom mt-3">Instant Onboarding. GoLive with-in 24hrs*</h6>
                        <ul class="list-unstyled">
                           <li> 
                              <i class="fas fa-infinity"></i> <span class="text-primary">Unlimited Orders</span>
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Dine-in & Takeaway POS
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Online Ordering Website
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> QR Code Digital Menu
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Order Ticket (KOT)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Token Management System
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Payment Online
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Customer Data
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> E-bill (1000 SMS Free)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Basic Accounting
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Single Kitchen
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Printer
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Ticket Centre Support
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Display System
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Multi Kitchen & Printers
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Additional Branches @ Rs.5000/branch
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Phone/Remote Desktop Support
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> Waiter Mobile App
                           </li>
                           <li> 
                              <i class="fas fa-times text-danger"></i> User App in Your Store Name
                           </li>
                           
                        </ul>
						 <a href="<?php echo get_site_url();?>/get-demo/"><button type="button" class="btn btn-lg btn-block btn-primary">Request Demo</button></a>
                        <p class="pt-2">Renews at Rs.5000 + GST</p>
                     </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                     <div class="card-header" style="background-color:rgba(41,191,48,0.15)">
                        <h3 class="my-0 font-weight-bold">Gleeca Plus</h3>
                        <p class="sub-title"><u class="text-success"><b>We configure</b></u> Gleeca for you</p>
                     </div>
                     <div class="card-body">
                        <div class="row mb-3">
                           <div class="col-md-6" style="border-right: 2px dashed #ddd;">
                              <div class="offer-price">
                                 <span>Offer Price</span>
                                 <h1>INR 8,500</h1>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="regular-price">
                                 <span>Regular Price</span>
                                 <h1>
                                    INR 15,000
                                 </h1>
                              </div>
                           </div>
                        </div>
                        <h6 class="pb-3 text-success border-bottom mt-3">Instant Onboarding. GoLive with-in 24hrs*</h6>
                        <ul class="list-unstyled">
                           <li> 
                              <i class="fas fa-infinity"></i> <span class="text-primary">Unlimited Orders</span>
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Dine-in & Takeaway POS
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Online Ordering Website
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> QR Code Digital Menu
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Order Ticket (KOT)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Token Management System
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Payment Online
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Collect Customer Data
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> E-bill (5000 SMS Free)
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Basic Accounting
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Single Kitchen
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Printer
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Ticket Centre Support
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Kitchen Display System
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Multi Kitchen & Printers
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Additional Branches @ Rs.4000/branch
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Phone/Remote Desktop Support
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> Waiter Mobile App
                           </li>
                           <li> 
                              <i class="fas fa-check"></i> User App in Your Store Name*
                           </li>
                           
                        </ul>
						 <a href="<?php echo get_site_url();?>/get-demo/"><button type="button" class="btn btn-lg btn-block btn-primary">Contact Us</button></a>
                        <p class="pt-2">Renews at Rs.8000 + GST</p>
                     </div>
                  </div>
               </div>
               <p>
				   <small>
					   * Branded User App: Android & iOS app development in your restaurant name is in progress and will be ready to launch by Apr 2025. No additional charges for Gleeca Plus users<br>
					   </small>
               </p>
            </div>
			 
            <!-- <div class="row">
               <?php // if (have_rows('s1-details')) : while (have_rows('s1-details')) : the_row(); ?>
               		<div class="col-xl-4 col-sm-6 mt-3">
               			<div class="media documentation_item">
               				<div class="icon" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
               					<img src="<?php // the_sub_field('image'); ?>" alt="">
               				</div>
               				<div class="media-body">
               					<a href="<?php // the_sub_field('view_page_link'); ?>">
               						<h5><?php // the_sub_field('title'); ?></h5>
               					</a>
               					<p><?php // the_sub_field('description'); ?></p>
               				</div>
               			</div>
               		</div>
               <?php // endwhile;
                  // endif; ?>
               </div> -->
            <!-- <div class="col-md-12 form-group text-center"><a href="https://gleeca.in/features/" class="btn action_btn btnhover thm_btn" type="submit">Explore 30+ Features</a>
             </div> -->
         </div>
      </article>
   </div>
</div>
<section class="common_question_area">
   <div class="container">
      <div class="main_title text-center">
         <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php the_field('s2-title'); ?></h2>
         <p class="wow fadeInUp" data-wow-delay="0.4s"><?php the_field('s2-description'); ?></p>
      </div>
      <div class="question_menu">
         <div class="topic_list_inner">
            <div class="tab-content" id="myTabContent2">
               <div class="tab-pane fade show active" id="question1" role="tabpanel" aria-labelledby="question1-tab">
                  <div class="row">
                     <?php if (have_rows('s2-details')) : while (have_rows('s2-details')) : the_row(); ?>
                     <div class="col-lg-4 col-md-6 mt-3">
                        <div class="topic_list_item wow FadeInUp" data-wow-delay="0.2s">
                           <img src="<?php the_sub_field('image'); ?>" alt="" class="mb-15 addon-icons">
                           <h4><?php the_sub_field('title'); ?></h4>
                           <p><?php the_sub_field('description'); ?> </p>
                           <div class="dropcap_content">
                              <p><span><?php the_sub_field('price'); ?></span></p>
                           </div>
                           <a href="<?php the_sub_field('page_link'); ?>" class=" doc_border_btn">How it works?<i class="arrow_right"></i></a>
                        </div>
                     </div>
                     <?php endwhile;
                        endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="container">
   <div class="col-lg-12 col-md-12 doc-middle-content" id="faqs">
      <div id="post" class="shortcode_info">
         <div class="shortcode_title text-center">
            <h1><?php the_field('faqs_title'); ?></h1>
            <p><?php the_field('faqs_title_description'); ?></p>
         </div>
         <div class="toggle_shortcode">
            <?php $item = 1;
               if (have_rows('faqs_details')) : ?>
            <div class="doc_accordion" id="accordionExample">
               <?php while (have_rows('faqs_details')) : the_row();
                  if ($item == 1) {
                  	$collapsed = '';
                  	$aria = 'aria-expanded="true"';
                  	$collapseClass = ' show';
                  } else {
                  	$collapsed = 'collapsed';
                  	$aria = 'aria-expanded="false"';
                  	$collapseClass = '';
                  }
                  ?>
               <div class="accordion-item">
                  <h2 class="card-header" id="heading<?php echo $item; ?>">
                     <button type="button" class="btn toggle_btn <?php echo $collapsed; ?>" data-toggle="collapse" data-target="#collapse<?php echo $item; ?>" <?php echo $aria; ?> aria-controls="collapse<?php echo $item; ?>">
                     <?php echo get_sub_field('title'); ?>
                     </button>
                  </h2>
                  <div id="collapse<?php echo $item; ?>" class="accordion-collapse collapse  <?php echo $collapseClass; ?>" aria-labelledby="heading<?php echo $item; ?>" data-parent="#accordionExample">
                     <div class=" toggle_body">
                        <?php echo get_sub_field('description'); ?>
                     </div>
                  </div>
               </div>
               <?php $item++;
                  endwhile;
                  wp_reset_postdata();
                  else :  ?>
               <p><?php _e('No Data Found'); ?></p>
               <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="text-center">
         <div class="col-md-12 form-group mt-40"><a href="https://gleeca.com/admin/register" onclick="gtag_report_conversion_pricing()" class="btn action_btn btnhover thm_btn" type="submit">Sign up</a>
         </div>
      </div>
   </div>
</div>
<!-- <div class="footer-countdown">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-9">
            <div class="row g-3 align-items-center">
               <div class="col-md-4 col-lg-5">
                  <div class="d-flex justify-content-center align-items-center">
                     <h2 class="countdown-title mb-1"><span class="text-warning">Price Increases in</span></h2>
                  </div>
               </div>
               <div class="col-md-8 col-lg-7">
                  <div class="d-lg-flex text-center align-items-center">
                     <h2 class="timer mb-0"><span id="demo"></span></h2>
                     <h2 class="timer mb-1 ml-3"><span class="text-warning">Hurry Up!</span></h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 text-center">
            <a href="<?php // echo get_site_url();?>/get-demo/" class="btn btn-warning fw-bold">Reserve Price <i class="fas fa-chevron-right pl-3 arrow"></i></a>
         </div>
      </div>
   </div>
</div> -->
<?php get_footer(); ?>
<script> 
   var countDownDate = new Date("<?php the_field('offer_date_end_date','option');?>").getTime();
    
   var x = setInterval(function() { 
     var now = new Date().getTime(); 
     var distance = countDownDate - now; 
     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
     document.getElementById("demo").innerHTML ="<b>"+ days + "</b>" + " days : " + "<b>"+ hours + "</b>" + " hrs : " + "<b>"+ minutes +"</b>"+ " min : " + "<b>"+ seconds +"</b>"+ " sec";
        
     if (distance < 0) {
       clearInterval(x);
       document.getElementById("demo").innerHTML = "EXPIRED";
     }
   }, 1000);
   
   	
   	
   h = $("footer").outerHeight(true) - 50
   $(window).scroll(function() { 
     //get scrollButtom
     var scrollButtom = $( document ).height()-($(window).scrollTop() + $(window).height());
   	
     if (scrollButtom >= h) {
       $(".footer-countdown").css('bottom','0');
     }
    
     if (scrollButtom < h) {
     	$(".footer-countdown").css('bottom',(h-scrollButtom)+'px');
   	} 
   });
</script>