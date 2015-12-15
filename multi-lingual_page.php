<?php include('perch/runtime.php'); ?>

<?php 
	perch_layout('header'); 
	$lang = PerchSystem::get_var('lang');
?>
<body>

	<?php if($lang == 'it'){ ?>
		<h1>Ciao!</h1>
	<?php } else { ?>
		<h1>Hello!</h1>
	<?php } ?>

	<?php perch_content('Main content - '.$lang); ?>

</body>
</html>