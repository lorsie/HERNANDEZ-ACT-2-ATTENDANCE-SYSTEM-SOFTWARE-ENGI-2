<?php
if(!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['user']) && $_SESSION['user']['role'] === 'student'):
?>
    <nav class="navbar">
        <div class="navbar-left">
            <span>Student Dashboard</span>
        </div>
        <div class="navbar-right">
            <a href="dashboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="viewAttendance.php">History</a>
            <a href="../handlers/handleForms.php?logoutUserBtn=1">Logout</a>
        </div>
    </nav>

    <style>
        .navbar {
            width: 100%;
            background: #9A3F3F;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            box-sizing: border-box;
            overflow-x: hidden;
        }

        .navbar-left span {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar-right a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            margin-left: 20px;
            padding: 6px 10px;
            border-radius: 4px;
            transition: background 0.3s;
            font-size: 14px;
        }

        .navbar-right a:hover {
            background: #9A3F3F;
            color: #333;
            text-decoration: none;
        }
    </style>
<?php endif; ?>