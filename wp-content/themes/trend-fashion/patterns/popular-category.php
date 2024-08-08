<?php
/**
 * Title: Popular Category
 * Slug: trend-fashion/popular-category
 * Categories: trend-fashion
 *
 * @package Trend Fashion
 * @since 1.0.0
 */

if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	if ( class_exists( 'woocommerce' ) ) {
		?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"68px"} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Popular Category', 'trend-fashion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.22rem"}}} -->
<p class="has-text-align-center" style="font-size:1.22rem"><?php echo esc_html__( 'Clothes for summer', 'trend-fashion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3px"} -->
<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"main-category"} -->
<div class="wp-block-columns main-category"><!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:woocommerce/featured-category {"editMode":false,"mediaId":4561,"mediaSrc":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/shoe.jpg","categoryId":27,"showDesc":false} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:woocommerce/featured-category {"editMode":false,"mediaId":4555,"mediaSrc":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/shoe.jpg","categoryId":30} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:woocommerce/featured-category {"editMode":false,"categoryId":30} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php 
	}

else {
 ?>

 <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"68px"} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Popular Category', 'trend-fashion' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.22rem"}}} -->
<p class="has-text-align-center" style="font-size:1.22rem"><?php echo esc_html__( 'Clothes for summer', 'trend-fashion' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3px"} -->
<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"border":{"width":"4px"}},"borderColor":"Theme"} -->
<div class="wp-block-column has-border-color has-theme-border-color" style="border-width:4px;padding-right:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/mobile.jpg","id":1557,"dimRatio":50,"customOverlayColor":"#464247","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#464247"></span><img class="wp-block-cover__image-background wp-image-1557" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/mobile.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'I Phone', 'trend-fashion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Shop Now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"border":{"width":"4px"}},"borderColor":"Theme"} -->
<div class="wp-block-column has-border-color has-theme-border-color" style="border-width:4px;padding-right:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/product-4.jpg","id":1645,"dimRatio":60,"customOverlayColor":"#464247","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#464247"></span><img class="wp-block-cover__image-background wp-image-1645" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/product-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"large"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-link-color has-large-font-size"><?php echo esc_html__( 'Samsung Galaxy', 'trend-fashion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Shop Now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"}},"border":{"width":"4px"}},"borderColor":"Theme"} -->
<div class="wp-block-column has-border-color has-theme-border-color" style="border-width:4px;padding-right:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/coat.png","id":1601,"dimRatio":60,"customOverlayColor":"#464247","isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#464247"></span><img class="wp-block-cover__image-background wp-image-1601" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/coat.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'Coat', 'trend-fashion' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Shop Now', 'trend-fashion' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<?php
}
}
?>