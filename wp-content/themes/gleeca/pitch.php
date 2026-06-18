<?php 
/**
 * Template Name: Pitch Template 
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
                <h1>Gleeca Presentation</h1>
                <p>View our Pitch Deck</p>
            </div>
        </div>
			<div class="text-center">
              <div class="d-flex align-items-center justify-content-center mt-40">
              <?php if( get_field('call_us','option') ): ?>
                            <a href="tel:+91-9944694220" class="btn action_btn btnhover thm_btn ml-3 mb-3"><i class="fas fa-phone-alt pr-2"></i> Call</a> 
                <?php endif; ?>
              </div> 
            </div>
    </div>
    <div class="container pt_100 pb_100">
    <div class="col-lg-12">
         <?php echo do_shortcode('[3d-flip-book id="1541" ][/3d-flip-book]'); ?>
      </div>
    </div>


<?php get_footer(); ?>