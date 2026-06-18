<?php 
/**
 * Template Name:Single Blog Template 
 */
 get_header(); ?>
 <?php while ( have_posts() ) : the_post(); ?>
    <!--================End Menu Area =================--> 

    <div class="doc_banner_area search-banner-light-2"> 
        <div class="container">
            <div class="breadcrumb_text">
                <h1><?php echo the_title() ;?></h1>
            </div>
        </div>
    </div>  
    <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_single_info">
                            <div class="blog_single_item">
                                <h2> <?php echo esc_html( get_field('h2_title') ); ?>
                                </h2>
								<?php if( get_field('image') ): ?>
                                <a href="#" class="blog_single_img"><img src="<?php echo esc_url( get_field('image') ); ?>" alt=""></a>
								<?php endif; ?>
								<div><?php the_content() ;?></div>
                                <div class="blog_social text-center">
                                    <h5>Share This Article</h5>
                                    <ul class="list-unstyled f_social_icon">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://gleeca.in/who-should-choose-the-qsr-type-of-restaurant-business/" class="facebook"><i class="social_facebook"></i></a></li>
										
                                        <li><a href="https://twitter.com/intent/tweet?url=https://gleeca.in/who-should-choose-the-qsr-type-of-restaurant-business/&text=" class="twitter"><i class="social_twitter"></i></a></li>
										
                                        <li><a href="https://pinterest.com/pin/create/button/?url=https://gleeca.in/who-should-choose-the-qsr-type-of-restaurant-business/&media=&description=" class="pinterest"><i class="social_pinterest"></i></a></li>
                                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https://gleeca.in/who-should-choose-the-qsr-type-of-restaurant-business/" class="linkedin"><i class="social_linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>  
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

									<?php foreach ( $terms as $term ) { 

									?>
									<li><a href="<?php echo home_url(); ?>/blog/?category=<?=$term->slug?>"><?php echo $term->name; ?><span><?php echo $term->count ?></span></a></li>
									<?php } ?>

									<?php endif;?>   
                                </ul>
                            </div>
                            <div class="widget recent_news_widget">
                                <h4 class="c_head">Recent Posts</h4>
								
								<?php 
								$args = array( 
									'post_type' => 'post', 
									'posts_per_page'=>5,
									'paged' => get_query_var('paged') ? get_query_var('paged') : 1) ;
									$the_query = new WP_Query( $args );
									$post_count = count($the_query->posts);
									if ( $the_query->have_posts() ) :  
									while ( $the_query->have_posts() ) : $the_query->the_post(); 
											?>
                                <div class="media recent_post_item">
                                    <img src="<?php echo esc_url( get_field('image') ); ?>" alt="">
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
                        </div>
                    </div>
                </div> 
            </div>
        </section>
<section class="blog_area pt-0">
<div class="container">
	 <div class="blog_related_post">
                                <h2 class="c_head">Related Post</h2>
                                <div class="row">
								
								<?php
									 $posts = get_posts(array(
									'posts_per_page'	=> 3,
									'post_type'			=> 'post',
									'tag'               => the_field('related_places_by_tag'),
								));
								if( $posts ): ?>
							
							<?php foreach( $posts as $post ): 
								
								setup_postdata( $post )
								
								?>
								<div class="col-lg-4 col-sm-6">
                                        <div class="blog_grid_post wow fadeInUp" data-wow-delay="0.2s">
                                            <img src="<?php the_field('image');?>" alt="">
                                            <div class="grid_post_content">
                                                <div class="post_tag">
                                                    <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
                                                </div>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h4 class="b_title"><?php echo the_title(); ?></h4>
                                                </a>
                                                <p class="line-clamp-3 text-justify"><?php echo wp_kses_post ( get_field('short_description') ); ?> </p>
                                            </div>
                                        </div>
                                    </div>
							
							<?php endforeach; ?>
							<?php wp_reset_postdata(); endif; ?>
                                </div>
                            </div>
	</div>
</section>
    
     <?php endwhile;?> 
<?php get_footer(); ?>