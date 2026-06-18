<?php 
/**
 * Template Name: Home Template 
 */
 get_header(); ?>
      <section class="doc_banner_area search-banner-light">
        <div class="container">
            <div class="home_banner_content">
                <div class="col-md-10 mx-auto text-center">
                <h1 class="mb-3"><?php echo wp_kses_post ( get_field('banner_title','option') ); ?> </h1>
                <p><?php echo wp_kses_post ( get_field('banner_main_title1','option') ); ?>  </p>
                </div>
            </div>
            <div class="text-center">
              <div class="col-md-12 form-group">
    	         <a href="https://gleeca.com/admin/register" class="btn action_btn btnhover thm_btn" onclick="gtag_report_conversion_home_page()" type="submit">Get Started</a>
    	         <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                <div style="margin-top: 10px;"><b>(No credit card required. No strings attached.)</b><br>
                Enjoy Error Free Restaurant Operations | Boost your sales with Innovative sales tools
                </div>
              </div>
            </div>
        </div>
      </section>

      <section class="main"> 
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6 d-none d-md-block">
                      <img src="<?php echo esc_url( get_field('s1-image','option') ); ?>" class="img-fluid" alt="Restaurant POS">
                  </div>
                  <div class="col-12 col-md-6">
                      <h5 class="label"><?php echo esc_html( get_field('s1-short_title','option') ); ?>
                      </h5>
                      <h3 class="mt-3"> <?php echo wp_kses_post ( get_field('s1-main_title','option') ); ?> 
                      </h3>
                      <ul class="ul-theme">
                         <?php echo acf_esc_html( get_field('s1-description','option') ); ?>

                      </ul>
                      <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                      <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                      <div class="mt-2"><span>Start Using Today</span></div>
                  </div> 
              </div>
          </div>
      </section>

      <section class="main common_question_area" style="background:#E0EEFB;">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6 order-last order-md-first">
                      <h5 class="label label-bg-danger" style=" font-size: 18px;background-color: #2E5FFF;height: 35px;align-items: center;justify-content: center;display: inline-flex;color: #fff;padding: 0 20px;font-weight: 500;"><?php echo esc_html( get_field('s2-short_title','option') ); ?>
                      </h5>
                      <h3 class="mt-3"> <?php echo wp_kses_post ( get_field('s2-main_title','option') ); ?> 
                      </h3>
                      <div class="ul-theme lr-bullet"><?php echo acf_esc_html( get_field('s2-description','option') ); ?>
                      </div>

                      <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                      <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                      <div class="mt-2"><span>Setup in minutes</span></div>
                  </div>
                  <div class="col-12 col-md-6 order-first order-md-last">
                      <img src="<?php echo esc_url( get_field('s2-image','option') ); ?>" class="img-fluid mb-5" alt="Restaurant Business">
                  </div>
              </div>
          </div>
      </section>
      <section class="main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="<?php echo esc_url( get_field('s3-image','option') ); ?>" class="img-fluid mb-5" alt="Restaurant Customer">
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="label label-bg-success"><?php echo esc_html( get_field('s3-short_title','option') ); ?>
                        </h5>
                        <h3 class="mt-3"><?php echo esc_html( get_field('s3-main_title','option') ); ?>
                        </h3>
                        <p class="ul-theme"><?php echo acf_esc_html( get_field('s3-description','option') ); ?>
                        </p>
                        <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                        <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                        <div class="mt-2"><span>Instant Onboarding</span></div>
                    </div> 
                </div>
            </div>
        </section>

    <section class="main common_question_area" style="background:#EDECCC;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 order-last order-md-first">
                    <h5 class="label label-bg-success text-black" style=" font-size: 18px;background-color: #2E5FFF;height: 35px;align-items: center;justify-content: center;display: inline-flex;color: #fff;padding: 0 20px;font-weight: 500;"><?php echo esc_html( get_field('s4-short_title','option') ); ?>
                    </h5>
                    <h3 class="mt-3"><?php echo esc_html( get_field('s4-main_title','option') ); ?>
                    </h3>
                    <div class="ul-theme lr-bullet"><?php echo acf_esc_html( get_field('s4-description','option') ); ?>
                    </div>
                    <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up<i class="fas fa-chevron-right pl-3 arrow"></i></a>
                    <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                    <div class="mt-2"><span>Compatible with All Restaurant Models</span></div>
                </div>
                <div class="col-12 col-md-6 order-first order-md-last">
                    <img src="<?php echo esc_url( get_field('s4-image','option') ); ?>" class="img-fluid mb-5" alt="Any Restaurant Model">
                </div>
            </div>
        </div>
    </section>
    
    <section class="main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="<?php echo esc_url( get_field('s7-image','option') ); ?>" class="img-fluid mb-5" alt="Gleeca Software">
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="label label-bg-success"><?php echo esc_html( get_field('s7-short_title','option') ); ?>
                        </h5>
                        <h3 class="mt-3"><?php echo esc_html( get_field('s7-main_title','option') ); ?>
                        </h3>
                        <p class="ul-theme"><?php echo acf_esc_html( get_field('s7-description','option') ); ?>
                        </p>
                        <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                        <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>
                        <div class="mt-2"><span>* No credit card required</span></div>
                    </div> 
                </div>
            </div>
        </section>
        
         <section class="main common_question_area" style="background:#BDCFF2;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 order-last order-md-first">
                    <h5 class="label label-bg-success text-black" style=" font-size: 18px;background-color: #2E5FFF;height: 35px;align-items: center;justify-content: center;display: inline-flex;color: #fff;padding: 0 20px;font-weight: 500;"><?php echo esc_html( get_field('s6-short_title','option') ); ?>
                    </h5>
                    <h3 class="mt-3"><?php echo esc_html( get_field('s6-main_title','option') ); ?>
                    </h3>
                    <p class="ul-theme"><?php echo acf_esc_html( get_field('s6-description','option') ); ?>
                    </p>
                    <a href="https://gleeca.com/admin/register" class="btn-black btnhover"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                    <?php if( get_field('call_us','option') ): ?>
                        <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn ml-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                    <?php endif; ?>
                    <div class="mt-2"><span>It's time to use Gleeca</span></div>
                </div>
                <div class="col-12 col-md-6 order-first order-md-last">
                    <img src="<?php echo esc_url( get_field('s6-image','option') ); ?>" class="img-fluid mb-5" alt="Gleeca Application">
                </div>
            </div>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="<?php echo esc_url( get_field('s8-image','option') ); ?>" class="img-fluid mb-5" alt="Gleeca Subscription">
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="label label-bg-success"><?php echo esc_html( get_field('s8-short_title','option') ); ?>
                    </h5>
                    <h3 class="mt-3"><?php echo esc_html( get_field('s8-main_title','option') ); ?>
                    </h3>
                    <p class="ul-theme"><?php echo acf_esc_html( get_field('s8-description','option') ); ?>
                    </p>

                    <a href="https://gleeca.com/admin/register" class="btn-black btnhover mr-3"  onclick="gtag_report_conversion_home_page()">Sign up <i class="fas fa-chevron-right pl-3 arrow"></i></a>
                        <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:<?php echo esc_html( get_field('call_us','option') ); ?>" class="btn action_btn btnhover thm_btn"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                        <?php endif; ?>

                    <div class="mt-2"><span>Gleeca + You = Success</span></div>
                </div> 
            </div>
        </div>
    </section>

    <section class="topic_list_area p_125 pb_125">
      <div class="container">
        <div class="main_title text-center">
          <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html( get_field('s5_titles','option') ); ?>
          </h2>
          <p class="wow fadeInUp" data-wow-delay="0.4s"><?php echo esc_html( get_field('s5-main_title','option') ); ?>
          </p>
        </div>
        <div class="row topic_list_inner">
          <div class="container">
            <div class="row h_content_items">
            <?php if(get_field('s5-details', 'option')): ?>
            <?php while(has_sub_field('s5-details', 'option')): ?>
            <div class="col-lg-4 col-sm-6">
                    <div class="h_item">
                        <img src="<?php echo esc_url( get_sub_field('image') ); ?>">
                        <a href="<?php echo esc_html( get_sub_field('url') ); ?>">
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
              <div class="col-md-12 form-group"><a href="https://gleeca.in/features/" class="btn action_btn btnhover thm_btn" type="submit">Explore 35+ Features</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>