<?php
// template-parts/header-custom.php
// A simple header partial if you want to override parts of header
?>
<header id="masthead" class="site-header" role="banner">
<div class="site-branding">
<?php
if ( function_exists( 'the_custom_logo' ) ) the_custom_logo();
if ( is_front_page() && is_home() ) :
?>
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<?php
else :
?>
<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
<?php
endif;
?>
</div>


<?php if ( has_nav_menu( 'primary' ) ) : ?>
<nav id="site-navigation" class="main-navigation" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>
<?php endif; ?>
</header>