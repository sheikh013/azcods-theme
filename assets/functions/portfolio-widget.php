<?php
add_shortcode('portfolio_widget', 'shortcode_portfolio_widget');
function shortcode_portfolio_widget($atts, $content = null) {
    extract( shortcode_atts( array(
		  'variable_1'	=> '',
      'variable_2'	=> '',
      'variable_3'	=> '',
	), $atts ) );
    ob_start();
?>
<div id="skhGrid">
    <ul class="grid cs-style-1">
			<?php
			$the_query = new WP_Query( array
			( 'post_type' => 'project', 'posts_per_page' => 99 ) );
			?>
		    <?php while ( $the_query->have_posts() ):$the_query->the_post(); ?>
				<li>
					<figure>
						<?php $get_img = get_field('thumbnail_project');?>
						<img src="<?php echo $get_img['url']; ?>" alt="<?php echo $get_img['alt']; ?>">
						<figcaption>
							<h3><?php the_title();?></h3>
							<span></span>
							<a href="<?php the_field('url_project');?>" target="_blank">Take a look</a>
						</figcaption>
					</figure>
				</li>
			<?php endwhile; ?>
	</ul>
</div>
<?php
    $content_data = ob_get_contents();
    ob_end_clean();
    return $content_data;
}
/** [portfolio_widget][/portfolio_widget]  **/