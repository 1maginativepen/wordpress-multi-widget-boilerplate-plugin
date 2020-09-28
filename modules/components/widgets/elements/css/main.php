<?php
?>  

<style>
    @import "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css";
    @import "<?php echo get_site_url().'/wp-content/plugins/elementor-custom-banner/assets/css/editor.css';?>";
    
.center{ 
    text-align: center !important;
}
.left{ 
    text-align: left !important;
}
.right{ 
    text-align: right !important;
}
.elementor img {
    height: 100%;
    max-width: 100%; 
}
.banner-1{
  height: 80px;
}
.banner-2{
  height: 120px; 
}
.banner-3{
  height: 160px; 
}

div.banner-holder img{
  height: 100%;
  width: auto;
}

@media only screen and (max-width: 700px) {
  body {
    background-color: lightblue;
  }

  div.banner-holder img{
    height: auto;
    width: 100%;
    transition-timing-function: linear;
  }

}

/* Moving things down a bit */
.container {
  margin-top: 30px;
}

/* Adding some color to the remove button */

span.glyphicon-remove {
  color: #AA0000;
}

/* Make first remove button grey */

div.col-sm-2:first-child span.glyphicon-remove {
  color: #eeeeee;
}

/* Spacing things out a bit */

span.glyphicon-plus {
  padding-right: 3px;
}


/* Removing the default underline */

.btn-link:hover {
  text-decoration: none;
}


</style>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip(); 
});
</script>  
    