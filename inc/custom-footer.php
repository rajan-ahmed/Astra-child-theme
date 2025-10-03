<?php
// inc/custom-footer.php
// Custom footer copyright override for Astra child theme


// Filter used by Astra for footer copyright content
add_filter( 'astra_footer_copyright_content', 'astra_child_custom_copyright' );
function astra_child_custom_copyright( $output ) {
$year = date('Y');
$site_name = get_bloginfo('name');


// Customize below line as you wish — সাবধানে ট্যাগ ব্যবহার করো
$output = sprintf( '© %1$s %2$s | All Rights Reserved | Developed by <a href="%3$s" target="_blank" rel="noopener">%4$s</a>',
esc_html( $year ),
esc_html( $site_name ),
esc_url( 'https://rajanwp.com' ),
esc_html( 'Rajan Ahmed' )
);


return $output;
}


// Safety: only apply if Astra filter exists — prevents errors in other themes
if ( ! has_filter( 'astra_footer_copyright_content' ) ) {
// Fallback: hook into wp_footer to print our own copyright
add_action( 'wp_footer', 'astra_child_footer_fallback', 20 );
function astra_child_footer_fallback() {
if ( ! function_exists( 'astra_child_custom_copyright' ) ) return;
echo '<div class="astra-child-footer-copyright" aria-hidden="true">' . astra_child_custom_copyright('') . '</div>';
}
}