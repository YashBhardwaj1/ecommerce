<html>
<head>
<title>Add Data</title>
</head>

<body>
   
	<h2>Add Updates from this menu</h2>
		<form action="adminadd.php" method="POST">
            ID:<input type="numbe" name="id" value="" required><br><br>
			Name: <input type="text" name="name" value="" required><br><br>
			Description: <input type="text" name="desc" value="" required><br><br>
			Code: <input type="text" name="code" value="" required><br><br>
            Image:<input type="file" name="image" value="" required><br><br>
            Price:<input type="text" name="price" value="" required><br><br>
	
            <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

