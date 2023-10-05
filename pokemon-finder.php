<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokemon-finder-php</title>
</head>
<body>
    <h1>BUSCADOR DE POKEMON PHP</h1>
    <br>
    <form method="POST">
        <input type="text" name="txtPokemon" placeholder="nome do pokemon">
        <button>PROCURAR</button>
    </form>

    <?php
        ini_set( "display_errors", 0);

            $searchPokemon = $_POST["txtPokemon"];
        if ($searchPokemon) {
            $api_url = "https://ex.traction.one/pokedex/pokemon/" . $searchPokemon;
            $result = json_decode(file_get_contents($api_url));
            foreach($result as $pokemon)
            {
                echo "<br><tr>";
                echo "ID do pokemon: " . $pokemon->number . "<br>";
                echo "Nome do pokemon: " . $pokemon->name . "<br>" . "TIPO(s): ";
    
                forEach($pokemon->types as $type)
                {
                    
                    echo "$type ";
                }
            }
        }

        
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="./index.php">teste a versao com o github</a>

</body>
</html>