<?php 
/**
 * Template Name: Terms Template 
 */
 get_header(); ?>
    <!--================End Menu Area =================-->
 <div class="breadcrumb_area_three">
            <img class="p_absolute four" src="<?php bloginfo('template_directory');?>/img/typography/leaf_right.png" alt="">
            <div class="container">
                <div class="breadcrumb_text">
                    <h2><span>Terms and Conditions</span></h2>
                    <p>Terms and Conditions for Gleeca – A Brand of Hyrrokkin Branding Services Private Limited</p>
                </div>
            </div>
        </div>
        <section class="typography_area" style="background: #F2F6F7;">
            <div class="container">
                <div class="typography_underline">
                  <?php /*  <h4 class="h4 medium">Heading with Underline</h4> */  ?>
                    <p><?php the_content() ;?></p>
                </div>
            </div>
        </section>
 
    <!--================End Footer Area =================-->

<?php get_footer(); ?> 