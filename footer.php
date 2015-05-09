<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
?>

		</div><!-- #main -->

        <div class="col-xs-12 col-md-4">
            <?php get_sidebar(); ?>
        </div>


    </div><!-- /.row -->

    <div class="row">

        <footer role="contentinfo" class="col-xs-12 col-md-4 col-md-offset-4">
            <?php do_action( 'twentythirteen_credits' ); ?>
            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress, and penguins' ); ?></a>
            <br>
            <p>Tux from <a href="https://commons.wikimedia.org/wiki/File:Tux.svg">here</a></p>
        </footer>

    </div>

	</div><!-- /.container -->

	<?php wp_footer(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
