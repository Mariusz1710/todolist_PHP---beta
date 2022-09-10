<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Add a task</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<header>Add a task</header>

<form action="?" method="post" class="input_form">

	<label for="task">Enter a task</label>
	<input type="text" id="task" name="task" class="input_task">

	<label for="status">Enter a status</label>
	<select id="status" name="status">
		<option value="1">To do</option>
		<option value="2">I'm just doing a task now</option>
		<option value="3">Done</option>

	</select>
	<input type="submit" value="Add a task" class="input_submit">

</form>

</body>
</html>