<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Concern</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Student Concern</h1>
        <form action="submit_concern.php" method="post">
            <label for="concernDetails">Concern Details:</label>
            <textarea id="concernDetails" name="concernDetails" required></textarea>
            <button type="submit">Submit Concern</button>
        </form>
    </div>
</body>
</html>
