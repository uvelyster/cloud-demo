<?php

$conn = mysqli_connect("phpdbsvc","testuser","testpass","webtest",3306);

$sql = "SELECT * FROM items";

$result = mysqli_query($conn,$sql);
if ($result=== false){
    echo 'error occured.';
    error_log(mysqli_error($conn));
}
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Description</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";  
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["description"] . "</td>"; 
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

echo 'Succeed. <a href="index.php"> back</a>';

?>
