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
  <?php echo $mcb_gradient_color;?>
	width: 100%;
	min-width:90%; 
	height:<?php echo $mcb_bar_height;?>%;
	min-height:2%; 
  text-align:center;  
  <?php echo $mcb_bar_position;?>
  border-<?php echo $mcb_border_position?>:solid <?php echo $mcb_border_width;?>px <?php echo $mcb_border_color;?>; 
  box-shadow:2px 2px 5px #7f8c8d;
  float: left;  
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
  <?php echo $mcb_close_position;?>  
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  <?php echo $mcb_gradient_color;?>
  color: <?php echo $mcb_gradient_color;?>;
  z-index:1 ;
  font-family: verdana;
  background-color: white;
  border-radius:2px;
  width:55px;
  height:22px;
  text-align: center;
  margin:0.3em;
  opacity: 0.5;
  display: <?php echo $mcb_show_close_button;?>;

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
  
  <?php echo $mcb_close_position;?> 
  <?php echo $mcb_bar_position;?>
  color:<?php echo $mcb_background_color;?>;
  <?php echo $mcb_gradient_color;?>

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


#textwrap_msg{
  border: 2px solid red;
  position:relative;
  left: 120px;
  top:-34px;
  width:270px;  
  visibility: hidden;
}



#wpbody-content{
  background: #a9db80; /* Old browsers */
background: -moz-linear-gradient(top,  #a9db80 0%, #96c56f 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a9db80), color-stop(100%,#96c56f)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #a9db80 0%,#96c56f 100%); /* IE10+ */
background: linear-gradient(to bottom,  #a9db80 0%,#96c56f 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a9db80', endColorstr='#96c56f',GradientType=0 ); /* IE6-9 */

}




.formLayout
    {

        
        padding: 10px;
        width: 450px;
        margin: 10px;




        

    }
    
    .formLayout label 
    {
        display: block;
        width: 195px;
        float: left;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .formLayout input{
          display: block;
        width: 100px;
        float: left;
        margin-bottom: 20px;

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



    
</style>