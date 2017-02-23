<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <title>Select Network</title>
</head>
<body>

<?php

$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006jessecannondatabase', 'bf3c946f4d66ff', '1d953141');

$sql ="SELECT network_id, network_name FROM networks";

$cmd = $conn->prepare($sql);
$cmd->execute();
$teams = $cmd->fetchALL(); 

echo '<dropdown class=dropdown">';


$conn = null;
?>

<form action="shows.php" method="post">
    <fieldset>
        <label for="networks">Networks:</label>
    </fieldset>
    <button>Get Shows</button>
</form>

</body>
</html>