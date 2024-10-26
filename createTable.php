<html>
<style>
    td, table, th {border: 2px solid white;}
</style>
<body style="background-color: #84bd93; color: white;">
    <table>
        <?php

        $size = $_POST["sizeInp"];

        $numArray = array();

        for ($x = 1; $x <= $size; $x++) {
            $numArray[] = $x;
        }
        //echos out the initial row
        echo "<tr>  <th></th>";
        for ($x = 0; $x < count($numArray); $x++) {
            echo "<th>$numArray[$x]</th>";
        }
        echo "</tr>";
        //echo the rest of the rows of the table
        for ($x = 0; $x < count($numArray); $x++) {
            echo "<tr><th>$numArray[$x]</th>";
            for ($y = 0; $y < count($numArray); $y++) {
                $multiple = $numArray[$x] * $numArray[$y];
                echo "<td>$multiple</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>
<body>
<html>