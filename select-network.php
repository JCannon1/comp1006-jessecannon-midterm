<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <title>Select Network</title>
</head>
<body>

<form action="shows.php" method="post">
    <fieldset>
        <label for="networks">Networks:</label>
        <dropdown name="AMC" id="AMC" />
        <dropdown name="FX" id="FX" />
        <dropdown name="HBO" id="HBO" />
        <dropdown name="Showtime" id="Showtime" />
    </fieldset>
    <button>Get Shows</button>
</form>

</body>
</html>