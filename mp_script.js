jQuery(document).ready(function(){
 jQuery('#mp_close').click(function(){
 jQuery.cookie('mps_cookie_close', '5', { expires: 7, path: '/' });
 jQuery('#main_mp_box').hide(500);
 jQuery('#mp_close').css('display','none');
 jQuery('#mp_open').fadeIn(700);
 })
 jQuery('#mp_open').click(function(){
 	jQuery.removeCookie('mps_cookie_close', { path: '/' });
 	jQuery('#mp_open').css('display','none');
 	jQuery('#main_mp_box').slideDown(500);
 	jQuery('#mp_close').fadeIn(500);
 })

 if (jQuery.cookie('mps_cookie_close')) {
 	jQuery('#main_mp_box').hide(0);
 	jQuery('#mp_close').css('display','none');
 	jQuery('#mp_open').fadeIn(70);
 };

 jQuery('.mcb_text_wrap').focus(function(){
 	jQuery('#textwrap_msg').css('visibility','visible');
 });

});