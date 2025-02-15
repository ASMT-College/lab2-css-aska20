<?php
$nameError = $ageError = $descriptionError = "";
$name = $age = $description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameError = "Name is required.";
    } elseif (strlen($_POST["name"]) < 4) {
        $nameError = "Name must be at least 4 characters long.";
    } else {
        $name = $_POST["name"];
    }

    // Validate Age
    if (empty($_POST["age"])) {
        $ageError = "Age is required.";
    } elseif ($_POST["age"] < 18) {
        $ageError = "Age must be at least 18 years.";
    } else {
        $age = $_POST["age"];
    }

    // Validate Description
    if (empty($_POST["description"])) {
        $descriptionError = "Description is required.";
    } else {
        $description = $_POST["description"];
    }
}
?>