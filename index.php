<?php require_once'backend/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>vrienden c.r.m</title>
	</head>
	<body>
		<div class="main-container">
			<?php require_once'header.php'?>
			<main>
				<div class="flex-container">
					<h1>ALL MY FRIENDS</h1>

					<table class="main-table" id="customers">
					  <tr>
					    <th class="id-column">ID</th>
					    <th>Name</th>
					    <th>age</th>
					    <th>Relation status</th>
					    <th></th>
						<th></th>

					  </tr>

					  <tr>
					    <td>Alfreds Futterkiste</td>
					    <td>Maria Anders</td>
					    <td>Germany</td>
					    <td>Germany</td>
					    <td><button class="edit" value="edit">Edit</button></td>
						<td><button class="delete" value="delete">Delete</button></td>
					  </tr>
					</table>
				</div>
			</main>
		</div>
	</body>
</html>