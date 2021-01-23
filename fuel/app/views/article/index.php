<?php foreach ($rows as $row): ?>
	<h2><?= $row['title']; ?></h2>
	<p><?= $row['body']; ?></p>
	<h3>コメント</h3>
	<ul>
		<?php foreach ($row['comments'] as $c): ?>
			<li><?= $c['comment']; ?></li>
		<?php endforeach; ?>
	</ul>
<?php endforeach; ?>