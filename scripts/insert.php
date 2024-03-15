<?php

// Load the CodeIgniter framework
// require '../app/bootstrap.php';

// Load necessary libraries
$db = app\Config\Database::connect();

// Define data to insert
$data = [
    'name' => 'Example Gift',
    'description' => 'This is an example gift',
    'price' => 20.50,
    'stock' => 10,
    'tags' => 'tag1, tag2, tag3',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
];

// Insert the data into the database
$result = $db->table('gifts')->insert($data);

// Check if insertion was successful
if ($result) {
    echo "Records inserted successfully!";
} else {
    echo "Error: Failed to insert records.";
    // Log the error for further investigation
    error_log("Error: Failed to insert records.");
}
