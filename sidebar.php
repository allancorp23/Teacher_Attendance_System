<div class="container-left">
    <div class="top">
        <img src="./images/icon.ico" alt="Icon">
        <h1>Teachers Attendance System</h1>
        <h1>[TAS]</h1>
    </div>
    <div class="links">
        <a href="./dashboard.php"><img src="./images/dashboard.ico" alt="Icon"> Dashboard</a>
        <a href="./teachers.php"><img src="./images/teachers.ico" alt="Icon"> Teachers</a>
        <a href="#"><img src="./images/attendance.ico" alt="Icon"> Attendance</a>
        <a href="#"><img src="./images/report.ico" alt="Icon"> Report</a>
        <a href="./users.php"><img src="./images/users.ico" alt="Icon"> Users</a>
        <a href="./account_settings.php"><img src="./images/settings.ico" alt="Icon"> Account Settings</a>
    </div>
    <div class="bottom">
        <p><?php echo $_SESSION['tas_user'];?></p>
        <a href="./logout.php">Logout</a>
    </div>
</div>