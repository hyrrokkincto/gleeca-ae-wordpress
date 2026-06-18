<?php 
/**
 * Template Name: Knowledge-List Template 
 */
 get_header(); 
 $search='';
 
   if($_GET['search']!=''){
	  $search=$_GET['search'];
 }else{
	  $search='';
 }   
 ?>
        <!--================Forum Breadcrumb Area =================-->
        <section class="doc_banner_area search-banner-light-2">
            <div class="container-fluid pl-60 pr-60">
                <div class="doc_banner_content">
                    <form action="" class="header_search_form">
                        <div class="header_search_form_info">
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="icon_search"></i>
                                    <input type='search' value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>"id="searchbox" autocomplete="off" name="search" placeholder="Search for Topics....">
                                    <input type='hidden' id="category" autocomplete="off" name="category" value="<?=$_GET['category'];?>"> 
                                    <div class="header_search_form_panel">
                                        <ul class="list-unstyled">
                                            <li>Help Desk
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Configuration</span><a href="#">How to edit host and
                                                            port?</a></li>
                                                    <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                                </ul>
                                            </li>
                                            <li>Support
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                                </ul>
                                            </li>
                                            <li>Documentation
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
							if(isset($_GET['search']) && $_GET['search']!=''){


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
							<?php if($search!=''){ ?> <li class="breadcrumb-item">Search Results For : "<?php echo $search;?>" ( <?=count($q1);?> Result(s) Found)</li> <?php }else{ ?>
                                <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/knowledge-base/">Knowledge Base</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php  if(isset($_GET['category'])) {echo $_GET['category'];}?></li>
							<?php } ?>  
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Forum Breadcrumb Area =================-->

        <!--================Forum Body Area =================-->
        <section class="forum_sidebar_area" id="sticky_doc">
            <div class="container">  
                            <div class="forum_l_inner"> 
                                <h4 class="h4 medium pl-3"><?php if($search=='') {   if(isset($_GET['category'])) {echo $_GET['category']; } }?></h4>
                                <div class="forum_body">
                                    <ul class="navbar-nav topic_list">
<?php  if(isset($_GET['category'])) { $category=$_GET['category']; }

if(isset($_GET['search']) && $_GET['search']!=''){



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
					<div class="read mt-3"><a href="<?=get_permalink($mypost);?>"><h6>Read More</h6></a></div>
				</div>  
			</div>
		</li>
		
		<?php }}else{ ?> <li>
			<div class="media"> 
				<div class="media-body">
					<div class="t_title">
						
							<h4>No Data Found</h4>
					</div>
					
				</div>  
			</div>
		</li> <?php }
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
		//print_r($myposts); exit;
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
					<div class="read mt-3"><a href="<?=get_permalink($mypost);?>"><h6>Read More</h6></a></div>
				</div>  
			</div>
		</li>
		
		<?php } }?>
		
								
                                    </ul>
                                </div>
                            </div> 
            </div>
        </section>
        <!--================End Forum Body Area =================-->
			<?php get_footer(); ?> 