<?php 
/**
 * Template Name: Get Demo Template 
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
	.form-control {
    display: block;
    width: 100%;
    height: calc(3em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
</style>
    <div class="doc_banner_area search-banner-light-2"> 
        <div class="container">
            <div class="breadcrumb_text">
                <h1>Request a Demo</h1>
                <p>It's time to start using Gleeca. Boost your business with our innovative sales tools. We look forward to showing you how our platform allows you to configure gleeca, and customization that matter most to your brand. </p>
            </div>
        </div>
    </div>
<section class="contact_area sec_pad">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="text-center mb-3">
					<h1 class="mb-3">
						See Gleeca in action
					</h1>
					<h6 class="des">
						Schedule a demo today, and find out why Gleeca is the right choice for your business.
					</h6>
				</div> 
				<div class="text-center">
					<div class="d-md-flex align-items-center justify-content-center mt-40">
					<a href="tel:+91-9123546994" target="_blank"><button type="button" class="btn btn-primary btn-lg ml-3 mb-3"><i class="fas fa-headset"></i> Call Now</button></a>
					</div>
				</div> 
			</div>
		</div>
		
		<div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="blog_comment_box topic_comment"> 
                		<h2 class="c_head ">Schedule a demo session</h2>
					<?php  echo apply_shortcodes( '[contact-form-7 id="1557" title="Get Demo"]' ); ?>
                </div>
            </div>
		
			</div> 
	</div>
</section>

  	<?php get_footer(); ?> 
