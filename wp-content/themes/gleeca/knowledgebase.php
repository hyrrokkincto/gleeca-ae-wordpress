<?php 
   /**
    * Template Name: Knowledge Base Template 
    */
    $search='';
      if(isset($_GET['search']) && $_GET['search']!=''){
   	  $search=$_GET['search'];
    }else{
   	  $search='';
    }  
    get_header(); ?>
<!--================Home Advanced Search Area =================-->
<section class="doc_banner_area search-banner-light-2">
   <div class="container-fluid pl-60 pr-60">
      <div class="doc_banner_content">
         <h2 class="wow fadeInUp">How can we help you?</h2>
         <form action="" class="header_search_form">
            <div class="header_search_form_info">
               <div class="form-group">
                  <div class="input-wrapper">
                     <i class="icon_search"></i>
                     <input type='search' value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>"id="searchbox" autocomplete="off" name="search" placeholder="Search for Topics....">
                     <input type='hidden' id="category" autocomplete="off" name="category" value="<?php if(isset($_GET['category'])){ echo $_GET['category'];} ?> "> 
                     <div class="header_search_form_panel">
                        <ul class="list-unstyled">
                           <li>
                              Help Desk
                              <ul class="list-unstyled search_item">
                                 <li><span>Configuration</span><a href="#">How to edit host and
                                    port?</a>
                                 </li>
                                 <li><span>Configuration</span><a href="#">The dev Property</a></li>
                              </ul>
                           </li>
                           <li>
                              Support
                              <ul class="list-unstyled search_item">
                                 <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                              </ul>
                           </li>
                           <li>
                              Documentation
                              <ul class="list-unstyled search_item">
                                 <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                 </li>
                                 <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                 </li>
                                 <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>
<section class="page_breadcrumb">
   <div class="container-fluid pl-60 pr-60">
      <div class="row">
         <div class="col-sm-7">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <?php 
                     if(isset($_GET['search'])){
                     
                     
                     $categoria = $_GET['category'];
                     $search_term = $_GET['search'];
                     
                     $q1 = get_posts(array(
                      'fields' => 'name',
                      'post_type' => 'knowledge-base',
                      'post_status' => 'publish',
                      'posts_per_page' => -1,
                      's' =>  $_GET['search'] ? $_GET['search'] : '' 
                     
                     ));
                     }
                     ?>
                  <?php if($search!=''){ ?> 
                  <li class="breadcrumb-item">Search Results For : "<?php echo $search;?>" ( <?=count($q1);?> Result(s) Found)</li>
                  <?php }else{ ?>
                  <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/knowledge-base">Knowledge Base</a></li>
                  <?php /* <li class="breadcrumb-item active" aria-current="page">Knowledge Base</li> */ ?>
                  <?php } ?>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<!--================End Home Advanced Search Area =================-->
<!--================Topic List Area =================-->
<?php if(isset($_GET['search']) && $_GET['search']!='')
   { ?>
<section class="forum_sidebar_area" id="sticky_doc">
   <div class="container pl-60 pr-60">
      <div class="forum_l_inner">
         <h4 class="h4 medium pl-3"><?php if($search=='') {   if(isset($_GET['category'])) {echo $_GET['category']; } }?></h4>
         <div class="forum_body">
            <ul class="navbar-nav topic_list">
               <?php  if(isset($_GET['category'])) { $category=$_GET['category']; }
                  if(isset($_GET['search'])){
                   $q2 = get_posts(array(
                          'fields' => 'name',
                          'post_type' => 'knowledge-base',
                          'post_status' => 'publish',
                          'posts_per_page' => -1,
                          'terms' =>$categoria
                  ));
                  if($q1 != null){
                   foreach ($q1 as $mypost) {
                  		?>
               <li>
                  <div class="media">
                     <div class="media-body">
                        <div class="t_title">
                           <a href="<?=get_permalink($mypost);?>">
                              <h4><?=$mypost->post_title;?></h4>
                           </a>
                        </div>
                        <h6> <?=$mypost->short_description;?>
                        </h6>
                        <div class="read">
                           <a href="<?=get_permalink($mypost);?>">
                              <h6>Read More</h6>
                           </a>
                        </div>
                     </div>
                  </div>
               </li>
               <?php }}else{ ?> 
               <li>
                  <div class="media">
                     <div class="media-body">
                        <div class="t_title">
                           <h4>No Data Found</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <?php }
                  }else{
                  $category=$_GET['category'];
                        $myposts = get_posts(array(
                        'showposts' => -1, //add -1 if you want to show all posts
                        'post_type' => 'knowledge-base',
                        'tax_query' => array(
                                    array(
                                          'taxonomy' => 'knowledge_category',
                                          'field' => 'slug',
                                          'terms' => $category //pass your term name here
                                            )
                                          ))
                                         );
                  
                          foreach ($myposts as $mypost) {
                  		?>
               <li>
                  <div class="media">
                     <div class="media-body">
                        <div class="t_title">
                           <a href="<?=get_permalink($mypost);?>">
                              <h4><?=$mypost->post_title;?></h4>
                           </a>
                        </div>
                        <h6> <?=$mypost->short_description;?>
                        </h6>
                        <div class="read">
                           <a href="<?=get_permalink($mypost);?>">
                              <h6>Read More</h6>
                           </a>
                        </div>
                     </div>
                  </div>
               </li>
               <?php } }?>
            </ul>
         </div>
      </div>
   </div>
</section>
<?php 
   } else{ ?>
<section class="topic_list_area p_125">
   <div class="container">
      <div class="main_title text-center">
         <h2 class="wow fadeInUp" data-wow-delay="0.2s">Explore Topics</h2>
      </div>
      <div class="row topic_list_inner">
         <?php
            $args = array(
            'post_type' => 'knowledge-base',
            'post_status' => 'published',
            'taxonomy-name' => 'knowledge_category',
            'numberposts' => -1,
            	);
            $totalblog = count( get_posts( $args ) );
                                 $taxonomy = 'knowledge_category';
            $terms = get_terms($taxonomy);
            if(isset($_GET['search']))				
            	{
            	$args = array(
            		'taxonomy'      => array( 'knowledge_category' ), // taxonomy name
            		'orderby'       => 'id', 
            		'order'         => 'ASC',
            		'hide_empty'    => true,
            		'fields'        => 'all',
            		'name__like'    => $_GET['search']
            	);
            	$terms = get_terms( $args );
            	}
                               if ($terms && !is_wp_error( $terms ) ){
                                  foreach ( $terms as $term ) {
            ?> 
         <div class="col-lg-4 col-sm-6 mb-4">
            <div class="topic_list_item wow fadeIn" data-wow-delay="0.2s">
               <a href="<?php echo home_url(); ?>/knowledge-list/?search=&category=<?=$term->name?>" class="topic-title">
                  <h4>
                     <img class="taxonomy-img" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"  alt="" / >
                     <?php /* <img src="img/home-tow/icon/topic-icon-1.png" alt=""> */ ?>
                     <?php echo $term->name; ?>
                  </h4>
                  <span class="count">(<?php echo $term->count ?>)</span>
               </a>
               <ul class="navbar-nav">
                  <?php 
                     $category = $term->name; //the categories name
                     $myposts = get_posts(array(
                     'showposts' => -1, //add -1 if you want to show all posts
                     'post_type' => 'knowledge-base	',
                     'tax_query' => array(
                     array(
                     'taxonomy' => 'knowledge_category',
                     'field' => 'slug',
                     'terms' => $category //pass your term name here
                     )
                     ))
                     );
                     $i=1;
                     foreach ($myposts as $mypost) { ?> 
                  <li><a href="<?=get_permalink($mypost);?>"><i class="icon_document_alt"></i><?=$mypost->post_title;?></a></li>
                  <?php if($i>=5){break;} $i++; } // endwhile; ?>
               </ul>
               <a class="text_btn dark_btn" href="<?php echo home_url(); ?>/knowledge-list/?search=&category=<?=$term->name?>">View All<i class="arrow_right"></i></a>
            </div>
         </div>
         <?php  }  }else{?> 
         <div class="media">
            <div class="media-body">
               <div class="t_title">
                  <h4>No Data Found</h4>
               </div>
            </div>
         </div>
         <?php  }?>
      </div>
   </div>
</section>
<?php }?>
<!--================End Topic List Area =================-->
<?php get_footer(); ?>