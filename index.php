<?php
/*  
Plugin Name: Conversion Bar
Plugin URI:http://web-settler.com/notification-bar/
Author URI http://web-settler.com/
Description:Conversion Bar plugin is very helpful for attracting users attention and to achieve conversions.
Easy and simple to use, Clean and simple design.Best Bar Plugin on wordpress.
Version:1.0
Author: Umar Bajwa
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: http://web-settler.com/notification-bar/

--Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.--


*/



function my_popup_html(){
  $mcb_content = get_option('mcb_content');
  $mcb_background_color =get_option('mcb_background_color');
  $mcb_bar_height = get_option('mcb_bar_height');
  $mcb_text_wrap = get_option('mcb_text_wrap');
  $mcb_bar_position = get_option('mcb_bar_position');
  $mcb_cta_button = get_option('mcb_button_cta');
  $mcb_cta_email = get_option('mcb_email_cta');
  $mcb_gradient_color =get_option('mcb_gradient_color');
  $mcb_cta_email_url =get_option('mcb_cta_email_url');
  $mcb_cta_button_url = get_option('mcb_cta_button_url');
  $mcb_cta_button_text = get_option('mcb_cta_button_text');
  $mcb_border_color = get_option('mcb_border_color');
  $mcb_border_width = get_option('mcb_border_width');
  $mcb_border_position =get_option('mcb_border_position');
  $mcb_close_position = get_option('mcb_close_position');
  $mcb_show_close_button = get_option('mcb_show_close_button');
  ?> 
  <div id="mp_wrap">
   <div id="mp_close"><b>Close</b></div>
   
       <div id="main_mp_box">

       <div id="mp_content" style="font-family:helvetica, verdana, oswald, arial;"><b><?php echo $mcb_content;?></b><div id="cta_div" style="display:inline; text-align:center;">
      
        

       <a href="<?php echo $mcb_cta_button_url;?>" style="text-decoration:none;"><button id="mcb_cta_button"style="display:<?php echo $mcb_cta_button;?>;margin-left:10px; background-color:black; border-radius:5px; height:28px; min-width:100px; color:#fff; border:none; text-align:center;font-size:13px;
        "><b><?php echo $mcb_cta_button_text;?></b></button></a>
      </div>
    </div>
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
  wp_register_style( 'mpb_box_style', plugins_url('simple-bar-premium/mp_style.css'));
  wp_enqueue_style( 'mpb_box_style');
}


 function my_mpb_script() {
  wp_enqueue_script( 'mpb_box_style', plugins_url('simple-bar-premium/mp_script.js'));
  
}
wp_enqueue_script("jquery");
add_action( 'init', 'my_mpb_script');
//Adding Options

register_activation_hook(__FILE__,'mcb_activating_options');
function mcb_activating_options(){
  add_option('mcb_content','Put Some Content Here!');
  add_option('mcb_background_color','#000');
  add_option('mcb_bar_width','4%');
  add_option('mcb_text_wrap','');
  add_option('mcb_bar_position','');
  add_option('mcb_button_cta');
  add_option('mcb_email_cta');
  add_option('mcb_gradient_color');
  add_option('mcb_cta_email_url');
  add_option('mcb_cta_button_url');
  add_option('mcb_cta_button_text','Click Here');
  add_option('mcb_border_color','#000');
  add_option('mcb_border_width','3px');
  add_option('mcb_border_position','top');
  add_option('mcb_close_position','');
  add_option('mcb_show_close_button');
}



add_action('wp_head','mcb_sett_to_head');
function mcb_sett_to_head(){
 $mcb_content = get_option('mcb_content');
 $mcb_background_color =get_option('mcb_background_color');
 $mcb_bar_height = get_option('mcb_bar_height');
 $mcb_text_wrap = get_option('mcb_text_wrap');
 $mcb_bar_position = get_option('mcb_bar_position');
 $mcb_cta_button = get_option('mcb_button_cta');
  $mcb_cta_email = get_option('mcb_email_cta');
  $mcb_gradient_color = get_option('mcb_gradient_color');
  $mcb_cta_email_url =get_option('mcb_cta_email_url');
  $mcb_cta_button_url = get_option('mcb_cta_button_url');
  $mcb_cta_button_text = get_option('mcb_cta_button_text');
  $mcb_border_color = get_option('mcb_border_color');
  $mcb_border_width = get_option('mcb_border_width');
  $mcb_border_position =get_option('mcb_border_position');
  $mcb_close_position =get_option('mcb_close_position');
  $mcb_show_close_button =get_option('mcb_show_close_button');
  include 'mp_style.php';

}

add_action('admin_init','mcb_reg_sett');
function mcb_reg_sett(){
  register_setting('mcb_setting_group','mcb_content');
  register_setting('mcb_setting_group','mcb_background_color');
  register_setting('mcb_setting_group','mcb_bar_height');
  register_setting('mcb_setting_group','mcb_text_wrap');
  register_setting('mcb_setting_group','mcb_bar_position');
  register_setting('mcb_setting_group','mcb_button_cta');
  register_setting('mcb_setting_group','mcb_email_cta');
  register_setting('mcb_setting_group','mcb_gradient_color');
  register_setting('mcb_setting_group','mcb_cta_email_url');
  register_setting('mcb_setting_group','mcb_cta_button_url');
  register_setting('mcb_setting_group','mcb_cta_button_text');
  register_setting('mcb_setting_group','mcb_border_color');
  register_setting('mcb_setting_group','mcb_border_width');
  register_setting('mcb_setting_group','mcb_border_position');
  register_setting('mcb_setting_group','mcb_close_position');
  register_setting('mcb_setting_group','mcb_show_close_button');
}

add_action('admin_menu','mpb_menu_set');

function mpb_menu_set(){
  add_menu_page(
  'Conversion Bar ',
  'Conversion Bar',
  'administrator',
  'mpb_settings_f',
  'admin_mpb_page_f' 

  );
  }
function admin_mpb_page_f(){
  include 'mp_style.php';
   ?>
     <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
  <h1>Conversion Bar </h1>

   <br>
    <br>
    <div class="formLayout">
     <a href="http://web-settler.com/notification-bar/"><button style="height:90px; width:750px; font-size:25px; color:#fff; 
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
  <label for="mcb_bar_height"><span style="color :red;"> * </span> <b>Bar Height :</b></label>
  <input type="number" style="width:10%;" name="mcb_bar_height" min="1" max="100"  value="<?php echo get_option('mcb_bar_height'); ?>"/> %
  <br>
  <label for="mcb_gradient_color"><h4>CSS Gradients : </h4></label>
  <input type="text" style="width:200px height:300px;" name="mcb_gradient_color" value="<?php get_option('mcb_gradient_color'); ?>">
  <br>
   <label for="mcb_background_color"><b>Background Color  :</b> </label>
   <input type="color" name="mcb_background_color" class="mcb_bg_color" value="<?php echo get_option('mcb_background_color'); ?>"> 
   <br>
   <br>
   <br>
   <label for="mcb_bar_position"><span style="color :red;"> * </span> Bottom : </label>
   <input type="radio" name="mcb_bar_position" value="bottom:0%;" checked  style="width:10px"

<?php checked('bottom:0%;', get_option('mcb_bar_position')); ?>

   >
   <br>
   <br>
   <label for="mcb_bar_position"><span style="color :red;">*</span> Top : </label>
   <input type="radio" name="" value="top:0%;" style="width:10px" disabled


   >
   <br>
   <br>
   <label for="mcb_text_wrap"><b>Text Wrap : </b></label>
   <input type="checkbox" name="mcb_text_wrap" class="mcb_text_wrap" value='1em' style="width:10px;"
<?php checked('1em', get_option('mcb_text_wrap')); ?>
   ></div>
   
   <div class="formLayout">
   <hr style="">
   <br>
   <br>

   <label for="mcb_border_position"><b>Border - Position : </b></label>
   <select name="mcb_border_position">
   <option value="top"  

<?php selected('top', get_option('mcb_border_position')); ?>

   >Top</option>
   <option value="bottom"

<?php selected('bottom', get_option('mcb_border_position')); ?>

   >Bottom</option>
   </select>
   <br>
   <br>
   <label for="mcb_border_color"><b>Border Color : </b></label>
   <input type="color" name="mcb_border_color" value="<?php echo get_option('mcb_border_color');?>">
<label for="mcb_border_width"><b>Width : </b></label>
   <input type="number" name="mcb_border_width" value="<?php echo get_option('mcb_border_width'); ?>" >
   <br>
   <hr>
   <br>
   <label for="mcb_show_close_button">Enable Close/Open Button:</label>
  <select name="mcb_show_close_button">
<option value="visible"  selected

<?php selected('visible', get_option('mcb_show_close_button')); ?>
>Enabled</option>
<option value="visible" disabled>Disabled</option>
  </select>
  <br>
  <br>
  <label for="mcb_close_position">Close/Open Button Position : </label>
  <select name="mcb_close_position">
 <option value="right:0;" 

<?php selected('right:0;', get_option('mcb_close_position')); ?>

 >Right</option>
 <option value="left:0;"

<?php selected('left:0;', get_option('mcb_close_position')); ?>

 >Left</option>
  </select>
  <br>
  <br>
  <label for="mcb_button_cta">Call To Action Button :</label>
<select name="mcb_button_cta">
  <option value="inline"
<?php selected('inline', get_option('mcb_button_cta')); ?>
  disabled >On</option>
  <option value="none" 

<?php selected('none', get_option('mcb_button_cta')); ?>
   >Off</option>
</select>
<br>
<br>
<label for="mcb_cta_button_url">Call To Action Button :</label>
  <input type="url" name="mcb_cta_button_url" value="<?php echo get_option('mcb_cta_button_url');?>">
<br>
<br>
<label for="mcb_cta_button_text">Button Text :</label>
<input type="text" name="mcb_cta_button_text" value="<?php echo get_option('mcb_cta_button_text');?>">
<br>
  <br>
  <label for="mcb_email_cta">Call To Action Email field :</label>
  <select name="">
  <option value="inline" disabled

  >On</option>
  <option value="none" disabled selected

  >Off</option>
</select>
  <br>
  <br>
   <?php
   $settings = array('media_buttons'=> false,'mcb_content');
   $mcb_content = get_option('mcb_content');
   wp_editor($mcb_content,'mcb_content',$settings);


   ?>
   <?php submit_button( 'Save Changes');  ?>
 </form>
</div>


 
 <style type="text/css">
 #wpfooter{
  display:none;
 }
 </style>
<?php

 };


 
 

?>