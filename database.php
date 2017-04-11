<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job";

$company_name= $_POST["name"];
$company_position= $_POST["position"];
$company_location= $_POST["location"];
$company_salary= $_POST["salary"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO job (Company, Position, Salary, Location) VALUES (" . "'" . $company_name . "'". ", " . "'". $company_position . "'". "," . $company_salary . "," . "'" .$company_location . "'". ")";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "show the data in your database: ";
$sql = "SELECT * FROM job";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br>Company:    ". $row["Company"]. "<br>" . "Position:    ". $row["Position"] . "<br>". "Salary:    " . $row["Salary"] . "<br>". "Location:   ". $row["Location"] . "<br><br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>


