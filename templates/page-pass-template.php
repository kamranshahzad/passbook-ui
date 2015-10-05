<?php
	require_once(dirname(dirname(__FILE__)).'/base/build-layout.php');
	get_header();
?>






<div class="col-full" id="content">
<?php
	BuildLayout::draw();
?>
</div>

<?php get_footer(); ?>