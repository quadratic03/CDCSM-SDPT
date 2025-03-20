<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scholar Submission List</title>
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
            margin-bottom: 20px;
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
            justify-content: flex-end;
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
        .submission-list {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .submission-list .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #003366;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .submission-list .search-bar input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .submission-list .search-bar i {
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f9;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .pagination button {
            background-color: #e0e0e0;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin: 0 5px;
        }
        .pagination button:hover {
            background-color: #ccc;
        }
        .action-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .action-btn:hover {
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
                <a href="student_concern.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../staff_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <h1 class="text-center mb-8">STUDENT SCHOLAR SUBMISSION LIST</h1>
            <div class="submission-list">
                <div class="search-bar">
                    <input type="text" placeholder="Search Student...">
                    <span>Student Scholar Submission List</span>
                    <i class="fas fa-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>School</th>
                            <th>Date Submitted</th>
                            <th>Activity</th>
                            <th>Render</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. Francis Oliver Alaba</td>
                            <td>USTP</td>
                            <td>Jan 1, 2025</td>
                            <td>Clean up Drive</td>
                            <td>5</td>
                            <td><a href="#" class="text-blue-500">cleanupdrive.jpg</a></td>
                            <td><button class="action-btn">Approve</button></td>
                        </tr>
                        <tr>
                            <td>2. Michael I. Nacaya</td>
                            <td>Xavier</td>
                            <td>Dec 12, 2024</td>
                            <td>Tree Planting</td>
                            <td>5</td>
                            <td><a href="#" class="text-blue-500">cleanupdrive.jpg</a></td>
                            <td><button class="action-btn">Approve</button></td>
                        </tr>
                        <tr>
                            <td>3. Roberth Namoc</td>
                            <td>Lourdes</td>
                            <td>Dec 16, 2024</td>
                            <td>Community Service</td>
                            <td>5</td>
                            <td><a href="#" class="text-blue-500">cleanupdrive.jpg</a></td>
                            <td><button class="action-btn">Approve</button></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="text-center text-gray-400">No more submissions available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <button><i class="fas fa-angle-double-left"></i></button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button><i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>
</body>
</html>
