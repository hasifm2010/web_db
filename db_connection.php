<?php
function OpenCon()
{
 $dbhost = "db1";
 $dbuser = "app_user";
 $dbpass = "redhat";
 $db = "test_db";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
}

function CloseCon($conn)
{
 $conn -> close();
}

?>