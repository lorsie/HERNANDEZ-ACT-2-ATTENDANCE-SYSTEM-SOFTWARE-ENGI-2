<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin'){
    header("Location: ../index.php");
    exit;
}

include 'navbar.php';
require_once '../classes/student.php';

$studentObj = new Student();
$students = $studentObj->selectAll("students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #EBD9D1;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #9A3F3F;
            margin: 35px 0;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #9A3F3F;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #9A3F3F;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Students List</h1>

    <table>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
        </tr>
        <?php foreach($students as $s): ?>
        <tr>
            <td><?= htmlspecialchars($s['student_id']) ?></td>
            <td><?= htmlspecialchars($s['full_name']) ?></td>
            <td><?= htmlspecialchars($s['course']) ?></td>
            <td><?= htmlspecialchars($s['year_level']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>