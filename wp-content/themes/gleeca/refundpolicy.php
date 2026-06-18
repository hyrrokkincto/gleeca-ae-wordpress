<?php 
/**
 * Template Name: Refund Policy Template 
 */
 get_header(); ?>
    <!--================End Menu Area =================-->
        <div class="breadcrumb_area_three">
            <img class="p_absolute four" src="<?php bloginfo('template_directory');?>/img/typography/leaf_right.png" alt="">
            <div class="container">
                <div class="breadcrumb_text">
                    <h2><span>Refund Policy</span></h2>
                    <p>Privacy Policy for Gleeca – A Brand of Hyrrokkin Branding Services Private Limited</p>
                </div>
            </div>
        </div>
        <section class="typography_area" style="background: #F2F6F7;">
            <div class="container">
                <div class="typography_underline"> 
                    <p><?php the_content() ;?></p>
                </div>
            </div>
        </section>
    <!--================End Footer Area =================-->
<?php get_footer(); ?> 