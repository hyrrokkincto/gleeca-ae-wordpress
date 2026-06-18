<?php 
/**
 * Template Name: Single Knowledge Base Template 
 */
 get_header(); ?>
<style> 
.popup img { 
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
.img-popup .close {
 	position: absolute;
    top: -25px;
    right: -25px;
    background-color: #fff;
    color: #000000;
    width: 25px;
    height: 25px;
    font-size: 25px;
	line-height: 25px;
	text-align: center;
    z-index: 1;
    opacity: 1;
    border-radius: 50%;
    text-shadow: none;
}
.img-popup .modal-body{
	padding: 0;	
 }
.img-popup .modal-content{
	border: none;
}
.modal-backdrop {
    background: #000;
} 
	
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>
         <section class="doc_banner_area search-banner-light-2">
            <div class="container-fluid pl-60 pr-60">
                <div class="doc_banner_content">
                     <h2 class="wow fadeInUp"><?php the_title();?></h2>
                </div>
            </div>
        </section>
		<section class="page_breadcrumb">
			<div class="container-fluid pl-60 pr-60">
				<div class="row">
					<div class="col-sm-7">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/knowledge-base/">Knowledge Base</a></li>
								<?php /* <li class="breadcrumb-item"><a href="javascript:history.back()">
									<?php  $terms = get_the_terms( $post->ID , 'knowledge_category' ); 
									$i=1;
									foreach ( $terms as $term ) {
										echo $term->name;
										if($i>=1){
											break;
										}
									}
									?></a></li> */ ?>
								<li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
							</ol>
						</nav>
					</div>
					<div class="col-sm-5">
						<a href="#" class="date"><i class="icon_clock_alt"></i>Updated on <?php $date_format = get_option( 'date_format' );
echo get_the_date( $date_format, $post->ID ); ?> </a>
					</div>
				</div>
			</div>
		</section>

 <section class="tip_doc_area" id="sticky_doc2">
            <div class="container custom_container">
                <div class="row doc-container">
                     <div class="col-lg-3 doc_mobile_menu doc-sidebar mb-4">
                        <aside class="left_sidebarlist display_none">
                            <div class="scroll">
                                <div class="explore-list">
									 <?php echo acf_esc_html( get_field('table_of_contents') ); ?>
								</div>
                            </div>
<!--                             <div class="wasHelpfulSection alert-info p-4">
                                <p>Did you find this document helpful?</p>
                                <span class="pr-4"><i class="icon_like"></i></span><span><i class="icon_dislike"></i></span>
                            </div> -->
                        </aside>
						 <div class="d-block d-md-block d-lg-none"> 
							  <a class="anchor-links" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Explore this Article 
  </a> 
<div class="collapse" id="collapseExample">
 <div class=" doc_mobile_menu doc-sidebar">
                        <aside class="left_sidebarlist">
                            <div class="scroll">
                                <div class="explore-list">
									 <?php echo acf_esc_html( get_field('table_of_contents') ); ?>
								</div>
                            </div>
                            <div class="wasHelpfulSection alert-info p-4">
                                <p>Did you find this document helpful?</p>
                                <span class="pr-4"><i class="icon_like"></i></span><span><i class="icon_dislike"></i></span>
                            </div>
                        </aside>
  </div>
</div>
						 </div>
                    </div>
                    <div class="col-lg-9">
                        <article class="blog_info doc-section" id="doc">
                            <div class="blog_body">
                                <div id="hackers" class="body_item"> 
                                    <div class="row">
										<div class="col-md-12">
                                        	<div class="popup"> 
												<?php the_content();?>
											</div>   
                                        </div>
                                    </div>
                                </div> 
                            </div>  
                        </article>
                    </div>
                </div>
            </div>
        </section>  
         <div class="blog_comment_box topic_comment">
         </div>
        <section class="topic_list_area pb_125">
            <div class="row">
				<div class="col-xs-8 col-md-4">
				</div>
				<div class="col-xs-8 col-md-4">
                  <h4 class="h4 medium">Additional Documentation</h4>
                  <div class="border_bottom"></div>
                 <ul class="list-unstyled article_list tag_list">
					<?php 
					$postid = $post->ID;
					$my_query = new WP_Query( array('showposts' => '5', 'post_type' => 'knowledge-base', 'post__not_in' => array( $postid ), 'orderby' => 'rand'));
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li><a href="<?=get_permalink();?>"><i class="icon_document_alt"></i><?=the_title();?></a></li>
					<?php endwhile; 
					?>
				</ul>
				</div>
            </div>
        </section>



       	<?php get_footer(); ?>
<!-- <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content modal-img"  src=""> 
</div> -->
<div class="modal img-popup" id="myModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <img class="modal-img img-fluid"  src=""> 
      </div> 
    </div>
  </div>
</div>
<script> 
	
	$(function () {
    "use strict";
    
    $(".popup img").click(function () { 
        var $src = $(this).attr("src"); 
        $("img.modal-img").attr("src", $src);
		 $('#myModal').modal('show');
    });  
});
 $(".close").click(function () { 
	  $('#myModal').modal('hide');
 });
</script>