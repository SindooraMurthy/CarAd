<html>
<head>
<title>Add car</title>
</head>
<body>
<?php

if(isset($_POST['submit']))
{

	$data_missing = array();


	if(empty($_POST['carname'])){

	$data_missing[]= 'Car Name';

	} else {

	$c_name =trim($_POST['carname']);
	
	}
	if(empty($_POST['type']))
	{
	$data_missing[]= 'Type';
	} 
	else
	{
	$c_price = trim($_POST['type']);	
	}

	if(empty($_POST['price']))
	{
	$data_missing[]= 'Price';
	} 
	else
	{
	$c_price = trim($_POST['price']);	
	}

	if(empty($_POST['description']))
	{
	$data_missing[] ='Description';
	} 
	else 
	{
	$c_description = trim($_POST['description']);	
	}

	if(empty($_POST['address']))
	{
	$data_missing[] ='Address';
	} 
	else 
	{
	$c_address = trim($_POST['address']);	
	}
	
	if(empty($_POST['color']))
	{
	$data_missing[] ='Colour';
	} else 
	{
	$c_color = trim($_POST['color']);	
	}
    
	if(empty($data_missing))
	{   
		require_once('connection.php');
       
		$query= "INSERT INTO cars(cid,carname,type,price,description,address,color) VALUES(rand(),'$c_name', '$type',$c_price, '$c_description', '$c_address', '$c_color')";
         
	    if ($dbc->query($query) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $query . "<br>" . $dbc->error;
		}
	} 
	else 
	{
		echo 'You need to enter the following data<br/>';
		foreach($data_missing as $missing)
		echo "$missing<br/>";
	}
	
}


?>

<form action="http://www.cs.odu.edu/~smurthy/adding.php" method="post">
<b>Add a new Car</b>

<p>Car Name:
<input type="text" name="carname" size="10" value="" />
</p>
<p>Type:
<input type="text" name="type" size="10" value="" />
</p>
<p>Price:
<input type="int" name="price" size="10" value="" />
</p>
<p>Description:
<input type="text" name="description" size="50" value="" />
</p>
<p>Address:
<input type="text" name="address" size="50" value="" />
</p>
<p>Colour:
<input type="text" name="color" size="10" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send"/>
</p>


</form>
</body>
</html>
