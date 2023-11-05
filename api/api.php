<?php
  
// Read JSON file
$jsonData = file_get_contents('api.json');

// Decode JSON data to PHP associative array
$data = json_decode($jsonData, true);

// Set header for JSON content
header('Content-Type: application/json');

// Output the JSON data
echo json_encode($data);
