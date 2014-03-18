<?php
/*  
Plugin Name: Message Bar
Plugin URI:http://www.wpscrolltotop.blogspot.com
Author URI :http://www.wpscrolltotop.blogspot.com
Description:Simple Bar plugin is very helpful for attracting users attention.
Easy and simple to use, Clean and simple design.Best Bar Plugin on wordpress.
Version:1.0
Author: Umar Bajwa
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: http://www.wpscrolltotop.blogspot.com

--Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.--


*/



function my_popup_html(){
  $mcb_content = get_option('mcb_content');
  $mcb_background_color =get_option('mcb_background_color');
  $mcb_bar_height = get_option('mcb_bar_height');
  $mcb_text_wrap = get_option('mcb_text_wrap');
  $mcb_bar_position = get_option('mcb_bar_position');
	?> 
  <div id="mp_wrap">
   <span id="mp_close"><b>Close</b></span>
   
       <div id="main_mp_box">
       <div id="mp_content"><?php echo $mcb_content;?></div>
       </div>
   
      <span id="mp_open"><b>Open</b></span>
       </div>

       <?php
   include 'mp_style.php';
   
}

add_filter('wp_footer','my_popup_html');

//Adding styles
add_action( 'init', 'register_mpb_styles' );
  function register_mpb_styles() {
  wp_register_style( 'mpb_box_style', plugins_url('Simple-Bar/mp_style.css'));
	wp_enqueue_style( 'mpb_box_style' );
}


 function my_mpb_script() {
	wp_enqueue_script( 'mpb_box_style', plugins_url('Simple-Bar/mp_script.js'));
  
}
wp_enqueue_script("jquery");
add_action( 'init', 'my_mpb_script' );

//Adding Options

register_activation_hook(__FILE__,'mcb_activating_options');
function mcb_activating_options(){
  add_option('mcb_content','Put Some Content Here!');
  add_option('mcb_background_color','#000');
  add_option('mcb_bar_width','4%');
  add_option('mcb_text_wrap','');
  add_option('mcb_bar_position','');

}



add_action('wp_head','mcb_sett_to_head');
function mcb_sett_to_head(){
 $mcb_content = get_option('mcb_content');
 $mcb_background_color =get_option('mcb_background_color');
 $mcb_bar_height = get_option('mcb_bar_height');
 $mcb_text_wrap = get_option('mcb_text_wrap');
 $mcb_bar_position = get_option('mcb_bar_position');
 include 'mp_style.php';

}

add_action('admin_init','mcb_reg_sett');
function mcb_reg_sett(){
  register_setting('mcb_setting_group','mcb_content');
  register_setting('mcb_setting_group','mcb_background_color');
  register_setting('mcb_setting_group','mcb_bar_height');
  register_setting('mcb_setting_group','mcb_text_wrap');
  register_setting('mcb_setting_group','mcb_bar_position');
}

add_action('admin_menu','mpb_menu_set');

function mpb_menu_set(){
  add_menu_page(
  'Notification Bar',
  'Notification Bar',
  'administrator',
  'mpb_settings',
  'admin_mpb_page' 

  );
  }
function admin_mpb_page(){
  include 'mp_style.php';
   ?>
     <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
<div class="formLayout">
  <h1>Bar Plugin</h1>
  <br>
   <a href="http://sites.fastspring.com/wpscrolltotop/product/notificationbar"><button style="height:90px; width:750px; font-size:25px; color:#fff; 
    background: #a90329;
background: -moz-linear-gradient(top,  #a90329 0%, #8f0222 44%, #6d0019 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(44%,#8f0222), color-stop(100%,#6d0019));
background: -webkit-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: -o-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: -ms-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: linear-gradient(to bottom,  #a90329 0%,#8f0222 44%,#6d0019 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 );
  font-family:verdana; box-shadow:5px  5px 0 #c8022f;border:none;" >For all Features and Support Get <span style="font-size:30px; color:#3498db;"><b>Premium Version</b></span></button></a>

   <br>
   <br>
    <br>
   <form method="post" action="options.php" id="content_input_form">
        <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
  <label for="mcb_bar_height"><span style="color :red;"> * </span> Bar Height :</label>
  <input type="number" style="width:10%;" name="mcb_bar_height" value="<?php echo get_option('mcb_bar_height'); ?>" max="6"/>
  <br>
  <br>
   <label for="mcb_background_color"><b>Background Color  :</b> </label>
   <input type="color" name="mcb_background_color" class="mcb_bg_color" value="<?php echo get_option('mcb_background_color'); ?>">
   <br>
   
   <textarea placeholder="Insert your css gradient code here." disabled></textarea>
   <br>
   <h3>Position </h3>
   <label for="mcb_bar_position"><span style="color :red;"> * </span> Bottom : </label>
   <input type="radio" name="mcb_bar_position" value="bottom:0%;" checked style="width:10px;">
   <br>
   <br>
   <label for="mcb_bar_position" style="opacity:0.7;"><span style="color :red;">*</span> Top : </label>
   <input type="radio"  name="mcb_bar_position" value="" disabled style="width:10px;">
   <br>
   <br>
   <label for="mcb_text_wrap"><b>Text Wrap : </b></label>
   <input type="checkbox" name="mcb_text_wrap" class="mcb_text_wrap" value='1em' style="width:10px;"><p id="textwrap_msg">Select only if there are more lines than one.</p>

    <label for="mcb_button_cta">Call To Action Button :</label>
<select name="mcb_button_cta" disabled>
  <option value="visible">On</option>
  <option value="none">Off</option>

</select>
<br>
  <br>
  <label for="mcb_email_cta">Call To Action Email field :</label>
  <select name="mcb_email_cta" disabled>
  <option value="visible">On</option>
  <option value="none"  >Off</option>
</select>
<br>
<br>
   <label for="mcb_border_color"><b>Border Color : </b></label>
   <input type="color" name="mcb_border_color" value="<?php echo get_option('mcb_border_color');?>" disabled>
<label for="mcb_border_width"><b>Width : </b></label>
   <input type="number" name="mcb_border_width" value="<?php echo get_option('mcb_border_width'); ?>"  disabled>
   <br>
   <hr>
<h4>Add Social Icons</h4>
<label name="facebook"><b>Facebook :</b></label>
<input type="checkbox" name="Facebook" disabled>
<br>
<label name="twitter"><b>Twitter :</b></label>
<input type="checkbox" name="twitter" disabled>
<br>
<label name="twitter"><b>Pinterest :</b></label>
<input type="checkbox" name="twitter" disabled>


  
   <?php
   $settings = array('media_buttons'=> false,'mcb_content');
   $mcb_content = get_option('mcb_content');
   wp_editor($mcb_content,'mcb_content',$settings);


   ?>
   <?php submit_button( 'Save Content');  ?>

 </form>
</div>
 
 <div id="sp_meesage"><a href="http://sites.fastspring.com/wpscrolltotop/product/notificationbarsupport" target="_blank"><button <button style="height:110px; font-size:25px; color:#fff; 
    background: #a90329;
background: -moz-linear-gradient(top,  #a90329 0%, #8f0222 44%, #6d0019 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(44%,#8f0222), color-stop(100%,#6d0019));
background: -webkit-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: -o-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: -ms-linear-gradient(top,  #a90329 0%,#8f0222 44%,#6d0019 100%);
background: linear-gradient(to bottom,  #a90329 0%,#8f0222 44%,#6d0019 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 );
  font-family:verdana; box-shadow:1px  5px 55px #000;border:none;">For Premium support and custom plugin customizations <span style="color:#3498db;font-size:30px"><b>Click Here</b></span> <p style="font-size:11px; float:left;">* Premium Version Included + Additional customizations according to your theme and requirements.</p> </button></a></div>
  
 <style type="text/css">
 #wpfooter{
  display:none;
 }
 </style>
<?php

 };


 
 

?>