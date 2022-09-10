<!doctype>
<html>
<head>

	<meta charset="utf-8">
	<title>TO-DO LIST</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<header>TO_DO LIST</header>

<main>
	<table>
		<thead>
			<tr><th>No.</th><th>Task</th><th>Status</th><th>Date</th></tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($tasks as $task): 
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $task['task']; ?></td>
				<td><?php echo $task['status']; ?></td>
				<td><?php echo $task['date']; ?></td>
			</tr>
			<?php
				endforeach;
			?>
		</tbody>		
	</table>
</main>

</body>
</html>