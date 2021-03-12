<?php
include_once 'navbar.php';
?>

<html>
<title></title> 
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
  font-size: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

label{
  font-size: 20px;
}
input[type=text] {
  margin: 5px;
  padding: 0 10px;
  width: 300px;
  height: 38px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

#myInput {
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 60%; /* Full-width */
  font-size: 20px; /* Increase font-size */
  padding: 12px 10px 12px 20px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 5px; /* Add some space below the input */
float: right;
}
 .ratings i {
      color:orange;
      font-size:30px;
    }

</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<!-- code for the star rating called from the value-to-star-rating.php file -->
  <?php include 'value_to_star_rating.php';?>
  <h2>IT Companies in Mombasa &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
<!-- This is the search bar -->
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a company.."></h2>
<table id="myTable">
  <tr class="header">
    <th>Company Name</th>
    <th>Company description</th>
    <th>Company Location</th>
	<th>Allowance/salary</th>
  <th width=15%>Company ratings</th>
  </tr>
  <tr>
    <td>Kenya Ports Authority</td>
    <td><p>Kenya Ports Authority is a state corporation with the responsibility to "maintain, operate, improve and regulate all scheduled seaports" on the Indian Ocean coastline of Kenya, including principally Kilindini Harbour at Mombasa.It offers attachment to university students for a sequence of every three months.</p></td>
    <td>Docks near the dock section</td>
    <td>0.0kshs</td>
	<td><div class="ratings">
    <?php 
   echo star_rating(5);?>
 </div></td>
  </tr>
  <tr>
    <td>Mombasa Maize Millers</td>
    <td> Mombasa Maize Millers are the largest millers of maize and wheat in Kenya producing both maize flour and wheat flour under the Taifa brand.It offers attachment to university students for a sequence of every three months.</td>
    <td> near majengo</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(4.5);?></div></td>
  </tr>
  <tr>
    <td>Swahili Box Mombasa</td>
    <td>SwahiliBox brings together investors, donors, entrepreneurs, experts, artists, and other individuals and provides them with an opportunity to share knowledge.It offers attachment to university students for a sequence of every three months.</td>
    <td>Sir Mbarak Hinawy Road, Mombasa</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(4.5);?></div></td>
  </tr>
  <tr>
    <td>Camara Education LTD</td>
    <td>Camara Education is an award-winning international not-for-profit whose mission is to use technology to improve education in low income communities.It offers attachment to university students for a sequence of every three months.</td>
    <td>Tudor Sheikh Abdullas F. R CITC, Buxton</td>
	<td>students pay 5000kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(4.5);?></div></td>
  </tr>
  <tr>
    <td>Mombasa Law Court</td>
    <td>Mombasa Law Court offers attachment to university students for a sequence of every three months.</td>
    <td>Off Dedan Kimathi Avenue,Off Mama Ngina Drive, Mombasa</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(4);?></div></td>
  </tr>
  <tr>
    <td>County Government Mombasa</td>
    <td>County Government Mombasa offers attachment to university students for a sequence of every three months.</td>
    <td>Hatimy Talyani Road, Mombasa</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(4);?></div></td>
  </tr>
  <tr>
    <td>Coast Development Authority </td>
    <td>The Coast Development Authority is a State Corporation established by an Act of Parliament.It offers attachment to university students for a sequence of every three months.</td>
    <td>Mama Ngina Street, Old Town, Mama Ngina Dr, Mombasa</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(3.5);?></div></td>
  </tr>
  <tr>
    <td>Tech bridge</td>
    <td> identify potential, train for skill and invest for success. TechBridge Invest aims to give entrepreneurship-training and invest in areas where we can have the greatest impact. </td>
    <td>Mombasa Nyali Citymall,2nd floor.</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
     echo star_rating(3.5);?></div></td>
  </tr>
  <tr>
    <td>English Point Marina</td>
    <td>Hotel EnglishPoint & Spa has brought to Africa a modern international development that offers the very best in lifestyle and luxury. </td>
    <td>Silos Road, Mombasa</td>
	<td>0.0kshs</td>
  <td><div class="ratings">
    <?php 
   echo star_rating(3);?></div></td>
  </tr>
</table>

</body>

<script>
  //JS code for the filtering of data in the table
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</html>