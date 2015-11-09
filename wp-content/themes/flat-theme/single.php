<?php
get_header();
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-12';
}
?>

<div class="container-fluid">
  <img src="http://localhost/PaulaFerracini/app/WordPress-4.3.1/wp-content/themes/flat-theme/assets/images/img/blog-banner-001.jpg" class="width100" />
</div>
<div class="container bem-vindo">
  <h2 class="text-center cinza-marrom">Blog</h2>
  <blockquote class="cinza-marrom">
    Acompanhe as novidades em ortodontia e <br>confira o que acontece no consultório.
  </blockquote>
</div>

<div class="container">

<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php /* The loop */ ?>
        <?php if(have_posts()){ while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content', get_post_format() ); ?>
        <?php zee_post_nav(); ?>
        <?php blog_comments(); ?>
        <?php } } ?>
    </div><!--/#content -->
    <?php // get_sidebar(); ?>
</div>

</div>
<?php get_footer();
