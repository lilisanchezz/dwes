<?php
$nombre ="Francisco";
echo "Hola mundo";
?>

<h1>Título</h1>
<?php
echo "<h2>otra cosa </h2>";
    ?>


<?php
$meses = [
        'Enero','Febrero', 'Marzo',
    'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Setiembre',
    'Octubre', 'Noviembre', 'Diciembre'

];
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user scalable=no, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
<h1> Meses del año </h1>
<ul>

    <?php
    foreach($meses as $mes)
    {
        echo '<li>' .$mes. '</li>';
    }    ?>
</ul>
</body>
</html>
