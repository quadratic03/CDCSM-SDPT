<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_RSA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background-color: #003366;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px auto;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-radius: 6px;
        }

        .sidebar ul li i {
            margin-right: 12px;
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

        /* Main Content */
        .main-content {
            margin-left: 270px;
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
            font-size: 1.8rem;
        }

        .header .icons a {
            color: black;
            text-decoration: none;
            margin-left: 15px;
        }
        .header .icons a i {
            margin-right: 5px;
        }

        .announcement-container {
            background-color: #e5e7eb;
            padding: 20px;
            border-radius: 8px;
        }

        .announcement-container label {
            display: block;
            margin-bottom: 8px;
            color: #4b5563;
        }

        .announcement-container input,
        .announcement-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        .announcement-container .date-container {
            display: flex;
            align-items: center;
        }

        .announcement-container .date-container i {
            margin-right: 8px;
            color: #6b7280;
        }

        .announcement-container .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .announcement-container .buttons button {
            background-color: #3b82f6;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .announcement-container .buttons button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="logonimichael.png" alt="CDO Logo">
            <nav>
                <ul>
                    <li><a href="admin_dashboard.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="admin_SSS.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a></li>
                    <li><a href="admin_announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a></li>
                    <li><a href="admin_SSSL.php"><i class="fas fa-list-alt"></i> Students Scholar Submission List</a></li>
                    <li><a href="admin_RSA.php"><i class="fas fa-users"></i> Return Service Activity</a></li>
                    <li><a href="admin_ars.php"><i class="fas fa-money-bill-wave"></i> Allowance Releasing Schedule</a></li>
                    <li><a href="admin_archive.php"><i class="fas fa-archive"></i> Archive</a></li>
                    <li><a href="admin_editst.php"><i class="fas fa-user"></i> Staff Account</a></li>
                    <li><a href="admin_editstud.php"><i class="fas fa-user-circle"></i> Student Account</a></li>
                    <li><a href="admin_student_concern.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a></li>
                    <li><a href="admin_registration.php"><i class="fas fa-clipboard-list"></i> Registration</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Return Service Activity</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-archive"></i> Archive</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../admin_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

            <div class="announcement-container">
                <div class="mb-4">
                    <label>Title</label>
                    <input type="text"/>
                </div>
                <div class="mb-4">
                    <label>Date</label>
                    <div class="date-container">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date"/>
                    </div>
                </div>
                <div class="mb-4">
                    <label>Text</label>
                    <textarea rows="10"></textarea>
                </div>
                <div class="buttons">
                    <button>Announcement</button>
                    <button>SMS</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>