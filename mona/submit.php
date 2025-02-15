<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted successfully!";
} else {
    echo "Invalid request method: " . $_SERVER["REQUEST_METHOD"];
}
?>
