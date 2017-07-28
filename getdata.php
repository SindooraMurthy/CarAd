<html>
<head>
<title>Car data</title>
</head>
<body>
<?php

require_once('connection.php');

$query="SELECT * FROM cars";

$response = @mysqli_query($dbc,$query);

if($response){
	echo '<table align="left" width ="600" border="1" cellpadding="1" cellspacing="1">

	<tr><td align="left"><b>Car ID</b></td>
	<td align="left"><b>Car Name</b></td>
	<td align="left"><b>Car Price</b></td>
	<td align="left"><b>Car Description</b></td>
	<td align="left"><b>Car Address</b></td>
	<td align="left"><b>Car Color</b></td>
	</tr>';


	while($row=mysqli_fetch_array($response)){
		echo '<tr><td align=left">' . 
		$row['cid'] . '</td><td align="left">' .
		$row['carname'] . '</td><td align="left">' .
		$row['price'] . '</td><td align="left">' .
		$row['description'] . '</td><td align="left">' .
		$row['address'] . '</td><td align="left">' .
		$row['color'] . '</td>';

		echo '</tr>';
	}

echo '</table>';
}else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);
}
mysqli_close($dbc);
?>
</body>
</html>