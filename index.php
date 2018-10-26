<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="action.php" method="post">
	<table class="table">
			<tr>
				<td colspan ="2"> <h3> პერსონალური ინფორმაცია</h3> </td>
			</tr>
		
			<tr>
				<td>სახელი:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td> გვარი:</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr>
				<td>თანამდებობა</td>
				<td><input type="text" name="thepost"></td>
			</tr>
			<tr>
				<td>ვალუტა</td>
				<td>
					<select name="currency">
					<option value="ევრო">ევრო</option>
					<option value="დოლარი">დოლარი</option>
					<option value="ლარი">ლარი</option>

				</select>
				</td>
			</tr>
			<tr>
				<td>ხელფასის რაოდენობა</td>
				<td><input type="text" name="money"></td>
			</tr>
			<tr>
				<td>დაკავებული საშემოსავლო</td>
				<td><input type="text" name="minus"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="თანხმობა"></td>
			</tr>

	</table>
	</form>	


</body>
</html