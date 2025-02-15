<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'servervalidate.php'; ?>
    <form id="myForm" action="form.php" method="post" onsubmit="return validateForm()">
    <la>
        <legend>My Form</legend>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Name">
        <span class="error" id="nameError"><?php echo $nameError; ?></span><br><br>
        <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" placeholder="Age">
            <span class="error" id="ageError"><?php echo $ageError; ?></span>
            <br><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" placeholder="Description"></textarea>
            <span class="error" id="descriptionError"><?php echo $descriptionError; ?></span>
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <script src="clientvalidate.js"></script>
</body>
</html>