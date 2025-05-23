<?php

$marks = array( 
    "Diya" => array(
        "physics" => 75,
        "maths" => 90,    
        "Bio" => 96,
        "ip" => 100,
        "psychology" => 80
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks for Diya</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Marks for Diya</h2>
    
    <table>
        <tr>
            <th>S.NO</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        
        <?php
        $serial_no = 1;
        foreach ($marks['Diya'] as $subject => $score) {
            echo "<tr>
                    <td>" . $serial_no++ . "</td>
                    <td>" . ucfirst($subject) . "</td>
                    <td>" . $score . "</td>
                </tr>";
        }

        $total_marks = array_sum($marks['Diya']);
        $total_subj = count($marks['Diya']);
        $out_of = $total_subj * 100;
        $perc = ($total_marks / $out_of) * 100;
        ?>

        <tr>
            <td colspan="2"><strong>Total Marks</strong></td>
            <td><strong><?php echo $total_marks . " / " . $out_of; ?></strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Percentage</strong></td>
            <td><strong><?php echo number_format($perc, 2); ?>%</strong></td>
        </tr>
    </table>

    <div class="footer">
       
echo "<br>";
echo "Program by Diya Bhutani(2220100243)";

    </div>

</body>
</html>
