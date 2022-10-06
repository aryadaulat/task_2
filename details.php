<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Details</title>
	<style>
		div {
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
	}
		</style>
</head>
<body>
	<h1>Details</h1>
<div>
	<table>
	<tr>
    <th>Nama </th>
    <th>Stock </th>
    <th>Description </th>
  </tr>
	<tr>
    <td><?php 
		$name_produk = $_POST['produk'];
		echo $name_produk;
		?></td>
    <td><?php 
		$stock_produk = $_POST['stock'];
		echo $stock_produk;
		?></td>
    <td><?php 
		$desc_produk = $_POST['description'];
		echo $desc_produk;
		?></td>
  </tr>
	</table>
</div>
	
</body>
</html>