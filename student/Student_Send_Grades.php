<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Grades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Send Grades</h1>
        <form action="send_grades.php" method="post">
            <label for="gradeDetails">Grade Details:</label>
            <textarea id="gradeDetails" name="gradeDetails" required></textarea>
            <button type="submit">Send Grades</button>
        </form>
    </div>
</body>
</html>
