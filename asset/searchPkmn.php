<?php

if (isset($_GET['pokemon'])) {
    $namePkmn = $_GET['pokemon'];
    $urla = "https://pokeapi.co/api/v2/pokemon/" . $namePkmn;
    $jsona = file_get_contents($urla);
    $dato = json_decode($jsona, true);
    $id = $dato["id"];

    $habilidades = array();
    foreach ($dato["abilities"] as $ability) {
        $habilidades[] = $ability["ability"]["name"];
    }


    $imagen = $dato["sprites"]["other"]["home"]["front_default"];
    $grito = $dato["cries"]["legacy"];
    $tipo = $dato["types"][0]["type"]["name"];
    $peso = $dato["weight"];
    $altura = $dato["height"];

    ?>

    <div class="imagen">
        <img src=<?php echo $imagen ?> class="imgPkmn" >
        <br>
    </div>
    <audio controls>
        <source src="<?php echo $grito ?>" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

    <table>

        <tr>
            <td>ID</td>
            <td>
                <?php echo $id ?>
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <?php echo $tipo ?>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
                <?php echo $namePkmn ?>
            </td>
        </tr>
        <tr>
            <td>Height</td>
            <td>
                <?php echo $altura . "0 cm" ?>
            </td>
        </tr>
        <tr>
            <td>Weight</td>
            <td>
                <?php echo $peso . " Kgs" ?>
            </td>
        </tr>
        <tr>
            <td>Skills</td>
            <td>
                <?php echo implode(" <br> ", $habilidades) ?>
            </td>
        </tr>
    </table>

    <?php

}