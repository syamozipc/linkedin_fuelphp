<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>無題のドキュメント</title>
	</head>

	<body>
		<form action='shop/save'  method='post'>
			<table>
				<?php foreach ($rows as $row): ?>
					<tr>
						<th>商品名</th>
						<th>値段</th>
					</tr>
					<tr>
						<td><?= $row['item_name']; ?></td>
						<td><?= $row['price']; ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</form>
		<?= $pagination; ?>
	</body>
</html>