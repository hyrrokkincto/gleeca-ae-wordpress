<?php 
/**
 * Template Name: Contact Template 
 */
 get_header(); ?>
<style>
	.contact_area .des{
	color: #6b707f;
    font-size: 18px;
    line-height: 28px;
	}
.contact_fill{
	background: #fff;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border: 1px solid #f1f1f1;
    padding: 35px;
}
.support span	{
		background-color: aliceblue;
    padding: 6px 20px;
    color: #0067ff;
    border-radius: 3px;
    box-shadow: rgb(0 0 0 / 5%) 0px 1px 2px 0px;
	}
 
 
	.asking_area.bg-white .asking_item{
		background: #f2f5f7;
		height: 100%;
	}
	.asking_area.bg-white .asking_item h5{
		color: #2050a1;
		font-weight: 600;
		font-size: 16px;
	}
	.form-group h6 span{
		color: #dc3545;
	}
</style>
    <div class="doc_banner_area search-banner-light-2"> 
        <div class="container">
            <div class="breadcrumb_text">
                <h1>Contact us</h1>
                <p>Please feel free to ask your doubts about Gleeca. We'd love to hear from you</p>
            </div>
        </div>
    </div>
<section class="contact_area sec_pad">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="text-center mb-3">
					<h1 class="mb-3">
						Need any support?
					</h1>
					<h6 class="des">
						Explore our Knowledgebase articles or Get help from Gleeca concierge support team. If you aren't a registered user use contact form.
					</h6>
				</div> 
				<div class="text-center">
					<div class="d-md-flex align-items-center justify-content-center mt-40">
					<a href="https://www.gleeca.in/knowledge-base/" target="_blank"><button type="button" class="btn btn-success ml-3 mb-3"><i class="fas fa-comment-dots"></i> Knowledge Base</button></a>
					<a href="https://www.gleeca.com/admin/support-gleeca/" target="_blank"><button type="button" class="btn btn-primary ml-3 mb-3"><i class="fas fa-tags"></i> Open a Ticket</button></a>
					</div>
				</div> 
			</div>
		</div>
		
		<div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="blog_comment_box topic_comment"> 
                		<h2 class="c_head ">Enquiry Form</h2>
					<?php  echo apply_shortcodes( '[contact-form-7 id="927" title="Contact form 1"]' ); ?>
                </div>
            </div>
		
			</div> 
	</div>
</section>

    <!--================Asking Area =================-->
     <section class="asking_area bg-white pt-0">
            <div class="container">
                <div class="row">
                    
				<div class="col-lg-6">
                        <div class="asking_item">
                            <h5><b>Restaurant</b> Email Support</h5>
                            <p>For questions regarding <br><b>Restaurant Subscriptions</b> please email <br><a href="mailto:support@gleeca.com">support@gleeca.com</a>. We’ll respond to you via email <br>within 24/48 hrs</p>
                            <img src="<?php bloginfo('template_directory');?>/img/svg/asking-1.svg" alt="" width="160">
                        </div>
                    </div>
					
					<div class="col-lg-6">
                        <div class="asking_item">
                            <h5><b>Sales</b> Support</h5>
<!-- 							<p>For questions regarding <b>Restaurant Subscriptions</b> please call <br><a href="tel:+91-9123547005">+91-9123547005</a> - For English <br><a href="tel:+91-9123546993">+91-9123546993</a> - For Tamil <br><a href="tel:+91-9123546994">+91-9123546994</a> - For Hindi</p> -->
                            <p>For questions regarding <br> <b>Restaurant Subscriptions</b> please call <br><a href="tel:+91-9123546994">+91-9123546994</a> - For English / Hindi <br><a href="tel:+91-9123546993">+91-9123546993</a> - For Tamil</p>
                            <img src="<?php bloginfo('template_directory');?>/img/svg/support-1.svg" alt="" width="185">
                        </div>
                    </div>
					
					
                </div>
            </div>
        </section>
        
        <section class="asking_area bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="asking_item">
                            <h5>Registered Office (Thoothukudi)</h5>
                            <p><strong>Hyrrokkin Branding Services Pvt. Ltd,</strong><br>
No:4/188/3, 3rd Street Extension,<br>
Muthammal Colony, Thoothukudi,<br>
Tamil Nadu - 628002, INDIA.</p>
                            <img src="<?php bloginfo('template_directory');?>/img/office2.svg" width="189px" alt=""> 
                        </div>
                    </div>
					<div class="col-lg-6">
                        <div class="asking_item">
                            <h5>Head Office (Coimbatore)</h5>
                            <p><strong>Hyrrokkin Branding Services Pvt. Ltd,</strong><br>
No:502, First Floor,<br>
Kamarajar Road, Coimbatore<br>
Tamil Nadu - 641015, INDIA.</p>
                            <img src="<?php bloginfo('template_directory');?>/img/office1.svg" width="189px" alt=""> 
                        </div>
                    </div>
					
                    
                </div>
            </div>
        </section>
        
       
        
  	<?php get_footer(); ?> 
