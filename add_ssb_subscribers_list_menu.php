<?php
function add_ssb_subscribers_list_menu(){
	?>
	<div style='padding:50px; margin:0 auto; margin-top:50px; background:#6C7A89;color:#fff;font-family:sans-serif,arial;font-size:17px; width:60%;'>
	<?php

	$lpp_file = include 'data/sm_subcribers-list.csv'; 

	echo $lpp_file;


	 ?>
</div>

	<a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' href="<?php echo plugins_url('/subscriber-list-download.php',__FILE__); ?>">DOWNLOAD LIST</a>
  <br>
  <br>
  <br>
  <br>
  <a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' href="<?php echo plugins_url('/subscriber-list-empty.php',__FILE__); ?>">EMPTY LIST</a>
  <br>

	<?php
}


?>