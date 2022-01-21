<?php 
$conn= mysqli_connect("localhost", "livingland_lvcm", "Hao7IlZ5Bw", "livingland_lvcm");


/*if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Successfully connect to the database" . PHP_EOL;
echo "<br/>Host information: " . mysqli_get_host_info($link) . PHP_EOL;

*/

$sql = "SELECT * FROM `customer`";  /*$sql = "SELECT * FROM `customer` where type='bug'";*/
$result = $conn->query($sql);
echo "<table border='1'>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo "<tr>";
        echo "<td>".$row["date"]."</td>"."<td>". $row["cus_name"]. "</td>"."<td>" . $row["cus_tel"]."</td>"."<td>".$row["cus_address"]."</td>"."<td>".$row["cus_provice"]."</td>"."<td>".$row["cus_amphoe"]."</td>"."<td>".$row["cus_tumbon"]."</td>"."<td>".$row["cus_zip"]."</td>"."<td>".$row["cus_comment"]."</td>"."<td>".$row["type"]."</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
mysqli_close($link);
?>
