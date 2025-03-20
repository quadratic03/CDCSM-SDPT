<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Page</title>
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
            height: 100vh;
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
            margin-bottom: 30px;
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
        .header .logout-btn {
            background-color: #e0e0e0;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .header .logout-btn:hover {
            background-color: #ccc;
        }
        .announcement-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .announcement-form label {
            color: #4a5568;
            font-weight: bold;
        }
        .announcement-form input,
        .announcement-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .announcement-form .date-input {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .announcement-form .date-input i {
            margin-right: 10px;
        }
        .announcement-form .date-input input {
            border: none;
            flex-grow: 1;
        }
        .announcement-form .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .announcement-form .actions button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .announcement-form .actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
        <img alt="CDO Logo" src="logonimichael.png">
 
            <nav>
                <a href="staff_dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a href="student_scholar_status.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a>
                <a href="staff_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a>
                <a href="student_scholar_sub.php"><i class="fas fa-list"></i> Students Scholar Submission List</a>
                <a href="staff_rsa.php"><i class="fas fa-users"></i> Return Service Activity</a>
                <a href="staff_Ars.php"><i class="fas fa-calendar-alt"></i> Allowance Releasing Schedule</a>
                <a href="staff_profile.php"><i class="fas fa-user"></i> Profile</a>
                <a href="student_concern.php"><i class="fas fa-comments"></i> Student Scholar Concern</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Return Service Activity</h1>
                <div class="icons">
                <a href="#"><i class="fas fa-archive"></i> Archive</a>
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../staff_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
               
                </div>
            </div>
            <div class="announcement-form">
                <div class="mb-4">
                    <label>Title</label>
                    <input type="text" placeholder="Enter title">
                </div>
                <div class="mb-4">
                    <label>Date</label>
                    <div class="date-input">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date">
                    </div>
                </div>
                <div class="mb-4">
                    <label>Text</label>
                    <textarea placeholder="Enter announcement text"></textarea>
                </div>
                <div class="actions">
                    <button>Announcement</button>
                    <button>SMS</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
