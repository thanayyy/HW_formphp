<!DOCTYPE html>
<html>
<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Numeric Array</title>
</head>
<body>
<?php
$MaxStudent = 10;
$score = array();
for ($n = 0; $n < $MaxStudent; $n++) {
    $score[$n] = rand(51, 100);
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" width="90">Grade</td></tr>';
for ($n = 0; $n < $MaxStudent; $n++) {
    echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    echo '<td align="center" width="90">' . Grade($score[$n]) . '</td></tr>';
}
echo '<tr><td colspan="3" align="center"> Average Score : ';
echo average($score, $MaxStudent);
echo '</td></tr></table>';

function average($data, $max) {
    $total = array_sum($data); // Use array_sum() to sum up all elements in the array
    return $total / $max;
}
function Grade($score) {
    if ($score >= 90) {
        return 'A';
    } elseif ($score >= 80) {
        return 'B';
    } elseif ($score >= 70) {
        return 'C';
    } elseif ($score >= 60) {
        return 'D';
    } elseif ($score >= 50) {
        return 'E';
    }
}
?>
</body>
</html>
