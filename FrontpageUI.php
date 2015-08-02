<?php

function FrontpageUI(){
$ulp = 'ultimate-landing-page';
	$ulp_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $ulp . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $ulp . '">Install Now' . '</a>';


$tss = 'testimonial-add';
	$tss_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $tss . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $tss . '">Install Now' . '</a>';

$msfp = 'mailchimp-subscribe-sm';
	$msfp_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $msfp . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $msfp . '">Install Now' . '</a>';


$pss = 'posts-slider';
	$pss_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $pss . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $pss . '">Install Now' . '</a>';



	?>


		<h1>Ultimate Bar Plugin</h1>
		<div id='sec_left'>
			<br>
			<br>
			<a style='background:#F27935; color:#fff; text-decoration:none;padding:15px; border-bottom:10px solid #ed5f12;' 
			href="admin.php?page=ssb_bar_plugin_ui">Bar Setup</a>
			<br>
			<br>
			<br>
			<br>
			<a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;border-bottom:10px solid #ed5f12;' 
			href="admin.php?page=ssb_list">Subscrbers List</a>
			<br>
			<br>
		</div>
		<div id='sec_right'>
				<h3>Recommended Plugins</h3>
				<img src="<?php echo plugins_url('imgs/ulp.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p><b>Ultimate Landing Page - <?php echo $ulp_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/psp.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Posts Slider Plugin - <?php echo $pss_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/ts.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Testimonial Slider Plugin - <?php echo $tss_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/msf.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Subscribe Form Plugin - <?php echo $msfp_install_link; ?></p>
				<p>Need Help ? <br> Or Hire a developer : <a href="mailto:support@web-settler.com?subject=Posts Slider Support" "Email Us" target="_blank">Email Us</a> </p>
				</b>
		</div>

		<style>
		.rc_plugin_thumb{
			width: 200px;
			height: 100px;
			border:7px solid #fff;
			background: #fff;
		}

		#sec_left{
			margin-top:100px;
			width:40%;
			display: inline-block;
			float: left;
		}
		#sec_right{
			margin-top:100px;
			width:20%;
			display: inline-block;
			float: right;
			background: #e3e3e3;
			padding: 20px;

		}

		</style>

	<?php


}


 ?>