<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Status</title>
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
            width: 306px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .renewed {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .download-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .download-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <div class="logo">
                <img src="logonimichael.png" alt="Logo">
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
        </nav>

        <div class="main-content">
            <div class="header">
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

            <main>
                <h1>Student Status</h1>
                <table>
                    <thead>
                        <tr>
                            <th>SCHOOL</th>
                            <th>TOTAL RETURN SERVICE</th>
                            <th>STATUS</th>
                            <th>GRADE STATUS A.Y 2024-2025 (1ST SEM)</th>
                            <th>RENEWAL STATUS 2ND SEM A.Y 2024-2025</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>COC</td>
                            <td>5</td>
                            <td>COMPLIED</td>
                            <td>EVALUATED</td>
                            <td class="renewed">RENEWED</td>
                            <td><button class="download-btn">Download CSR</button></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script>
        document.querySelector('.download-btn').addEventListener('click', function() {
            alert('Download CSR functionality coming soon!');
        });
    </script>
</body>

</html>
