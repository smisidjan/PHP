<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="bakkerijVlecht.css" rel="stylesheet">
    <link href="formulier.php">
</head>
<body>
<header>
    <img src="../images/bakkerijHeader.jpg"><br><br>
    <a href="bakkerijVlecht.php">Overzicht broodjes</a>
    <a href="formulier.php">Broodjes toegvoegen</a>
</header>
<div>
    <form action="bakkerijVlecht.php" method="post">
        <label>Bestanden:</label><br>
        <input accept="image/*" type="file" id="bestanden" name="bestanden">

        <label>Soort meel:</label>
        <input type="text" id="meelsoort" name="meelsoort">

        <label>Vorm:</label>
        <input type="text" id="vorm" name="vorm">

        <label>Gewicht:</label>
        <input type="text" id="gewicht" name="gewicht">

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>
