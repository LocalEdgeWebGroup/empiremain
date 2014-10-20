<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>
</div>
<?php //END #main ?>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>

<div id="left-sidebar" class="sidebar col-sm-3 col-md-pull-9 clearfix" role="complementary">
    <?php dynamic_sidebar( 'left-sidebar' ); ?>
</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
<div id="right-sidebar" class="sidebar col-sm-3 clearfix" role="complementary">
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
</div>
<?php endif; ?>
</div>
<?php //END #inner-content ?>
</div>
<?php //END #content ?>
<footer id="colophon" class="footer" role="contentinfo">
    <div id="inner-footer" class="wrap clearfix">
        <div class="col-sm-4 text-center"> <a href="http://empirefiretrucks.localedgecustomsites.com/fire/"><img class="footer-logo" src="/wp-content/uploads/2014/09/f-logo.png"></a> </div>
        <div class="col-sm-4 text-center footer-social">
            <h3>Phone</h3>
            <h4>(855) 377-3511</h4>
            <h3>Email</h3>
            <h4><a href="mailto:sales@empirefiretrucks.com">sales@empirefiretrucks.com</a></h4>
            <p><a href="https://www.facebook.com/pages/Empire-Emergency-Apparatus-Inc/161637047186111" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a> <a href="https://twitter.com/EmpireEmergency" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a> <a href="https://plus.google.com/100875403560519831358/about" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a> <a href="http://www.youtube.com/channel/UC_SWE7PfN2E-x0sWqwCb1rg" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a></p>
            <p class="source-org copyright">Empire Emergency Apparatus. <br />
                All Rights Reserved. <?php echo date('Y'); ?></p>
        </div>
        <div class="col-sm-4 text-center"> <a href="http://empirefiretrucks.localedgecustomsites.com/police/"><img class="footer-logo" src="/wp-content/uploads/2014/09/e-logo.png"></a> </div>
    </div>
</footer>
<p id="back-top"> <a href="#top"><i class="fa fa-angle-up"></i></a> </p>
</div>
<?php //END #container ?>
<?php wp_footer(); ?>
</body></html>