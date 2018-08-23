<?php  

foreach ($news as $key => $new) : ?>
			<div class="naujiena">
				<div>
					<a href="news.php?page=<?php echo $key; ?>">
						<img src="https://baltictalents.lt/wp-content/uploads/2018/06/IMG_6015.jpg">
					</a>
				</div>
				<a href="news.php?page=<?php echo $key; ?>"><?php echo $new['name']; ?></a>
				<div class="date"><?php echo $key; ?></div>
			</div>
<?php endforeach; ?>