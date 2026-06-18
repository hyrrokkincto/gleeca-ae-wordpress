<?php 
/**
 * Template Name: Features Template 
 */
 get_header(); ?> 
    <div class="doc_banner_area search-banner-light-2"> 
        <div class="container">
            <div class="breadcrumb_text">
                <h1>Addressing All Needs of <span>Restaurateurs </span></h1>
                <p> Gleeca is built to be a permanent solution to any restaurant type. You can configure Gleeca instantly as per your business model without any training.</p>
            </div>
        </div>
		<div class="text-center">
              <div class="d-flex align-items-center justify-content-center mt-40"><a href="https://gleeca.in/pricing" onclick="gtag_report_conversion()" class="btn action_btn btnhover thm_btn mb-3" type="submit">See Pricing</a> 
              <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3 mb-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
				</div>
            </div>
    </div>
    <section class="topic_list_area p_125 pb_125">
      <div class="container">
        <div class="main_title text-center">
          <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html( get_field('features_main_title') ); ?>
          </h2>
          <p class="wow fadeInUp" data-wow-delay="0.4s"><?php echo esc_html( get_field('features_short_title') ); ?>
          </p>
        </div>
        <div class="row topic_list_inner">
        <div class="container">
              <div class="row h_content_items">
                  <?php if(get_field('features_details')): ?>
			<?php while(has_sub_field('features_details')): ?>
                  <div class="col-lg-4 col-sm-6">
                      <div class="h_item">
                          <img src="<?php echo esc_html( get_sub_field('image') ); ?>">
                          <a href="<?php echo esc_html( get_sub_field('view_link') ); ?>">
                              <h4><?php echo esc_html( get_sub_field('title') ); ?>
                              </h4>
                          </a>
                          <p><?php echo wp_kses_post ( get_sub_field('description') ); ?> </p>
                      </div>
                  </div>
				   <?php endwhile; ?>
			<?php endif; ?> 
              </div>
			<div class="text-center">
              <div class="col-md-12 form-group mt-40"><a href="https://gleeca.in/pricing" onclick="gtag_report_conversion()" class="btn action_btn btnhover thm_btn" type="submit">See Pricing</a>
              <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<section class="asking_area">
		<div class="container">
			<div class="row">
				<?php if(get_field('register_details')): ?>
				<?php while(has_sub_field('register_details')): ?>
				<div class="col-lg-6">
					<div class="asking_item">
						<h5><?php echo esc_html( get_sub_field('register_short_title') ); ?>
            </h5>
						<h4>   <?php echo wp_kses_post ( get_sub_field('register_main_title') ); ?> 


            </h4>
						<img src="<?php echo esc_html( get_sub_field('svg_link') ); ?>" alt="">
						<a class="main_btn blue wow fadeInUp" data-wow-delay="0.3s" href="<?php echo esc_html( get_sub_field('register_link') ); ?>"> <?php echo esc_html( get_sub_field('button_name') ); ?>
            </a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?> 
			</div>
		</div>
	</section>   
   <?php get_footer(); ?>