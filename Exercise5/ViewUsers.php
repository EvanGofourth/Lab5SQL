<?php
echo("<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'><script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>");
echo("<div class = 'container'><div class = 'jumbotron'><h1>Users Table</h1></div></div>");
echo("<div class = 'container'><div class = 'jumbotron'>");

include '../Exercise1/LoginInformation.php';

if($mysqli->connect_errno){
  echo("<p>Connect to database failed.</p>");
  echo("<br>");
  exit();
}
else
{
  echo("<p>Connected to database.</p>");
  echo("<br>");
}

$query = "SELECT * FROM Users;";
$result = $mysqli->query($query);
if($result)
{
  echo("<table class = 'table'>");
  echo("<tr><th scope='col'>user_id</th></tr>");
  while($row = $result->fetch_assoc())
  {
    echo("<tr><td>");
    echo $row['user_id'];
    echo("</tr></td>");
  }
  echo("</table>");
}
echo("<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href= '../Exercise4/AdminHome.html'\">Back to Admin-Home!</button>");
echo("</div></div>");

 ?>
