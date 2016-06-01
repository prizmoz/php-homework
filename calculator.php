<!DOCTYPE html/>
<html>
<head></head>
<body>
<form action="" method="get">
	<input type="text" name="operand1" value=""/>&nbsp;
	<select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	&nbsp;
	<input type="text" name="operand2" value=""/>&nbsp;
	<input type="submit" value="=">
</form>
<? 
$res = '';
if(isset($_GET['operand1']) && isset($_GET['operand2']) && isset($_GET['operator'])){
	$operand1 = $_GET['operand1'];
	$operand2 = $_GET['operand2'];
	$operator = $_GET['operator'];
	$operand1 = str_replace(",", ".", $operand1);
	$operand2 = str_replace(",", ".", $operand2);
	if(is_numeric($operand1) && is_numeric($operand2)){
		if($operator == '+') {
			$res = $operand1 + $operand2;
		}
		elseif($operator == '-') {
			$res = $operand1 - $operand2;
		}
		elseif($operator == '*') {
			$res = $operand1 * $operand2;
		}
		else {
			$res = $operand1 / $operand2;
}
	}
	else {
		echo "Ошибка: введенные данные не являются числом <br>";
	}
}
?>
Результат: <?= $res; ?>
</body>
</html>