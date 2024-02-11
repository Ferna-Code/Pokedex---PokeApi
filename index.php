<?php
include 'asset/conexApi.php';

// foreach ($datos["results"] as $pokemon) {
//     $nombre = $pokemon['name'] . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/estilo.css">
    <title>Api - Pokedex</title>
</head>

<body>

    <div class="contenedor">
        <div class="buscador">
            <form method="get" action="">
                <select name="pokemon" id="pokemon">
                    <?php
                    foreach ($datos["results"] as $pokemon) {
                        ?>
                        <option value="<?php echo $pokemon['name'] ?>">
                            <?php echo $pokemon['name'] ?>
                        </option>
                        <?php
                    }

                    ?>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </div>
        <?php
        include 'asset/searchPkmn.php';
        ?>
    </div>
</body>

</html>