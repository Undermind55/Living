<?php
$conn= mysqli_connect("localhost", "Undermind", "test123456", "livingland_lvcm");

/*if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Successfully connect to the database" . PHP_EOL;
echo "<br/>Host information: " . mysqli_get_host_info($link) . PHP_EOL;*/

mysqli_close($link);
?>

