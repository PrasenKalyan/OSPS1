<?php
$expirationDate = '2024-07-22';
$currentDate = date('Y-m-d');

if ($currentDate > $expirationDate) {
    echo "<span style='color: red;' >Expired: $expirationDate</span>";
} else {
    echo "<span> Not Expired: $expirationDate</span>";
}
?>
