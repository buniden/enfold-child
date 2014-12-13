<?php

/*keep the ajax search from enfold theme*/
//function remove_avia_search(){
//	remove_filter( 'wp_nav_menu_items', 'avia_append_search_nav', 10, 2 );
//}
//add_action( 'init' , 'remove_avia_search' );

//add_theme_support( 'deactivate_layerslider' );

add_theme_support('avia_template_builder_custom_css');

//http://www.kriesi.at/support/topic/menu-link-to-open-content-in-new-lightbox-magnific-popup/
add_action( 'wp_head', 'enfold_customization_add_magnific_handler' );
function enfold_customization_add_magnific_handler() {
	?>
	<script type = "text/javascript">
	jQuery(document).ready(function() {
		jQuery('a[rel=magnific]').magnificPopup({
			type: 'inline',
			preloader: false,
		});
	});
	</script>
<?php
}

