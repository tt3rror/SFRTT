<?php
// Define the file path where the data will be saved
$filename = "data.txt"; //You can change this.

$redirect = "index.html"; //You can change this.


// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $reqData = print_r($_POST, true); // Convert the POST data to a readable string format
} else {
    // Get the raw GET data
    $reqData = print_r($_GET, true); // Convert the GET data to a readable string format
}


// Prepare the content to be saved
$content = "Date: " . date('Y-m-d H:i:s') . "\n";
$content .= "Data:\n" . $reqData . "\n";
$content .= "-----------------------------\n";

if (file_put_contents($filename, $content, FILE_APPEND)) {
    header("Location: " . $redirect);
} else {
    echo "Failed to save the data. Please check your permissions.";
}
?>
