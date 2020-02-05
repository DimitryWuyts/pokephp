<?php


ini_set('display_errors',
'1'); ini_set('display_startup_errors',
'1'); error_reporting(E_ALL);


if (empty($_GET ['inputfield'])) {
    $api = file_get_contents("https://pokeapi.co/api/v2/pokemon/1");
}
else {
    $api = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . ($_GET['inputfield']));
}
$data = json_decode($api, true);
$sprite = $data["sprites"]["front_default"];
$apiEvo = file_get_contents("https://pokeapi.co/api/v2/pokemon-species/" . ($_GET['inputfield']));
$dataEvo = json_decode($apiEvo, true);
$dataEvofollow = $dataEvo["evolution_chain"]["url"];
$dataEvofollowapi = file_get_contents($dataEvofollow);


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title></title>
</head>
<body>
<div id="pokedex">
    <div id="left">
        <div id="logo"></div>
        <div id="bg_curve1_left"></div>
        <div id="bg_curve2_left">
            <form method="get" action="">
            <input type="text" name="inputfield" id="input_field" placeholder="take pokemon">
            </form>
        </div>

        <div id="curve1_left">
            <div id="buttonGlass">
                <div id="reflect"> </div>
            </div>
            <div id="miniButtonGlass1"></div>
            <div id="miniButtonGlass2"></div>
            <div id="miniButtonGlass3"></div>
        </div>
        <div id="curve2_left">
            <div id="junction">
                <div id="junction1"></div>
                <div id="junction2"></div>
            </div>
        </div>
        <div id="screen">
            <div id="topPicture">
                <div id="buttontopPicture1"></div>
                <div id="buttontopPicture2"></div>
            </div>
            <div id="picture">
                <img src="<?php echo $sprite ?>" id="sprite">
            </div>
            <div id="buttonbottomPicture"></div>
            <div id="speakers">
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
            </div>
        </div>

        <div id="cross">
            <div id="leftcross">
                <div id="leftT"></div>
            </div>
            <div id="topcross">
                <div id="upT"></div>
            </div>
            <div id="rightcross">
                <div id="rightT"></div>
            </div>
            <div id="midcross">
                <div id="midCircle"></div>
            </div>
            <div id="botcross">
                <div id="downT"></div>
            </div>
        </div>
    </div>
    <div id="right">
        <div id="stats">
            <?php echo $data['name']?>
            <div id="moves">
                <div id="pokNr"></div>
                <div id="pokName"></div>
                <div id="pokType"></div>
                <div id="pokDescrip">Pokemon description</div>
                <div id="move1"></div>
                <div id="move2"></div>
                <div id="move3"></div>
                <div id="move4"></div>

            </div>


        </div>


        <div id="yellowBox1">
            <img id="evolPrev" src="<?php echo $dataEvofollow?>">
        </div>
        <div id="yellowBox2">
            <div id="preName"></div>
        </div>
        <div id="bg_curve1_right"></div>
        <div id="bg_curve2_right"></div>
        <div id="curve1_right"></div>
        <div id="curve2_right"></div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
