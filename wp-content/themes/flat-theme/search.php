<?php get_header();
$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-8';
}
?>

<div class="container-fluid">
  <img src="assets/images/img/blog-banner-001.jpg" class="width100" />
</div>
<div class="container bem-vindo">
  <h2 class="text-center cinza-marrom">Blog</h2>
  <blockquote class="cinza-marrom">
    Acompanhe as novidades em ortodontia e <br>confira o que acontece no consultório.
  </blockquote>
</div>

<div class="container">
<div class="row">
    <div id="content" class="site-content <?php echo $col ?>" role="main">
        <?php if ( have_posts() ) { ?>
        <header class="page-header">
            <h1 class="page-title"><?php printf( __( 'Resultado: %s', ZEETEXTDOMAIN ), get_search_query() ); ?></h1>
        </header>
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) { the_post();
            ?>
            <?php get_template_part( 'post-templates/content', 'search' ); ?>
            <?php } ?>
            <?php echo zee_pagination(); ?>
            <?php } else { ?>
            <?php get_template_part( 'post-templates/content', 'none' ); ?>
            <?php } ?>
        </div><!-- #content -->
        <?php get_sidebar(); ?>
      </div>
    </div>
    <?php get_footer(); ?>
