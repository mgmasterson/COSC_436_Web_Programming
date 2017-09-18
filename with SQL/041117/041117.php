<!DOCTYPE html>
<!--
Michael Masterson
E00942993
April 13,2017
Susan Haynes
COSC 436
http://db2.emich.edu/~mmaster8/041117/
-->
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','mmaster8','360de99339','Wi2017_436_mmaster8');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM staff WHERE staffNo = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>staffNo</th>
<th>First Name</th>
<th>Last Name</th>
<th>Position</th>
<th>Sex</th>
<th>Birthdate</th>
<th>salary</th>
<th>BranchNo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['staffNo'] . "</td>";
    echo "<td>" . $row['fName'] . "</td>";
    echo "<td>" . $row['lName'] . "</td>";
    echo "<td>" . $row['position'] . "</td>";
    echo "<td>" . $row['sex'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "<td>" . $row['branchNo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
