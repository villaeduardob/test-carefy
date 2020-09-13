<section>

	<h1>Trello Boards</h1>

	<?php foreach ($boards as $key => $board) { ?>

		<p><a href="boards/details/<?php echo $key; ?>"><?php echo $board; ?></a></p>

	<?php } ?>

</section>