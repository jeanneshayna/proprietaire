<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="proprietaire.php" method="post">
    <table style='background-color:blue; width:500px; height:250px; text-align:center;'>
        <tr>
            <td>Numero Piéce</td>
            <td><input type="number" name="numPiece" /required></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" /required></td>
        </tr>
        <tr>
            <td>Tel</td>
            <td><input type="number" name="tel" /required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="valider"></td>
        </tr>
    </table>
</form>
</body>
</html>