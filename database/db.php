<?php
require_once('database.php');
// $con = mysqli_connect("localhost","root","","lekejao_0.0.1") or die("Some error occurred during connection " . mysqli_error($con));

$con =new Database("localhost","root","","lekejao_0.0.1");
// Write query

$strSQL = "SELECT * FROM `clients` LIMIT 0,3";

// Execute the query.

$query = $con->query_database($strSQL);
// $query = mysqli_query($con, $strSQL);
while($result = mysqli_fetch_array($query))
{
  echo $result["first_name"]."<br />";
}

// Close the connection
// mysqli_close($con);

?>
