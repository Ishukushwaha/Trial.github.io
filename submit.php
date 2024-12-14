<?php
// Form data handle karen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $class = trim($_POST['class']);
    $section = trim($_POST['section']);
    $roll_no = trim($_POST['roll_no']);

    // Data ko format karna
    $data = "Name: " . $name . ", Class: " . $class . ", Section: " . $section . ", Roll No: " . $roll_no . "\n";

    // File path
    $file_path = 'data.txt';

    // File write karna aur error handling
    if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data submitted successfully! <a href='view.php'>View Data</a>";
    } else {
        echo "Error saving data. Please check file permissions.";
    }
} else {
    echo "Invalid request.";
}
?>
