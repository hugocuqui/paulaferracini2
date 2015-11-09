<?php if(!is_page()) { ?>
</div><!--/#primary-->
</div><!--/.col-lg-12-->
</div><!--/.row-->
</div><!--/.container.-->
</section><!--/#main-->
<?php } ?>
<!--
<section id="bottom" class="wet-asphalt">
  <div class="container">
    <div class="row">
      <?php // dynamic_sidebar('bottom'); ?>
    </div>
  </div>
</section> -->

<footer id="footer" class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-left">
        <small><?php show_footer();?></small>
      </div>
      <div class="col-sm-6 text-right">
        <small>Criado por: Altera - Centro de Inteligência em Serviços</small>
      </div>
    </div>
  </div>
</footer><!--/#footer-->

  <?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
    </div><!--/#boxed-->
  <?php } ?>

<?php google_analytics();?>

<?php wp_footer(); ?>

</body>
</html>
