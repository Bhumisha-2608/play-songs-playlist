<?php
$conn = new mysqli("localhost", "root", "", "psp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully.<br>";

// File path
$filePath = 'C:/xampp/htdocs/PSP/1.mp3';
if (!file_exists($filePath)) {
    die("Error: File does not exist at path: $filePath<br>");
}
echo "File exists at: $filePath<br>";

// Read file contents
$fileData = file_get_contents($filePath);
if ($fileData === false) {
    die("Error: Unable to read file data.<br>");
}
echo "File data read successfully.<br>";

// Get file name
$fileName = basename($filePath);
echo "File name: $fileName<br>";

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO audio_files (id, filename, file_data) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Error: Failed to prepare SQL statement: " . $conn->error . "<br>");
}
echo "SQL statement prepared successfully.<br>";

// Bind and execute
$id = 1; // Example ID
$stmt->bind_param("iss", $id, $fileName, $fileData);
if (!$stmt->execute()) {
    die("Error: Failed to execute SQL statement: " . $stmt->error . "<br>");
}

echo "File inserted successfully!<br>";

$stmt->close();
$conn->close();
?>
