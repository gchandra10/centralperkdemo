<?php
ksort($json_data);
foreach ($json_data as $key1 => $value1) {
    echo "<a href='index.php?p=" . $json_data[$key1]["topic"] . "'>" . $json_data[$key1]["heading"] . "</a> | ";
}
?>