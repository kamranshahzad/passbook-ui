<?php


	require_once(dirname(dirname(__FILE__)).'/base/build-layout.php');
	
	get_header(); 
?>
<style>
	#content {
		padding: 5px;
	}
	
td  { border: none; text-align: left !important;}



::-webkit-input-placeholder {
	color: #ffffff;
}

:-moz-placeholder {
	color: #ffffff;
}

::-moz-placeholder {
	color: #ffffff;
}

:-ms-input-placeholder {
	color: #ffffff;
}

.alert {
	padding: 5px;
	text-align: center;
	width: 50%;
	margin: 0 auto;
}


</style>


<div id="primary" class="site-content">
		<div id="content" role="main">

		<h3> Permission Error: </h3>



</div><!-- #content -->
	</div><!-- #primary -->







<?php get_sidebar(); ?>
<?php get_footer(); ?>