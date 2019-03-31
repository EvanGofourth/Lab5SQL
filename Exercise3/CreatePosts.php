
<?php

include '../Exercise1/LoginInformation.php';

$Post_Content = $_POST["POST"];
$User_ID = $_POST["USER_ID"];
$Post_Failed = false;


echo("<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'><script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>");
echo("<div class = 'container'><div class = 'jumbotron'><h1>Results</h1>");
echo("<br>");

if($Post_Content == "")
{
  echo("<p> You may not make an empty post. Post NOT saved.</p><br>");
  $Post_Failed = true;
}

if($Post_Failed == false)
{



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

$query = "SELECT * FROM Users WHERE user_id = \"" . $User_ID . "\";";
//echo $query;
$result = $mysqli->query($query);
if ($result->num_rows > 0)
{
  //The user id was valid, proceed.
  $query = "INSERT INTO Posts (content, author_id) VALUES ('" . $Post_Content . "' , '" .   $User_ID . "');";
  //echo $query;
  $result = $mysqli->query($query);
  if($result)
  {
    echo("<p> Post saved!");
    echo("</p><br>");
  }
  else
  {
    echo("<p> Something went wrong.");
    echo("</p><br>");
  }


}
else
{
  echo("<p>User_ID was not valid. Post NOT saved.");
  echo("</p><br>");

}



}
echo("<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"window.location.href= 'CreatePosts.html'\">Back to Create-a-Post!</button>");
echo("</div></div>");
 ?>
