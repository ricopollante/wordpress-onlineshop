<!DOCTYPE HTML>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>

<header>
	<nav>	
	<h1 class="hum"> = </h1>
<?php
wp_nav_menu(); 
?>

	</nav>
</header>

<section class="banner">
<div class="gallery-1">

</div>
	<div class="gallery-2">	
	<img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/07/1.jpg">
	<img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/07/3.jpg">
</div>
</section>

<section class="services">
<div>
<ul class="items">

	<li>
		<img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/07/truck.png">
		<p>
                        No promo code required to redeem free shipping, just select Standard Shipping during checkout. Offer is subject to change without notice.

        </p>
	</li>

	<li>
		<img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/07/cargo.png">
		<p>
                        Free and easy exchanges and returns – no questions asked! Ensure that your item fulfills our terms and conditions.

        </p>
	</li>

	<li>
		<img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/07/support.png">
		<p>
                        Our team answers chats as they arrive, allowing you to help your customers faster or turn more website visitors into customers. We can answer your chats and all your complains.

 

        </p>
	</li>

</ul>
<hr>
</div>

</section>

<section class="products-categories">
<ul class="parent">
</ul>
<ul class="child">
</ul>
</section>

<section class="products">
<ul>
<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
?>

	</ul>
</section>