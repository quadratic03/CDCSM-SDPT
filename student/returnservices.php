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
        .header h1 {
            font-size: 2rem;
            font-weight: bold;
        }
        .header .icons a {
            color: black;
            text-decoration: none;
        }
        .header .icons a i {
            margin-right: 5px;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        .table-container th,
        .table-container td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .table-container th {
            background-color: #f4f4f9;
        }
        .table-container .actions i {
            margin-right: 10px;
            cursor: pointer;
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

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Return Service Activity</h1>
                <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <table class="table-container">
                <thead>
                    <tr>
                        <th>Domingo E. Ancog Jr.</th>
                        <th>Example announcement</th>
                        <th class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Repeat for each row -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="actions">
                            <i class="fas fa-trash"></i>
                            <i class="fas fa-edit"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
