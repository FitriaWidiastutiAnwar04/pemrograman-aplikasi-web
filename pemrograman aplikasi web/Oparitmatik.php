<!DOCTYPE html>
<html>
<head>
	<title>Pemakaian Operator Aritmatika data PHP</title>
</head>
<body bgcolor="#FFA07A";
<body>
<form method="post" action="oparitmatika.php">
	<h2>Opeartor Aritmatika</h2>
	<table width="50%" border="1">
		<tr>
			<td width="30%">
				<div align="center">Operand kiri</div>
			</td>
			<td width="20%">
				<div align="center">Operator</div>
			</td>
			<td width="30%">
				<div align="center">Operand kanan</div>
			</td>
			<td>
				<div align="center">&nbsp;</div>
			</td>
		</tr>
		<tr>
			<td>
				<div align="center">
					<input type="text" name="operand1">
				</div>
			</td>
			<td>
				<div align="center">
					<select name="operator">
						<option value="+"> + </option>
						<option value="-"> - </option>
						<option value="*"> * </option>
						<option value="/"> / </option>
					</select>
				</div>
			</td>
			<td>
				<div align="center">
					<input type="text" name="operand2">
				</div>
			</td>
			<td>
				<input type="submit" name="hitung" value="hitung">
			</td>
		</tr>

	</table>
</form>
</body>
</html>