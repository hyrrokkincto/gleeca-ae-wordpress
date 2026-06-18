<?php 
/**
 * Template Name: Blog Template 
 */
 get_header(); ?>
 <?php while ( have_posts() ) : the_post(); ?>
    <!--================End Menu Area =================-->
    <div class="doc_banner_area search-banner-light-2">  
        <div class="container">
            <div class="breadcrumb_text">
                <h1>Blogs <br><span><?php echo wp_kses_post ( get_field('banner_short_title','option') ); ?> </span></h1>
                <p><?php echo wp_kses_post ( get_field('banner_main_title','option') ); ?> </p>
            </div>
        </div>
    </div>
    <section class="doc_blog_grid_area sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
						<?php
$temp = $wp_query; 
$wp_query = null; 
$wp_query = new WP_Query(); 
$wp_query->query('showposts=6&post_type=post'.'&paged='.$paged);
if(isset($_GET['category'])){
 $category=$_GET['category'];
$args = array(
'post_type' => 'post',// your post type,
'orderby' => 'post_date',
'order' => 'DESC',
'showposts' => '20',
'cat' => $category // current category ID 
);
$wp_query = new WP_Query($args);
}elseif(isset($_GET['post_tag'])){
 $category=$_GET['post_tag'];
$args = array(
'post_type' => 'post',// your post type,
'orderby' => 'post_date',
'order' => 'DESC',
'showposts' => '6',
'tag_id' => $category // current category ID 
);
$wp_query = new WP_Query($args);
}
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
  <div class="col-lg-6 col-sm-6 pb-4">
	<div class="blog_grid_post shadow-sm wow fadeInUp h-100">
		<div class="blog_grid_img"> 
			<a href="<?=the_permalink();?>">
				<img src="<?php echo esc_url( get_field('image') ); ?>" alt="">  
			</a>
		</div>
		<div class="grid_post_content">
			<div class="post_tag">
				<a href="<?=the_permalink();?>"><?php echo the_date() ;?></a>
			</div>
			<a href="<?=the_permalink();?>">
				<h4 class="b_title"><?php echo the_title();?></h4>
			</a>
		   <p class="line-clamp-3 text-justify"> <?php echo wp_kses_post ( get_field('short_description') ); ?> </p> 
		</div>
	</div>
 </div>

<?php endwhile; ?>
  <div class="col-lg-12">
     <nav class="navigation pagination" role="navigation" style="
    font-size: 42px;">
<!-- 		<div class="nav-links">
			<span aria-current="page" class="page-numbers"><?php previous_posts_link('&laquo;') ?></span>
			<span aria-current="page" class="page-numbers"><?php next_posts_link('&raquo;') ?></span>
		 
		</div> -->
		 	<div class="template-pagination mt-5 pg-style-2">
								<?php
	$big = 999999999;
                					echo "<ul class='d-flex align-items-center justify-content-center'> <li>" . paginate_links(array(
                    				'total' => $wp_query->max_num_pages, 
									   'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
          							'current' => max( 1, get_query_var('paged') ),
                    				'prev_text' => __('<div class="preious-page"><i class="arrow_carrot-left"></i></div>'),
                    				'next_text' => __('<div class="next-page"><i class="arrow_carrot-right"></i></div>')
                					)) . "</li></ul>";
				
 
            					?>
							</div> 
	</nav>
 </div>  
<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>                       
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_sidebar pl-40">
                            <div class="widget categorie_widget">
                                <h4 class="c_head">Post Categories</h4>
                                <ul class="list-unstyled categorie_list">
                         <?php
							$args = array(
							'post_type' => 'blog',
							'post_status' => 'published',
							'taxonomy-name' => 'category',
							'numberposts' => -1,
								);
								$totalblog = count( get_posts( $args ) );
						
                             $taxonomy = 'category';
                            $terms = get_terms($taxonomy);  
                            if ( $terms && !is_wp_error( $terms ) ) :
                            ?>
                            
                                <?php  foreach ( $terms as $term ) { 
                                   ?>
                                    <li><a href="<?php echo home_url(); ?>/blog/?category=<?=$term->term_id?>"><?php echo $term->name; ?><span><?php echo $term->count ?></span></a></li>
                                <?php } ?>
                            
                            <?php endif;?>      
                                </ul>
                            </div>
                            <div class="widget recent_news_widget">
                                <h4 class="c_head">Recent Posts</h4>
								<?php 
								$args = array( 
									'post_type' => 'post', 
									'posts_per_page'=>4,
									'paged' => get_query_var('paged') ? get_query_var('paged') : 1) ;
									$the_query = new WP_Query( $args );
									$post_count = count($the_query->posts);
									if ( $the_query->have_posts() ) :  
									while ( $the_query->have_posts() ) : $the_query->the_post(); 
											?>
                                <div class="media recent_post_item">
                                    <img src="<?php echo esc_html( get_field('image') ); ?>" alt="">
                                    <div class="media-body">
                                        <a href="<?=the_permalink();?>">
                                            <h5><?php echo the_title();?></h5>
                                        </a>
                                        <div class="entry_post_date"><?php the_date() ;?></div>
                                    </div>
                                </div>
								<?php endwhile; wp_reset_postdata();  else:  ?>
                            <p><?php _e( 'No Blogs Found'); ?></p>
                            <?php endif; ?>
                                
                            </div>
                            <div class="widget tag_widget">
                                <h4 class="c_head">Tags</h4>
								<ul class="list-unstyled w_tag_list">
								<?php
							$args = array(
							'post_type' => 'blog',
							'post_status' => 'published',
							'taxonomy-name' => 'post_tag',
							'numberposts' => -1,
								);
								$totalblog = count( get_posts( $args ) );
						
                             $taxonomy = 'post_tag';
                            $terms = get_terms($taxonomy);  
                            if ( $terms && !is_wp_error( $terms ) ) :
                            ?>
                            
                                <?php foreach ( $terms as $term ) { 
                                   
                                    ?>
                                    <li><a href="<?php echo home_url(); ?>/blog/?post_tag=<?=$term->term_id?>"><?php echo $term->name; ?></a></li>
                                <?php } ?>
                            <?php endif;?>
                                   
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
      <?php endwhile;?> 
<?php get_footer(); ?>