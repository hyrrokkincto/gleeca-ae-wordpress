<?php global $hyrrokkin_options;
/**
 * The template for displaying 404 pages (Not Found).
 */
get_header(); ?>
<div class="subbanner">
  <div class="container">
    <div class="pageingormatioon">
      <h3>
        <?php the_title();?>
      </h3>
      <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs();?>
    </div>
  </div>
</div>
<div class="scontentblog">
  <div class="container">
    <div class="col-md-8">
      <h4>
        <?php the_title();?>
      </h4>
      <h1>PAGE NOT FOUND</h1> </div>
    <div class="col-md-4"> <?php echo the_post_thumbnail();?> </div>
  </div>
</div>
<?php get_footer(); ?>
