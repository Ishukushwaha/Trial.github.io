<?php
$file_path = 'data.txt';

// File ko read karna
if (file_exists($file_path)) {
    $data = file_get_contents($file_path);
    echo "<h1>Submitted Data</h1>";
    echo "<pre>$data</pre>";
} else {
    echo "No data available.";
}
?>
