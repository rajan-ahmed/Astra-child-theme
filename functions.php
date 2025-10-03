<?php
/**
* Astra Child Theme functions
* Theme: Astra Child
* Author: Rajan Ahmed
*/


// 1) Enqueue parent & child styles
require_once get_stylesheet_directory() . '/inc/enqueue.php';


// 2) Theme setup helpers
require_once get_stylesheet_directory() . '/inc/setup.php';


// 3) Custom footer (copyright) override
require_once get_stylesheet_directory() . '/inc/custom-footer.php';


// 4) Additional custom scripts or hooks can go here