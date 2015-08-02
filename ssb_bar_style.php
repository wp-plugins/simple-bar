<style type="text/css">

	
	
	#ssb_wrap{
		width: 100%;
		padding:<?php echo $ssb_bar_height; ?>px 0px <?php echo $ssb_bar_height; ?>px 0px;
		margin:0 auto;
		background:<?php echo $ssb_background_color; ?>;
		position: fixed;
		<?php echo $ssb_bar_position; ?>;
		
  		left: 0;
  		right: 0;
  		z-index: 99999;
	}
	#ssb_bar_opn{
		margin:0 auto;
		position: fixed;
		background:#000;
		color: #fff;
		padding: 5px;
		display: none;
		<?php echo $ssb_bar_position; ?>;
		cursor: pointer;


	}

	
	#ssb_elem{
		float: left;
		width: 3%;
		text-align: center;
		padding-top: 7px;

	}
	#ssb_content{
		width: 95%;
		float: right;
		display: inline-block;
		text-align: center;
		margin-right:2%;
	}
	#ssb_text{
		font-size: <?php echo $ssb_bar_text_size; ?>px;
		font-family: <?php echo $ssb_bar_text_fontFamily; ?>;
		font-weight: normal;
		font-style: normal;
		margin: 0;
		padding: 0;
	}
	#ssb_close_btn{
		cursor: pointer;
	}

</style>