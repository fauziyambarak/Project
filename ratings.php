<?php
include_once 'navbar.php';
?>

<!DOCTYPE -html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
</head>
<body>
<table>
  <tr>
    <th>Company Name</th>
    <th>Company Ratings</th>


  </tr>
  <tr>
    <td>Kenya Ports Authority</td>
    <td><?php include 'star.php';?></td>
  </tr>
  <tr>
    <td>Mombasa Maize Millers</td>
    <td><?php include 'star.php';?></td></tr>
  <tr>
    <td>Swahili Box Mombasa</td>
    <td><?php include 'star.php';?></td>  </tr>
  <tr>
    <td>Camara Education LTD</td>
    <td><?php include 'star.php';?></td>
  </tr>
  <tr>
    <td>Mombasa Law Court</td>
    <td><?php include 'star.php';?></td>
  </tr>
  <tr>
    <td>County Government Mombasa</td>
    <td><?php include 'star.php';?></td>
  
  </tr>
  <tr>
    <td>Coast Development Authority </td>
    <td><?php include 'star.php';?></td>
  </tr>
  <tr>
    <td>Tech bridge</td>
    <td><?php include 'star.php';?></td>
  </tr>
  <tr>
    <td>English Point Marina</td>
    <td><?php include 'star.php';?></td>
  </tr>
</table>

</body>
</html>