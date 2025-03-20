<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Scholarships Office</title>
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

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #003366;
            color: white;
        }

        .status-evaluated {
            background-color: #28a745;
            color: white;
        }

        .status-not-evaluated {
            background-color: #dc3545;
            color: white;
        }

        .btn-edit {
            background-color: #ffc107;
            color: black;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-delete {
            background-color: #dc3545;
            color: black;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-container {
            display: flex;
            margin-bottom: 20px;
        }

        .search-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-container button {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #003366;
            color: white;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .actions {
            display: flex;
            gap: 10px;
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
                    <li><a href="archive.php"><i class="fas fa-archive"></i> Archive</a></li>
                    <li><a href="admin_editst.php"><i class="fas fa-user"></i> Staff Account</a></li>
                    <li><a href="admin_editstud.php"><i class="fas fa-user-circle"></i> Student Account</a></li>
                    <li><a href="admin_ssc.php"><i class="fas fa-question-circle"></i> Student Scholar Concern</a></li>
                    <li><a href="admin_registration.php"><i class="fas fa-clipboard-list"></i> Registration</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>ALLOWANCE RELEASING SCHEDULE</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-bell"></i> Notification</a>
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                    <a href="../admin_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

            <div class="search-container">
                <input type="text" placeholder="Search Student...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <!-- Allowance Releasing Schedule Table -->
            <table>
                <thead>
                    <tr>
                        <th>NAME OF SCHOLAR</th>
                        <th>CASHIER NO.</th>
                        <th>PAYROLL NO.</th>
                        <th>PERIOD</th>
                        <th>VENUE</th>
                        <th>SCHEDULE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. ALBA, FRANCIS OLIVER G.</td>
                        <td>1</td>
                        <td>120</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2. ANGCO, DOMINGO E.</td>
                        <td>1</td>
                        <td>442</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3. ANGKA, CHRISTIAN DAVE</td>
                        <td>1</td>
                        <td>212</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4. ATIS, DAVE E.</td>
                        <td>5</td>
                        <td>111</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5. ATABA, JULIAN G.</td>
                        <td>5</td>
                        <td>321</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6. BABAE, ANGEL MAE T.</td>
                        <td>7</td>
                        <td>643</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>7. BABALAKA, FAITH H.</td>
                        <td>8</td>
                        <td>123</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>8. CASIPONG, DARWIN S.</td>
                        <td>9</td>
                        <td>123</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>9. CANLAWAN, AXEL V.</td>
                        <td>3</td>
                        <td>142</td>
                        <td>OCTOBER - DECEMBER 2024</td>
                        <td>City Hall Quadrangle</td>
                        <td>January 27, 2025 - 1:00pm - 3:00pm</td>
                        <td class="actions">
                            <button class="btn-delete">Delete</button>
                            <button class="btn-edit">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination" style="display: flex; justify-content: center; margin-top: 20px;">
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">Previous</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">1</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">2</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">3</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">4</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">5</button>
                <button style="padding: 10px; border: 1px solid #ddd; background-color: white; cursor: pointer;">Next</button>
            </div>
        </div>
    </div>
</body>
</html>