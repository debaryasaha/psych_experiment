<?php
$filePath = 'main/PSYCH_PROJECT/RESULTS1.csv';


header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));


readfile($filePath);
?>
