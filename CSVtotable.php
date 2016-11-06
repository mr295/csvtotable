<?php
echo '<html><body><table>';
$file = fopen("file.csv", "r");

echo '<table border="1">';
while (($line = fgetcsv($file)) !== false) {
        echo '<tr>';
        foreach ($line as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
}
fclose($file);
echo '</table></body></html>';
?>