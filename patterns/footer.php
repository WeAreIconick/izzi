<?php
/**
 * Title: footer
 * Slug: izzi/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"border":{"top":{"width":"2px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-width:2px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
echo sprintf( esc_html__( 'Theme repository: %1$sIzzi%2$s', 'izzi' ), '<a href="' . esc_url( 'https://github.com/weareiconick/izzi' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->