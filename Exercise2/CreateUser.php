<?php

//echo "TEST";


include '../Exercise1/LoginInformation.php';

$User_Id = $_POST["USER_ID"];

if($mysqli->connect_errno){
  echo("<p>Connect failed.</p>");
  echo("<br>");
  exit();
}
else
{
  echo("<p>Connected.</p>");
  echo("<br>");
}

$query = "INSERT INTO Users (user_id)" .
   " VALUES( '" .
   $User_Id .
    "' );";

if ($result = $mysqli->query($query))
{
  echo("<p> Successfully added to table User: ");
  echo($User_Id);
  echo("</p><br>");
}
else
{
  echo("<p> Failed to add to table User: ");
  echo($User_Id);
  echo("</p><br><p>");
  echo("User already exists.</p>")
}

?>
