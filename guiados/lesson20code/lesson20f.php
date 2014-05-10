<?php
define("MYSQLUSER", "php24sql");
define("MYSQLPASS", "hJQV8RTe5t");
define("HOSTNAME", "localhost");
define("MYSQLDB", "smithside");

// set up the Database connection
if ($connection = new PDO('mysql:host='.HOSTNAME.';dbname=' . MYSQLDB,
MYSQLUSER, MYSQLPASS)) {
echo 'Successful connection to MySQL <br/>';
if ($result = $connection->query("SHOW TABLES")) {
echo "Tables:<br/>";
while ($row =$result->fetch(PDO::FETCH_NUM)) {
echo $row[0]. '<br />';
}
}
}

