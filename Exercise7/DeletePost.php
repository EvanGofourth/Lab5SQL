<?php

include '../Exercise1/LoginInformation.php';
if($mysqli->connect_errno){
  echo("<p>Connect to database failed.</p>");
  echo("<br>");
  exit();
}

$DeleteArray = [];

$query = "SELECT post_id FROM Posts ORDER BY post_id DESC LIMIT 1;";
$result = $mysqli->query($query);


if($result)
{

$row = $result->fetch_assoc();
//echo $row['post_id'];
$highest_ID = $row['post_id'];
}



for($i = 1; $i < $highest_ID + 1; $i++)
{
$poststring = $i . "CHECKBOX";
if($_POST[$poststring] == "on")
{
  array_push($DeleteArray, $i);
}
}
echo("<br>");

for($i = 0; $i < count($DeleteArray); $i++)
{
  $query = "DELETE FROM Posts WHERE post_id = " . $DeleteArray[$i] . " ;";
  $result = $mysqli->query($query);
  if($result)
  {
  echo("Deleted post with post_id: ");
  echo $DeleteArray[$i];
  echo("<br>");
  }
  //echo("<br>");
  //echo $query;
}


 ?>
