<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Scholar Status</title>
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
            width: 290px;
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
     
        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-container button {
            background-color: #e0e0e0;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .search-container button:hover {
            background-color: #ccc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f9;
        }
        .status-complied {
            color: #10b981;
        }
        .status-not-complied {
            color: #ef4444;
        }
        .pagination {
            display: flex;
            justify-content: space-between;
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="flex items-center mb-8">
                <img alt="CDO Logo" src="logonimichael.png">
                <div>
                 
                </div>
            </div>
            <nav>
                <a href="staff_dashboard.php"><i class="fas fa-home"></i> Home</a>
                <a class="active" href="student_scholar_status.php"><i class="fas fa-user-graduate"></i> Students Scholar Status</a>
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
                <h1>STUDENTS SCHOLAR STATUS</h1>
                <div class="icons">
                <a href="#"><i class="fas fa-bell"></i> Notification</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
                <a href="../staff_login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div class="search-container">
                <input type="text" placeholder="Search Student...">
                <button>
                    All
                    <i class="fas fa-caret-down"></i>
                </button>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>NAME OF SCHOLAR</th>
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
                            <td>1. ALABA, FRANCIS OLIVER G.</td>
                            <td>COC</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>2. ANCOG, DOMINGO E.</td>
                            <td>USTP</td>
                            <td>5</td>
                            <td class="status-not-complied">NOT COMPLIED</td>
                            <td class="status-not-complied">NOT EVALUATED YET</td>
                            <td class="status-not-complied">NOT RENEWED YET</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>3. ANGKA, CHRISTIAN DAVE</td>
                            <td>LOURDES</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>4. ATIS, DAVE E.</td>
                            <td>USTP</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>5. ATABA, JULIAN G.</td>
                            <td>USTP</td>
                            <td>5</td>
                            <td class="status-not-complied">NOT COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-not-complied">NOT RENEWED YET</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>6. BABAWÉ, ANGEL MAE T.</td>
                            <td>CU</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>7. BABALAKA, FAITH H.</td>
                            <td>XAVIER</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>8. CASIPONG, DARWIN S.</td>
                            <td>COC</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>9. CANLAWAN, AXEL V.</td>
                            <td>COC</td>
                            <td>5</td>
                            <td class="status-complied">COMPLIED</td>
                            <td class="status-complied">EVALUATED</td>
                            <td class="status-complied">RENEWED</td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <button>
                    <i class="fas fa-angle-double-left"></i>
                    Previous
                </button>
                <div>
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                    <button>4</button>
                    <button>5</button>
                </div>
                <button>
                    Next
                    <i class="fas fa-angle-double-right"></i>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
