<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Scholar Concern</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f9;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .sidebar {
            width: 240px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 110vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px auto;
        }

        .sidebar h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .sidebar p {
            font-size: 0.875rem;
        }
        .sidebar nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .sidebar nav a i {
            margin-right: 10px;
        }
        .sidebar nav a:hover {
            background-color: #004080;
        }
        .sidebar nav a.active {
            background-color: #004080;
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
            <nav>
                <a href="staff_dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a href="student_scholar_status.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a>
                <a href="staff_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a>
                <a href="student_scholar_sub.php"><i class="fas fa-list"></i> Students Scholar Submission List</a>
                <a href="staff_rsa.php"><i class="fas fa-users"></i> Return Service Activity</a>
                <a href="staff_Ars.php"><i class="fas fa-calendar-alt"></i> Allowance Releasing Schedule</a>
                <a href="staff_profile.php"><i class="fas fa-user"></i> Profile</a>
                <a href="student_concern.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a>
            </nav>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Students Scholar Concern</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../staff_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="profile-container">
                <div class="profile-details" style="width: 100%;">
                    <div class="detail">
                        <input class="border border-gray-300 rounded px-4 py-2 w-1/2" placeholder="Search Student..." type="text"/>
                        <div class="flex items-center space-x-2">
                            <span>All</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="detail" style="flex-direction: column; align-items: flex-start;">
                        <p><strong>Name:</strong> Domingo E. Ancog Jr.</p>
                        <p><strong>Title:</strong> No Schedule for Allowance</p>
                        <p><strong>Concern:</strong> I'm concerned because I haven't received a schedule for my allowance this month.</p>
                        <div class="mt-4">
                            <button class="text-blue-500 mr-4"><i class="fas fa-reply"></i> Reply</button>
                            <button class="text-red-500"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                        <div class="mt-4">
                            <textarea class="border border-gray-300 rounded w-full p-2" placeholder="Reply..."></textarea>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>