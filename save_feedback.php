<?php
date_default_timezone_set("America/Chicago"); // Set your time zone

$data = "=== New Feedback: " . date("Y-m-d H:i:s") . " ===\n";
$data .= "Fun Rating: " . $_POST['Fun Rating'] . "\n";
$data .= "Length Opinion: " . $_POST['Length Opinion'] . "\n";
$data .= "Estimated Value: " . $_POST['Estimated Value'] . "\n";
$data .= "Favorite Part: " . $_POST['Favorite Part'] . "\n";
$data .= "Favorite Challenge: " . $_POST['Favorite Challenge'] . "\n";
$data .= "Suggestions: " . $_POST['Suggestions'] . "\n";
$data .= "Name: " . $_POST['Name'] . "\n";
$data .= "Email: " . $_POST['Email'] . "\n";
$data .= "-----------------------------\n\n";

file_put_contents("feedback.txt", $data, FILE_APPEND);
echo "<h2>🎉 Thank you! Your feedback has been recorded.</h2>";
?>
