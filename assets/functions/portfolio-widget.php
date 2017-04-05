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
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img04">
						<figcaption>
							<h3>Settings</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img05">
						<figcaption>
							<h3>Safari</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img03">
						<figcaption>
							<h3>Phone</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://azcods-v2.dev/wp-content/uploads/revslider/web-product-light/express_macbook_content1.jpg" alt="img06">
						<figcaption>
							<h3>Game Center</h3>
							<span></span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
			</ul>
</div>





<?php

    $content_data = ob_get_contents();
    ob_end_clean();
    return $content_data;
}

/** [portfolio_widget][/portfolio_widget]  **/