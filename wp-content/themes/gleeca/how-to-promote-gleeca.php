<?php 
/**
 * Template Name: How to Promote Gleeca
 */
 get_header(); ?>
      <section class="doc_banner_area search-banner-light-2">
        <div class="container">
            <div class="home_banner_content">
                <div class="col-md-10 mx-auto text-center">
                <h1 class="mb-3">How to Promote Gleeca?</h1>
                </div>
            </div>
            <div class="text-center">
              <div class="col-md-12 form-group">
    	         <a href="https://gleeca.com/admin/sales-partner-registration" class="btn action_btn btnhover thm_btn" onclick="gtag_report_conversion_partner_signup()" type="submit">Sign up as Sales Partner </a>
              </div>
              <div class="col-md-12 form-group">
              <p>Already have a Sales Partner account? <a href="https://gleeca.com/admin/sales-partner-login" target="_blank">Login</a></p>
              </div>
            </div>
        </div>
      </section>

      <section class="main"> 
          <div class="container" style="color:#1d2746;">
              <div class="row align-items-center">
                <div class="col-12 col-md-12">
                       <?php echo acf_esc_html( get_field('promotion_content') ); ?>
                  </div> 
              </div>
          </div>
      </section>

    
<?php get_footer(); ?>