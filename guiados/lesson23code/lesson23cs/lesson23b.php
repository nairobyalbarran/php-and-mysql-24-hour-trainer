<?php

define("MYSQLUSER", "php24sql");
define("MYSQLPASS", "hJQV8RTe5t");
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

//make connecction to databse
$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if ($connection->connect_error) {
    die('Conect Error: ' . $conecction->connect_error);
} else {
    echo 'Successful conecction to MySQL <br/>';
}
//Set up the query
 
  $query = "SELECT * FROM `tabla1` " 
   . " WHERE `code` = 15"
   . " ORDER BY `description` ASC "
   ;

//Run the query
$result_obj = '';
$result_obj = $connection->query($query);

//Read the results
//lopp through the results object, row by row
//reading each row into an associative array
while ($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
    //display the array
    print_r($result);
    echo '<br/>';
}
