<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shows</title>
</head>
<body>

<h1>Shows</h1>

<?php 

session_start();

if (!empty($_SESSION['userId'])) {
    echo '<a href="select-network.php">Add a new Show</a>';
}

$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006jessecannondatabase', 'bf3c946f4d66ff', '1d953141');

$sql = "SELECT show_name, first_year, network_name FROM shows ORDER BY show_name";

$cmd = $conn->prepare($sql);
$cmd->execute();
$albums = $cmd->fetchAll();

echo '<table class="table table-striped table-hover">
<tr><th>Name</th><th>Year</th><th>Network</th>';

echo '</tr>';

foreach ($shows as $show) {
    echo '<tr><td>' . $show['show_name'] . '</td>
    <td>' . $show['first_year'] . '</td>
    <td>' . $show['network_name'] . '</td>';

    echo '</tr>';
}

echo '</table>';

$conn = null;
?>

</body>
</html>