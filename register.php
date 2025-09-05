<?php
require_once 'classes/course.php';

$courseObj = new Course();
$courses = $courseObj->getAllCourses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #EBD9D1;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #9A3F3F;
            font-weight: bold;
            margin-bottom: 35px;
            text-align: center;
        }

        .form-box {
            background: #fff;
            border: 2px solid #9A3F3F;
            border-radius: 8px;
            padding: 20px;
            margin: 30px auto;
            max-width: 500px;
        }

        a {
            color: #000000ff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #9A3F3F;
            font-weight: bold;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"], 
        input[type="number"], 
        select {
            width: 100%;       
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        button {
            background: #9A3F3F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #9A3F3F;
        }

        #student_fields {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <a href="index.php">Back to Login</a>

    <div class="form-box">
        <h1>Registration</h1>
        <form method="POST" action="handlers/handleForms.php">
            <!-- Full Name -->
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" required>

            <!-- Email -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <!-- Confirm Password -->
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <!-- Role Selection -->
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="student" selected>Student</option>
                <option value="admin">Admin</option>
            </select>

            <!-- Student-specific fields -->
            <div id="student_fields">
                <label for="student_id">Student ID</label>
                <input type="text" name="student_id" id="student_id">

                <label for="course">Course</label>
                <select name="course" id="course">
                    <option value="">Select Course</option>
                    <?php foreach ($courses as $c): ?>
                        <option value="<?= htmlspecialchars($c['name']) ?>">
                            <?= htmlspecialchars($c['name']) ?> (<?= htmlspecialchars($c['code']) ?>)
                        </option>
                    <?php endforeach; ?>
                </select>

                <label for="year_level">Year Level</label>
                <input type="number" name="year_level" id="year_level" min="1" max="6">
            </div>

            <button type="submit" name="register_student">Register</button>
        </form>
    </div>

    <!-- JavaScript: Show/hide student fields based on role -->
    <script>
        const roleSelect = document.getElementById("role");
        const studentFields = document.getElementById("student_fields");

        const studentId = document.getElementById("student_id");
        const course = document.getElementById("course");
        const yearLevel = document.getElementById("year_level");

        function toggleStudentFields() {
            const isStudent = roleSelect.value === "student";
            studentFields.style.display = isStudent ? "block" : "none";

            // Toggle required attributes
            studentId.required = isStudent;
            course.required = isStudent;
            yearLevel.required = isStudent;
        }

        roleSelect.addEventListener("change", toggleStudentFields);
        window.addEventListener("DOMContentLoaded", toggleStudentFields);
    </script>
</body>
</html>
