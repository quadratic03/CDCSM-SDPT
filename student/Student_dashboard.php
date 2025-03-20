
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 100vh;
        }
       
        .sidebar .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 0;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .sidebar ul li i {
            margin-right: 10px;
        }

        .sidebar ul li:hover {
            background-color: #004080;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            width: 100%;
        }
        .header {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        .header .icons a {
            color: black;
            text-decoration: none;
        }
        .header .icons a i {
            margin-right: 5px;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            margin-top: -20px;
        }
        .main-content .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .main-content .header .welcome {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .main-content .header .icons {
            display: flex;
            gap: 10px;
        }
        .main-content .header .icons a {
            color: black;
            text-decoration: none;
        }
        .main-content .header .icons a i {
            color: black;
        }
        .main-content .content-area {
            display: flex;
            flex-grow: 1;
        }
        .main-content .content-area .grid {
            flex-grow: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-right: 20px;
        }
        .main-content .content-area .grid div {
            background-color: #e0e0e0;
            padding: 30px;
            text-align: center;
            border-radius: 5px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .main-content .content-area .grid div i {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .main-content .content-area .grid div span {
            color: black;
        }
        .main-content .content-area .calendar {
            width: 30%;
        }
        .main-content .calendar table {
            border-collapse: collapse;
            width: 100%;
        }
        .main-content .calendar table th,
        .main-content .calendar table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
session_start(); // Start the session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; // Retrieve username from session
    <div class="sidebar">

        <?php include '../components/sidebar.php'; renderSidebar("student", "Student_dashboard.php"); ?>


    </div>
    <div class="main-content">
        <div class="header">
            <h2>Welcome, <?php echo $username;?></h2>
            <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
        <div class="content-area">
            <div class="grid">
                <div><i class="fas fa-user-graduate"></i> <span>Student Status</span></div>
                <div><i class="fas fa-file-alt"></i> <span>Submission Form</span></div>
                <div><i class="fas fa-calendar-alt"></i> <span>Calendar</span></div>
                <div><i class="fas fa-bullhorn"></i> <span>Announcement</span></div>
                <div><i class="fas fa-users"></i> <span>Return Service Activity</span></div>
                <div><i class="fas fa-user"></i> <span>Profile</span></div>
                <div><i class="fas fa-money-bill-wave"></i> <span>Allowance Releasing Schedule</span></div>
            </div>
        </div>
    </div>
</body>
</html>
