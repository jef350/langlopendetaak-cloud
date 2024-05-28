<?php
$servername = "db";
$username = "user";
$password = "password";
$database = "mydatabase";

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Voer een eenvoudige query uit
$sql = "SELECT * FROM visits";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data van elke rij
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Visit: " . $row["visit"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
