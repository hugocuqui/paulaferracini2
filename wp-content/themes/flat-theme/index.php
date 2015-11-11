<?php get_header();

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-8';
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=371764079540400";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container-fluid">
  <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/flat-theme/assets/images/img/blog-banner-001.jpg" class="width100" />
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
          <?php if ( have_posts() ) { ?>

          <?php /* The loop */ ?>
          <?php while ( have_posts() ) { the_post(); ?>
          <?php get_template_part( 'post-templates/content', get_post_format() ); ?>
          <?php } ?>

          <?php echo zee_pagination(); ?>

          <?php } else { ?>
          <?php get_template_part( 'post-templates/content', 'none' ); ?>
          <?php } ?>
      </div><!-- #content -->
      <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer();
