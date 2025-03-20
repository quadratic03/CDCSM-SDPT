<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
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

        .profile-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .profile-picture {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 30%;
        }

        .profile-picture img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-details {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 10px;
            width: 65%;
        }

        .profile-details .detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .profile-details .detail {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.profile-details .detail span {
    font-weight: bold;
    text-align: left;
    width: 100%;
}

.profile-details .buttons {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
}

.profile-details .buttons button {
    margin-left: 10px;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.profile-details .buttons .resolve-button {
    background-color: #4CAF50; 
}

.profile-details .buttons .reply-button {
    background-color: #007BFF; 
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
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Profile</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="profile-container">
                <div class="profile-picture">
                    <img src="profile.png" alt="Profile Picture">
                    <h2>Domingo E. Ancog Jr.</h2>
                    <p>Bachelor of Science in Information Technology</p>
                    <p>Barangay Bonbon Cagayan de Oro City</p>
                </div>
                <div class="profile-details">
                    <div class="detail">
                        <span>Full name:</span>
                        <span>Domingo E. Ancog Jr.</span>
                    </div>
                    <div class="detail">
                        <span>Email:</span>
                        <span>Domingo@gmail.com</span>
                    </div>
                    <div class="detail">
                        <span>Phone:</span>
                        <span>092654875321</span>
                    </div>
                    <div class="detail">
                        <span>Address:</span>
                        <span>Zone 6 Bonbon, Cagayan de Oro City</span>
                    </div>
                    <div class="detail">
                        <span>Course:</span>
                        <span>Bachelor of Science in Information Technology</span>
                    </div>
                    <div class="buttons">
                        <button class="resolve-button">Edit</button>
                        <button class="reply-button">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
