<?php
$directory = "."; // Current directory
$files = scandir($directory);

$filteredFiles = array_filter($files, function ($file) {
    return $file !== "." && $file !== "..";
});

header('Content-Type: application/json');
echo json_encode(array_values($filteredFiles));
?>
