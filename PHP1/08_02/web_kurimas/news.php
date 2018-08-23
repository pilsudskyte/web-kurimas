<?php include("functions.php"); ?>
<!DOCTYPE html>
<html>
<?php 
$css = [
	"style.css",
	"bootsrap.css"
];
generateHeader("AS parametras", $css); ?>
<body>
	<header>
		<?php generateMenu(); ?>
	</header>

	<h1><?php echo $news[$_GET['page']]['name']; ?></h1>
	Naujiena parase: <?php echo $news[$_GET['page']]['author']; ?>
	<p>
		<?php echo $news[$_GET['page']]['text']; ?>
	</p>

	<?php include('news-list.php'); ?>
</body>
</html>