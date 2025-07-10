<?php
function showError($message) {
    echo "<div style='color: #fff; background: #d9534f; padding: 10px; border-radius: 4px; margin: 10px 0; font-weight: bold;'>"
        . htmlspecialchars($message) .
        "</div>";
}
?>