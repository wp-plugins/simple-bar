<?php
/*  
Plugin Name:Simple Bar
Plugin URI:http://www.wpscrolltotop.blogspot.com
Author URI :http://www.wpscrolltotop.blogspot.com
Description:Simple Bar plugin is very helpful for attracting users attention.
Easy and simple to use, Clean and simple design.Best Bar Plugin on wordpress.
Version:1.0
Author: Umar Bajwa
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: http://www.wpscrolltotop.blogspot.com
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
  'Simple Bar Maker',
  'Simple News Bar',
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
  <h1>Bar Plugin</h1>

   <br>
   <br>
    <br>
   <form method="post" action="options.php" id="content_input_form">
        <?php settings_fields( 'mcb_setting_group' );?>
<?php do_settings_sections( 'mcb_setting_group' );?>
  <label for="mcb_bar_height"><span style="color :red;"> * </span> Bar Height :</label>
  <input type="number" style="width:10%;" name="mcb_bar_height" value="<?php echo get_option('mcb_bar_height'); ?>"/>
  <br>
  <br>
   <label for="mcb_background_color"><b>Background Color  :</b> </label>
   <input type="color" name="mcb_background_color" class="mcb_bg_color" value="<?php echo get_option('mcb_background_color'); ?>">
   <br>
   <br>
   <h3>Position </h3>
   <label for="mcb_bar_position"><span style="color :red;"> * </span> Bottom : </label>
   <input type="radio" name="mcb_bar_position" value="bottom:0%;" >
   <br>
   <br>
   <label for="mcb_bar_position"><span style="color :red;">*</span> Top : </label>
   <input type="radio" name="mcb_bar_position" value="top:0%;">
   <br>
   <br>
   <label for="mcb_text_wrap"><b>Text Wrap : </b></label>
   <input type="checkbox" name="mcb_text_wrap" class="mcb_text_wrap" value='1em'><p id="textwrap_msg">Select only if there are more lines than one.</p>
  <br>
   <?php
   $settings = array('media_buttons'=> false,'mcb_content');
   $mcb_content = get_option('mcb_content');
   wp_editor($mcb_content,'mcb_content',$settings);


   ?>
   <?php submit_button( 'Save Content');  ?>
 </form>
<?php

 };


 
 

?>