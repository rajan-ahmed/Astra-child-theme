// assets/js/custom.js
(function($){
$(document).ready(function(){
// Example: add a small 'back to top' button behavior
var btn = $('<button/>', { id: 'ast-child-top', text: '↑', title: 'Back to top' }).css({position:'fixed',right:'20px',bottom:'20px',display:'none',padding:'10px',zIndex:9999});
$('body').append(btn);
$(window).scroll(function(){ if ($(window).scrollTop() > 300) $('#ast-child-top').fadeIn(); else $('#ast-child-top').fadeOut(); });
$(document).on('click', '#ast-child-top', function(){ $('html,body').animate({scrollTop:0}, 400); });
});
})(jQuery);