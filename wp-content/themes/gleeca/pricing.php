<?php 
/**
 * Template Name: Pricing Template 
 */
 get_header(); ?>
<style>
    .pricing-container .lead{
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
    .pricing-container .card-body {
        background-color: #fff; 
        height:100%;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-direction: column;
        flex-direction: column; 
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(90,122,190,.12);
        border-radius: 0.5rem;
        -webkit-box-shadow: 0 3px 0 0 rgb(90 122 190 / 12%);
        box-shadow: 0 3px 0 0 rgb(90 122 190 / 12%); 
    }
   .pricing-container .card-body:focus, 
   .pricing-container .card-body:hover,
   .pricing-container .card-body.active{
        -webkit-box-shadow: 0 1px 1px 0 rgb(90 122 190 / 10%), 0 10px 20px 0 rgb(90 122 190 / 20%);
        box-shadow: 0 1px 1px 0 rgb(90 122 190 / 10%), 0 10px 20px 0 rgb(90 122 190 / 20%);
    } 
    .pricing-container .card-body.active .btn-outline-primary{
        background-color: #007bff;
        color: #fff;
    }
    .pricing-container .card-body .title{
        color: #2d3440;
    }
    .pricing-container .card-body .sub-title{
        color: #7c899f;
    }
    .pricing-container .card-body ul li {
        margin-bottom: 1rem;
        display: flex;
        align-items: baseline;
    }
    .pricing-container .card-body ul li i{
        color: #0067ff;
        padding-right: 8px;
    }
</style>
    <div class="doc_banner_area search-banner-light-2"> 
        <div class="container">
            <div class="breadcrumb_text">
                <h1><?php echo esc_html( get_field('banner_short_title') ); ?>
                <span> <?php echo esc_html( get_field('banner_main_title') ); ?>
                </span></h1>
                <p><?php echo wp_kses_post( get_field('banner_description') ); ?>
                </p>
            </div>
        </div>
			<div class="text-center">
              <div class="d-flex align-items-center justify-content-center mt-40"><a href="https://gleeca.com/admin/register" onclick="gtag_report_conversion_pricing()" class="btn action_btn btnhover thm_btn mb-3" type="submit">Get Started</a>
              <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3 mb-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                <?php endif; ?>
              </div> 
            </div>
    </div>
    <div class="container pb_100">
    <div class="col-lg-12">
          <article id="post" class="documentation_info">
              <div class="documentation_body" id="documentation">
                  <div class="main_title text-center">
                      <h2  data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000"><?php echo esc_html( get_field('s1-title') ); ?>
                      </h2>
                      <p><?php echo wp_kses_post ( get_field('s1-description') ); ?> </p>
                  </div> 
				  
				  <!-- Pricing -->
				  
				  <div class="pricing-container">
				    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-10 col-lg-10 col-xl-8">
                            <img src="<?php bloginfo('template_directory');?>/img/cloud-bg.png" alt="Img" width="1000" class="pricing-bg d-none d-xl-block">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card-body p-5 p-sm-5">
                                            <div>
                                                <div class="text-center pb-3">
                                                    <img src="https://www.gleeca.in/wp-content/uploads/2022/11/zero-fee.png" width="140" alt="" class="mb-2">
                                                    <h4 class="title mb-1">Free Forever</h4>
													<p class="sub-title"><u class="text-danger"><b>You configure</b></u> Gleeca by yourself</p>
                                                    <hr>
                                                </div>
                                                <ul class="list-unstyled">
													 <li> 
                                                         <i class="fas fa-infinity"></i> Unlimited Orders
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Zero Renewal Cost
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Dine-in, Takeaway, Pickup
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> QR Code Digital Menu
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Powerful POS
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Online Ordering Website
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Online Payment Gateway
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Collect Customer Data
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Free Ticket Center Support &nbsp; (24 hrs Response Time)
                                                    </li>
													<li> 
                                                        <i class="fas fa-times text-danger"></i> Phone/Remote Desktop Support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="https://gleeca.com/admin/register" class="btn btn-outline-primary btn-block mt-3">Sign up free</a>
                                        </div>
                                    </div> 
                                    <div class="col-md-6 mb-4">
                                        <div class="card-body active border-primary p-5 p-sm-5">
                                            <div>
                                                <div class="text-center pb-3">
                                                    <img src="https://www.gleeca.in/wp-content/uploads/2022/11/one-time-fee.png" width="140" alt="" class="mb-2">
                                                    <h4 class="title mb-1">One Time Fee</h4>
                                                    <p class="sub-title"><u class="text-success"><b>We configure</b></u> Gleeca for you</p>
                                                    <hr>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li> 
                                                         <i class="fas fa-infinity"></i> Unlimited Orders
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Zero Renewal Cost
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Dine-in, Takeaway, Pickup
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> QR Code Digital Menu
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Powerful POS
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Online Ordering Website
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Online Payment Gateway
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Collect Customer Data
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Free Ticket Center Support &nbsp; (4-8 hrs Response Time)
                                                    </li>
													<li> 
                                                        <i class="fas fa-check"></i> Phone/Remote Desktop Support (Valid for One Year)
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="https://gleeca.com/admin/register" class="btn btn-outline-primary btn-block mt-3">Sign up free</a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
				</div>
				  
				  <div class="col-md-12 form-group text-center"><a href="https://gleeca.in/features/" target="_blank" class="btn action_btn btnhover thm_btn" type="submit">Explore 35+ Features</a> 
				  <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
              </div>
              </div>
          </article>
      </div>
    </div>

<section class="common_question_area">
	<div class="container">
		<div class="main_title text-center">
			<h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html( get_field('s2-title') ); ?>
            </h2>
			<p class="wow fadeInUp" data-wow-delay="0.4s"><?php echo wp_kses_post ( get_field('s2-description') ); ?> </p>
		</div>
		<div class="question_menu">
			<div class="topic_list_inner">
				<div class="tab-content" id="myTabContent2">
					<div class="tab-pane fade show active" id="question1" role="tabpanel" aria-labelledby="question1-tab">
						<div class="row">
							<?php  if( have_rows('s2-details') ): while( have_rows('s2-details') ): the_row(); ?>
							<div class="col-lg-4 col-md-6 mt-3">
								<div class="topic_list_item wow FadeInUp" data-wow-delay="0.2s">
									<img src="<?php echo esc_url( get_sub_field('image') ); ?>" alt="" class="mb-15 addon-icons">
									<h4><?php echo esc_html( get_sub_field('title') ); ?>
                                    </h4>
									<p> <?php echo wp_kses_post ( get_sub_field('description') ); ?>  </p>
									<div class="dropcap_content">
										<p><span><?php echo esc_html( get_sub_field('price') ); ?>
                                        </span></p>
									</div>
									<a href="<?php echo esc_html( get_sub_field('page_link') ); ?>" class=" doc_border_btn">How it works?<i class="arrow_right"></i></a>
								</div>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="topic_list_area pt_100">
	<div class="container">
		<div class="col-lg-12">
			<div class="status_area">
				<div class="container">
					<div class="status_inner shadow">
						<div class="media">
							<div class="d-flex">
								<img class="wow fadeInLeft" data-wow-delay="0.3s" src="<?php echo get_site_url();?>/wp-content/uploads/2022/06/status-illustration-1-e1656307049319.png" alt="">
							</div>
							<div class="media-body">
								<h4><?php echo esc_html( get_field('call_of_action_title_2','option') ); ?>
								</h4>
							</div>
							<div class="media-right">
								<a onclick="gtag_report_conversion_pricing()" class="main_btn blue" href="<?php echo esc_html( get_field('offer_button_link_2','option') ); ?>">Get Started</a>
							</div>
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
				<h1><?php echo esc_html( get_field('faqs_title') ); ?>
                </h1>
				<p><?php echo wp_kses_post ( get_field('faqs_title_description') ); ?> </p>
			</div>
			<div class="toggle_shortcode">
				<?php  $item=1; if( have_rows('faqs_details') ): ?>
				<div class="doc_accordion" id="accordionExample">
					<?php while( have_rows('faqs_details') ): the_row(); 
				if($item == 1){
					$collapsed = '';    
					$aria = 'aria-expanded="true"';
					$collapseClass = ' show';
				}else{
					$collapsed = 'collapsed';
					$aria = 'aria-expanded="false"'; 
					$collapseClass = '';
				} 
				?>
  <div class="accordion-item">
    <h2 class="card-header" id="heading<?php echo $item;?>">
      <button type="button" class="btn toggle_btn <?php echo $collapsed;?>" data-toggle="collapse" data-target="#collapse<?php echo $item;?>" <?php echo $aria;?>  aria-controls="collapse<?php echo $item;?>">
        <?php echo get_sub_field('title');?>
      </button>
    </h2>
    <div id="collapse<?php echo $item;?>" class="accordion-collapse collapse  <?php echo $collapseClass;?>" aria-labelledby="heading<?php echo $item;?>" data-parent="#accordionExample">
      <div class=" toggle_body">
         <?php echo get_sub_field('description');?>
      </div>
    </div>
  </div>
					<?php $item++; endwhile; wp_reset_postdata();  else:  ?>
			<p><?php _e( 'No Data Found'); ?></p>
			<?php endif; ?>
			 </div>		
		</div>	
	</div>
		<div class="text-center">
              <div class="col-md-12 form-group mt-40"><a href="https://gleeca.com/admin/register" onclick="gtag_report_conversion_pricing()" class="btn action_btn btnhover thm_btn" type="submit">Sign up</a>
              <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
              </div>
            </div>
</div>
	
</div>
<?php get_footer(); ?>