<html>
<head><title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>
<body>
<?php
    $maxRow = 10;
    $maxCol = 1 ;
    for ( $r = 0; $r < $maxRow ; $r++ ) {
        for ($c = 0; $c < $maxCol; $c++) {
            $score[ $r ][ $c ]['Homework'] = rand( 0, 10);
            $score[ $r ][ $c ]['Assignment'] = rand( 0, 20);
            $score[ $r ][ $c ]['Midterm'] = rand( 0, 35);
            $score[ $r ][ $c ]['Final'] = rand( 0, 35);
        }
        }
            echo "<table border='1' align='center' width='40%'>";
            echo "<tr><td width='80' align='center'>Student</td>";
            echo "<td width='80' align='center'>Homework</td>";
            echo "<td width='80' align='center'>Assignment</td>";
            echo "<td width='80' align='center'>Midterm</td>";
            echo "<td width='80' align='center'>Final</td>";
            echo "<td width='80' align='center'>Score</td></tr>";
            for ( $r = 0; $r < $maxRow ; $r++ ) {
                $std = $r + 1;
                echo "<td align='center'>$std</td>";
                for ( $c = 0; $c < $maxCol ; $c++ ) {
                    echo "<td align='center'>" . $score[ $r ][ $c ]['Homework'] . "</td>";
                    echo "<td align='center'>" . $score[ $r ][ $c ]['Assignment'] . "</td>";
                    echo "<td align='center'>" . $score[ $r ][ $c ]['Midterm'] . "</td>";
                    echo "<td align='center'>" . $score[ $r ][ $c ]['Final'] . "</td>";
                    $totalScore = $score[$r][$c]['Homework'] + $score[$r][$c]['Assignment'] + $score[$r][$c]['Midterm'] + $score[$r][$c]['Final'];
                    echo "<td align='center'>$totalScore</td>";
                }
                echo "</tr>";
            }
    echo "</table>";
?>
</body>
</html>