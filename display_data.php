<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Data</title>
<style>
body {
    background-color: #67a5f1; 
    font-family: Arial, sans-serif;
    
}
table{
    background-color:yellow;
}
</style>
</head>
<body>

<div class="container">
    <h2 align="center">Data from database </h2>
    <center>
    <table border="1" cellspacing="7" width="100%">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">Name</th>
            <th width="20%">Address</th>
            <th width="15%">Mobile</th>
            <th width="25%">Email</th>
            <th width="25%">Operations</th>
        </tr>
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $database = "office";

        // Attempt to create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the database
        $sql = "SELECT * FROM office_table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['mobile']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td><a href='update.php?id={$row['id']}&n={$row['name']}&ad={$row['address']}&mo={$row['mobile']}&e={$row['email']}'>Update</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
    </center>
</div>

</body>
</html>
