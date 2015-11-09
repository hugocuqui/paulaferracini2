<header class="page-header">
    <h1 class="page-title"><?php _e( 'Nada encontrado', ZEETEXTDOMAIN ); ?></h1>
</header>

<div class="page-content">
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

    <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', ZEETEXTDOMAIN ), admin_url( 'post-new.php' ) ); ?></p>

    <?php } elseif ( is_search() ) { ?>

    <p><?php _e( 'Desculpe, mas nada combinando seus termos de pesquisa. Por favor tente novamente com palavras-chave diferentes.', ZEETEXTDOMAIN ); ?></p>
    <?php get_search_form(); ?>

    <?php } else { ?>

    <p><?php _e( 'Parece que nós não pode encontrar o que você está procurando. Talvez procurando pode ajudar.', ZEETEXTDOMAIN ); ?></p>
    <?php get_search_form(); ?>

    <?php } ?>
</div><!-- .page-content -->
