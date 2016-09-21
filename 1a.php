<!DOCTYPE html>
<html lang="">
<style>
	body {
		background-color: grey;
	}
	
	input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
	
	
	
	
	</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>

	<head>Opgave 1a HTML</head>
	<br>
	<form action="1a_process.php" method="POST">
		Je naam is:
		<br>
		<input type="text" name="naam">
		<br> 	
		Aantal fouten:
		<br>
		<input type="text" name="fouten">
		<br>
		<br>
		<input type="radio" name="norm" value="1" required>1 fout per punt.<br>
        <input type="radio" name="norm" value="2" required>2 fouten per punt.<br>
        <input type="radio" name="norm" value="3" required>3 fouten per punt.<br>
        <input type="radio" name="norm" value="4" required>4 fouten per punt.<br>
        <input type="radio" name="norm" value="5" required>5 fouten per punt.<br>
		<input type="submit" value="Submit">
	</form>
</body>

</html>

