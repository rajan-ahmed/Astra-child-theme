<?php
// template-parts/footer-custom.php
?>
<footer id="colophon" class="site-footer" role="contentinfo">
<div class="site-info">
<?php
// If Astra filter exists it will replace default; otherwise use fallback
if ( function_exists( 'astra_child_custom_copyright' ) ) {
echo astra_child_custom_copyright('');
} else {
echo '&copy; ' . date('Y') . ' ' . get_bloginfo('name');
}
?>
</div>
</footer>