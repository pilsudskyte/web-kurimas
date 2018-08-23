<?php include("functions.php"); ?>
<!DOCTYPE html>
<html>
<?php 
$css = [
	"style.css",
	"bootsrap.css"
];
generateHeader("Mano geras puslapis", $css); ?>
<body>
	<header>
		<?php generateMenu(); ?>

	</header>
	<h1><?php echo $turinys[$_GET['page']]['name']; ?></h1>
	<p>
		<?php echo $turinys[$_GET['page']]['text']; ?>
	</p>

	<h3> Galerija </h3>
	<?php foreach($turinys[$_GET['page']]['gallery'] as $image) : ?>
		<img src="<?php echo $image; ?>">
	<?php endforeach; ?>

	<?php include('news-list.php'); ?>
</body>
</html>