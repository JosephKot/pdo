<?php
try {
$host = 'localhost';
$name = 'pdo';
$user = 'JosephK';
$pass = 'Bobsuruncle100!';

$dbc = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
} catch(PDOException $e) {
	echo $e->getMessage();
}
?>

<!Doctype html>
	<head>
	</head>
	<body>
		<header>
			<h1>MySQL PDO</h1>
		</header>

		<div>
			<form method="post">
				<input name="first" placeholder="First Name">
				<input name="last" placeholder="Last Name">
				<input name="website" placeholder="Website">
				<button name="add" type="submit">Add</button>
			</form>
		</div>

		<hr>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Website</th>
					<th>Save</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><input name="id" value=""></td>
					<td><input name="first" value=""></td>
					<td><input name="last" value=""></td>
					<td><input name="website" value=""></td>
					<td><button name="save" type="submit">Save</button></td>
				</tr>
			</tbody>

		</table>

	</body>
</html>