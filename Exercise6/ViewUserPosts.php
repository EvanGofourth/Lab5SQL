<?php

echo("<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'><script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>");
echo("<div class = 'container'><div class = 'jumbotron'><h1>Posts by ");
echo $_POST["SELECT_BOX"];
echo("</h1></div></div>");
echo("<div class = 'container'><div class = 'jumbotron'>");

include '../Exercise1/LoginInformation.php';
if($mysqli->connect_errno){
  echo("<p>Connect to database failed.</p>");
  echo("<br>");
  exit();
}

$query = "SELECT * FROM Posts WHERE author_id = \"" . $_POST["SELECT_BOX"] . "\";";
//echo $query;
$result = $mysqli->query($query);
if($result)
{
  echo("<table class = 'table'>");
  echo("<tr><th scope='col'>post_id</th><th scope='col'>content</th></tr>");
  while($row = $result->fetch_assoc())
  {
    echo("<tr><td>");
    echo $row['post_id'];
    echo("</td>");
    echo("<td>");
    echo $row['content'];
    echo("</td>");
    echo("</tr>");
  }
  echo("</table>");
}
echo("</div></div>");
 ?>
