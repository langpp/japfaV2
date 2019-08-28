<!DOCTYPE html>
<html>
<?php echo $page["head"]; ?>
<body class="page-after-loader">
	<div id="loading">
		<h2 class="text-danger">Silahkan Tunggu</h2>
	</div>
	<div id="app">
		<div class="main-wrapper">
			<?php echo $page["header"]; ?>
			<?php echo $page['main_js'];?>
			<?php echo $page["sidebar"]; ?>
			<?php echo $content;?>
			<?php echo $page["footer"]; ?>
		</div>
	</div>
</body>
</html>