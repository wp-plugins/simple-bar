jQuery(document).ready(function(){
 jQuery('#mp_close').click(function(){
 jQuery('#main_mp_box').hide(500);
 jQuery('#mp_close').css('display','none');
 jQuery('#mp_open').fadeIn(700);
 })
 jQuery('#mp_open').click(function(){
 	jQuery('#mp_open').css('display','none');
 	jQuery('#main_mp_box').slideDown(500);
 	jQuery('#mp_close').fadeIn(500);
 })

 jQuery('.mcb_text_wrap').focus(function(){
 	jQuery('#textwrap_msg').css('visibility','visible');
 });

});