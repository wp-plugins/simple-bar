<?php
//UI will go here

function ssb_bar_plugin_ui(){ //UI function

	echo "<h1>Edit Bar</h1>";
	?>
	<?php settings_fields( 'ssb_setting_group' );?>
	<?php do_settings_sections( 'ssb_setting_group' );
	
	?>


<div class='formLayout'>
<form action="options.php" method="post" >

	<?php settings_fields( 'ssb_setting_group' );?>
	<?php do_settings_sections( 'ssb_setting_group' );?>
	<br>
	<label for="ssb_enable">Enable/Disable Bar : </label>
	<input class="checkbox" type="checkbox" name="ssb_enable" value="Enable"
	<?php checked('Enable',get_option('ssb_enable')); ?> >
	<br>
	<label for="ssb_show_close_button">Enable/Disable Bar Close Button : </label>
	<input class="checkbox" type="checkbox" name="ssb_show_close_button" value="Enable"
	<?php checked('Enable',get_option('ssb_show_close_button')); ?> >
	<br>
	<label for="ssb_bar_position"> Select Bar Position :</label>
	<select name="ssb_bar_position">
		<option value="top:0px;"
		<?php selected('top:0px;',get_option('ssb_bar_position')); ?>	> Top </option>
		<option value="bottom:0px;"
		<?php selected('bottom:0px;',get_option('ssb_bar_position')); ?>	> Bottom </option>
	</select>
	<br>
	<label for='ssb_background_color'>Select Bar Color : </label>
	<input class='ub_color_picker' type="text" name="ssb_background_color" value="<?php echo get_option('ssb_background_color'); ?>">
	<br>
	<label for='ssb_bar_height'>Set Bar Padding (px) :</label>
	<input type="number" name='ssb_bar_height' value='<?php echo get_option('ssb_bar_height'); ?>' placeholder='Enter value in px'>
	<br>
	<label for="ssb_bar_text_size">Set Font Size (px): </label>
	<input type="number" name="ssb_bar_text_size" value="<?php echo get_option('ssb_bar_text_size'); ?>">
	<br>
	<label for="ssb_bar_text_fontFamily">Set Font Family : </label>
	<input type="text" name="ssb_bar_text_fontFamily" value="<?php echo get_option('ssb_bar_text_fontFamily'); ?>">
	
	<hr>
	<br>
	<label for="ssb_bar_template">Select Bar Layout :</label>
	<br>
	Text Only Bar 
	<input id='ssbTextOnlySelect' style='margin-left:300px;' class="checkbox" type="radio" name="ssb_bar_template" value="TextOnly"
	<?php checked('TextOnly',get_option('ssb_bar_template')); ?> >
	<br>
	Text With Email Subscribe Field 
	<input id='ssbEmailOnlySelect' style='margin-left:300px;' class="checkbox" id='emailBar_radio' type="radio" name="ssb_bar_template" value=""
	  disabled > <i><span style="color:red;">(Premium version Only)</span>
	<br>
	Text With MailChimp Email Subscribe Field 
	<input id='ssbEmailOnlySelect' style='margin-left:300px;' class="checkbox" id='emailBar_radio' type="radio" name="ssb_bar_template" value=""
	 disabled > <span style="color:red;">(Premium version Only)</span>
	<br>
	<hr>
	<br>
	<label class='ssb_email_fields'>Email Field Place Holder :</label>
	<input type="text" disabled class='ssb_email_fields' name="ssb_bar_email_placeholder" value="<?php echo get_option('ssb_bar_email_placeholder'); ?>"> <span style="color:red;">(Premium version Only)</span><br>
	<label class='ssb_email_fields' >Email Field Submit Button Text : </label>
	<input type="text"  disabled class='ssb_email_fields' name="ssb_bar_email_submit_text" value="<?php echo get_option('ssb_bar_email_submit_text'); ?>"> <span style="color:red;">(Premium version Only)</span></i><br>
	<br>
	<label for="ssb_content">Add Bar Text : </label>
	<!-- <textarea name="ssb_content" placeholder='Enter Some text' width='200px' cols='20' rows="10" value="<?php //echo get_option('ssb_content'); ?>"><?php //echo get_option('ssb_content'); ?></textarea> -->
	<br>
	<?php $settings = array('media_buttons'=> false,'ssb_content','textarea_rows'=>5);
   $ssb_content = get_option('ssb_content');
   wp_editor($ssb_content,'ssb_content',$settings); ?>

	<br/>
	<?php submit_button('Save Changes');  ?>		

</form>
<a href="http://web-settler.com/ultimate-bar/" style='text-decoration: none;' target='_blank' onclick="this.parentNode.submit(); return false;"><div id='rate_button' style=''>Get Premium Version</div></a>
</div>
<style type="text/css">
#rate_button{
		text-align: center;
		padding:8% 5% 8% 5%;
		background:#FFA635;font-size:22px;border:none;color:#fff; border-bottom:10px solid #E08A1C;
		text-decoration: none;
		border-radius: 10px;
		margin-top: 22px;
		font-size: 29px;
	}
	#rate_button:hover{
		background: #FF9918;

	}
	#rate_button:active{
		border: none;
		padding-top: 9%;
	}

	
	.formLayout
    {
        
        padding: 10px;
        width: 800px;
        margin: 10px;
    }
    
    .formLayout label 
    {
        display: block;
        width: 260px;
        float: left;
        margin-bottom: 10px;
        margin-left: 20px;
    }
    .formLayout input,select{
          display: block;
        width: 130px;
        float: left;
        margin-bottom: 10px;

    }

     .formLayout textarea{
        float: left;
        margin-bottom: 10px;

    }
 
    .formLayout label
    {
        text-align: right;
        padding-right: 20px;
        font-size: 16px;
        font-weight: bold;
    }
 
    br
    {
        clear: left;
    }

    .checkbox , .radio{
    	width:15px !important;
    	height: 15px !important;
    }
</style>


<?php

}




 ?>