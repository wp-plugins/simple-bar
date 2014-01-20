<style>

#mp_wrap{
	position: fixed;
	max-width:100%;
	max-height:10%;
	min-height:3%; 
	bottom:0px;
  left: 0;
  right: 0;
  z-index: 1000;
}

#main_mp_box{
	position:fixed;
	background-color:<?php echo $mcb_background_color; ?>;
	width: 100%;
	min-width:90%; 
	height:<?php echo $mcb_bar_height;?>%;
	min-height:2%; 
  text-align:center;  
  <?php echo $mcb_bar_position;?>
  }
#mp_content{
  width: 90%;
  height: 50%;
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  line-height:<?php echo $mcb_text_wrap; ?>; 
   }


#mp_close{
  font-size:15px;
  position:fixed;
  left:1px;  
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  z-index:1 ;
  font-family: verdana;
  background-color: white;
  border-radius:2px;
  width:55px;
  height:22px;
  text-align: center;
  margin:0.3em;
  opacity: 0.5;

}
#mp_close:hover{
	opacity:1;
  transition:opacity .5s ease-in-out;
	cursor:pointer; 
  z-index:2000;
}

#mp_open{
  display: none;
  font-size: 15px;
  position:fixed;
  left:7px;
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  z-index:10 ;
  font-family: verdana;
  background-color: white;
  border-radius:2px;
  text-align: center;
  margin-top: 10px;
  opacity: 0.5;
   width:60px;
   height:22px;
}
#mp_open:hover{
  opacity:1;
  transition:opacity .5s ease-in-out;
  cursor:pointer; 
}

#content_input_form{
  max-width:500px;
  max-height: 600px;
}
#textwrap_msg{
  border: 2px solid red;
  position:relative;
  left: 120px;
  top:-34px;
  width:270px;  
  visibility: hidden;
}

#content_input_form input{
margin-left: 15px;
}






</style>