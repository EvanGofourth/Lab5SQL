<?php

/*
*@file: exercise1.php
*@author: Evan Gofourth
*@date: 3/21/19
*/


/*
* I am including LoginInformation.php here.
* It will include my username and password for
* accessing the database, as well as the database URL
* and database name. I will NOT be uploading LoginInformation.php
* to GitHub, but it will be available in my public_html folder.
*
* It includes one line of code to that looks like:
* $mysqli = new mysqli(DatabaseURL, Username, Password, DatabaseName);
*/

include 'LoginInformation.php';

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


$query = "CREATE TABLE Users" .
   "(" .
   "user_id varchar(255) NOT NULL, " .
   "PRIMARY KEY (user_id) " .
    ");";

if ($result = $mysqli->query($query))
{
  echo("<p>Users table created.</p>");
  echo("<br>");
}
else
{
  echo("<p>Users table could not be created.</p>");
  echo("<br>");
}

  $query = "CREATE TABLE Posts" .
           "(" .
           "post_id int NOT NULL AUTO_INCREMENT, " .
           "content varchar(5000) NOT NULL, " .
           "author_id varchar(255) NOT NULL, " .
           "PRIMARY KEY (post_id), " .
           "FOREIGN KEY (author_id) REFERENCES Users(user_id) " .
           ");";

if($result = $mysqli->query($query))
  {
    echo("<p>Posts table created.</p>");
    echo("<br>");
  }
else
  {
    echo("<p>Posts table could not be created.</p>");
    echo("<br>");
  }




 ?>
