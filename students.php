<?php
$student = [
    ["name" => "عمر", "grade" => 95, "age" => 20],
    ["name" => "عبدالله", "grade" => 85, "age" => 21],
    ["name" => "دان", "grade" => 75, "age" => 22],
    ["name" => "احمد", "grade" => 65, "age" => 20],
    ["name" => "علي", "grade" => 55, "age" => 21]
];

function calculateStatus($grade) {
    if ($grade >= 90) {
        return "ممتاز";
    } elseif ($grade >= 80) {
        return "جيد جدا";
    } elseif ($grade >= 70) {
        return "جيد";
    } elseif ($grade >= 60) {
        return "مقبول";
    } else {
        return "راسب";
    }
}

$highestGrade = 0;
$lowestGrade = 100;
$totalGrades = 0;
$passedStudents = 0;
$studentCount = 5;

foreach ($student as $s) {
    if ($s['grade'] > $highestGrade) {
        $highestGrade = $s['grade']; 
    }
    if ($s['grade'] < $lowestGrade) {
        $lowestGrade = $s['grade'];
    }
    
    $totalGrades += $s['grade'];
    
    if ($s['grade'] >= 60) {
        $passedStudents++;
    }
}

$averageGrade = $totalGrades / $studentCount;
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بيانات الطلاب</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 60%; border-collapse: collapse; margin-bottom: 20px; text-align: center; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f4f4f4; }
        .stats { background-color: #e9ecef; padding: 15px; border-radius: 5px; width: 57%; }
    </style>
</head>
<body>

    <h2>جدول بيانات الطلاب</h2>
    <table>
        <tr>
            <th>اسم الطالب</th>
            <th>العمر</th>
            <th>الدرجة</th>
            <th>الحالة</th>
        </tr>
        <?php foreach ($student as $s): ?>
        <tr>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['age']; ?></td>
            <td><?php echo $s['grade']; ?></td>
            <td><?php echo calculateStatus($s['grade']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="stats">
        <h3>الإحصائيات:</h3>
        <p><strong>أعلى درجة:</strong> <?php echo $highestGrade; ?></p>
        <p><strong>أقل درجة:</strong> <?php echo $lowestGrade; ?></p>
        <p><strong>معدل الدرجات:</strong> <?php echo $averageGrade; ?></p>
        <p><strong>عدد الطلاب الناجحين:</strong> <?php echo $passedStudents; ?></p>
    </div>

</body>
</html>