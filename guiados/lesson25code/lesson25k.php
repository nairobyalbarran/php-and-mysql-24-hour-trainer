<?php
define("MYSQLUSER", "php24sql");
define("MYSQLPASS", "hJQV8RTe5t");  
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

// Make connection to database

$conecction= @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if ($conecction->connect_error){
    die('Connect Error: ' . $conecction->connect_error);
}else{
    echo ' Successful connection to MySQL <br/>';
    $id=4;
    
    //Set up the prepared statment
    $query ="SELECT `first_name`, `last_name`"
            . "FROM `authors`"
            . "WHERE `id`=?";


//Prepare de statement 
$statement= $conecction->prepare($query);
//Bind the parameters
$statement->bind_param('i', $id);
//Execute the statement
$statement->execute();
//Bind the results
$statement->bind_result($first,$last);
//Run the query
$statement->fetch();
echo $first. '' . $last . '<br/>';
//Close the statment
$statement->close();
}