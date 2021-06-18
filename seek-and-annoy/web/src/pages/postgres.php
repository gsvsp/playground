<?php
$dbconn = pg_connect("host=postgres dbname=saa user=saa-user password=saa-password") or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SHOW TABLES';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo $result;

// Free resultset
pg_free_result($result);

pg_close($dbconn);
?>