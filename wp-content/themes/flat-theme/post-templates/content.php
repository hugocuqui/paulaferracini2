
<div class="row">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php } //.entry-thumbnail ?>

        <?php if ( is_single() ) { ?>
        <h1 class="entry-title">
            <?php the_title(); ?>
            <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
        </h1>
        <?php } else { ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
            <sup class="featured-post"><?php _e( 'Sticky', ZEETEXTDOMAIN ) ?></sup>
            <?php } ?>
            <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
        </h2>
        <?php } //.entry-title ?>

        <div class="entry-meta">
            <ul>
                <li class="author"><i class="fa fa-pencil-square-o"></i> <?php echo __('', ZEETEXTDOMAIN ); ?> <?php the_author_posts_link() ?></li>
                <li> | </li>
                <li class="date"><i class="fa fa-clock-o"></i> <?php echo __('', ZEETEXTDOMAIN ); ?> <time class="entry-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('j/m/Y'); ?></time></li>
                <li> | </li>
                <li class="category"><i class="fa fa-tag"></i><?php echo __('', ZEETEXTDOMAIN ); ?> <?php echo get_the_category_list(', '); ?></li>
                <li> | </li>
                <li>
                  <i class="fa fa-heart-o">
                  <div class="fb-like" data-layout="button" data-href="<?php the_permalink(); ?>"></div>
                </li>
                <li> | </li>
                <li>
                  <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" ></div>
                  <i class="fa fa-share-alt">
                </li>
                <?php if ( comments_open() && ! is_single() ) { ?>
                <!-- <li class="comments-link">
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', ZEETEXTDOMAIN ) . '</span>', __( 'One comment so far', ZEETEXTDOMAIN ), __( 'View all % comments', ZEETEXTDOMAIN ) ); ?>
                </li> -->
                <?php } //.comment-link ?>
            </ul>
        </div><!--/.entry-meta -->

    </header><!--/.entry-header -->

    <?php if ( is_search() ) { ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <?php } else { ?>
    <div class="entry-content">
        <?php the_content( __( '<br><br><img src="'. get_bloginfo('wpurl') .'/wp-content/themes/flat-theme/assets/images/img/btn-leiamais.jpg" />', ZEETEXTDOMAIN ) ); ?>
    </div>
    <?php } //.entry-content ?>

    <footer>
        <?php zee_link_pages(); ?>
    </footer>

</article><!--/#post-->

</div>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) { ?>
<?php get_template_part( 'author-bio' ); ?>
<?php } ?>
