<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Concern Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .container {
            display: flex;
            width: 100%;
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
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header .icons a {
            color: black;
            text-decoration: none;
        }
        .header .icons a i {
            margin-right: 5px;
        }
        .concern-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .concern-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .concern-header h2 {
            font-size: 1.5rem;
        }
        .concern-header .resolve-button {
            background-color: #10b981;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .concern-header .resolve-button:hover {
            background-color: #059669;
        }
        .concern-details {
            margin-bottom: 20px;
        }
        .concern-details p {
            margin: 5px 0;
        }
        .staff-reply {
            background-color: #f3f4f6;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .reply-button {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .reply-button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
<div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="logonimichael.png" alt="CDO Logo">
            </div>
            <ul>
            <ul>
            <li><a href="Student_dashboard.php"><i class="fas fa-home"></i> <span>Home</span></a></li>
            <li><a href="student_status.php"><i class="fas fa-user-graduate"></i> <span>Student Status</span></a></li>
            <li><a href="submission_proof.php"><i class="fas fa-file-alt"></i> <span>Submission Form/Consultation</span></a></li>
            <li><a href="calendar.php"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a></li>
            <li><a href="announcement.php"><i class="fas fa-bullhorn"></i> <span>Announcement</span></a></li>
            <li><a href="inbox.php"><i class="fas fa-inbox"></i> <span>Inbox</span></a></li> 
            <li><a href="returnservices.php"><i class="fas fa-users"></i> <span>Return Service Activity</span></a></li>
            <li><a href="AllowanceReleasing.php"><i class="fas fa-money-bill-wave"></i> <span>Allowance Releasing Schedule</span></a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> <span>Profile</span></a></li>
            </ul>
            </ul>
        </div>
        

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>My Concern</h1>
                <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="concern-container">
                <div class="concern-header">
                    <h2>No Schedule for Allowance</h2>
                    <button class="resolve-button">Resolve</button>
                </div>
                <div class="concern-details">
                    <p><strong>Submitted:</strong> January 10 2025</p>
                    <p><strong>Concern:</strong> I'm concerned because I haven't received a schedule for my allowance this month.</p>
                </div>
                <div class="staff-reply">
                    <p><strong>Staff Reply:</strong> The allowance schedule has been updated and will be available by tomorrow please check again then.</p>
                    <p>-Staff Jane, Feb 1, 2025, 08:45 AM</p>
                </div>
                <button class="reply-button">Reply Back</button>
            </div>
        </div>
    </div>
</body>
</html>