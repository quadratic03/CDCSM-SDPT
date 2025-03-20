<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Submission Form</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container">
        <h1>Student Submission Form</h1>
        <form action="submit_form.php" method="post">
            <label for="studentName">Name:</label>
            <input type="text" id="studentName" name="studentName" required>
            <label for="submissionDetails">Details:</label>
            <textarea id="submissionDetails" name="submissionDetails" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
