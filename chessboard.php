<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <table width="500px" height="500px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                $totalbox = $i + $j;
                if ($totalbox % 2 == 0) {
                    echo "<td height=35px  width=35px style='background-color:black'> </td>";
                } else
                    echo "<td height=35px  width=35px style='background-color:white'> </td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
</body>


</html>