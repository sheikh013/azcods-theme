<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azcods_Theme
 */

?>

	</div><!-- #content -->

<footer id="main-footer" class="site-footer"><!--FOOTER BG COLOR -->
    <div class="container main-footer-area">
        <div class="row">
            <?php
            // check if the repeater field has rows of data
            if (have_rows('list_of_footer_column', 'option')):

                $counter = 0;
                $startRow = true;
                // loop through the rows of data
                while (have_rows('list_of_footer_column', 'option')) : the_row();
                    ?>
                    <div class="col-sm-<?php the_sub_field('width_of_the_column', 'option'); ?> <?php the_sub_field('class_for_the_footer', 'option');?>">
                        <h4><?php the_sub_field('title_for_footer', 'option'); ?></h4>
                        <?php the_sub_field('content_for_footer', 'option'); ?>
                    </div>
                    <?php
                endwhile;

            else :
            // no rows found
            endif;
            ?>
        </div>



    </div><!-- close .container -->

    <div class="footer-copyinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

					<?php if('copy_right_info') : ?>
						<?php the_field('copy_right_info', 'option'); ?>
					<?php endif ?>
                </div>

            </div>
        </div>
    </div>
</footer><!-- close #colophon -->




</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
