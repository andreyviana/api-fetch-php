<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>github-finder-php</title>
</head>
<body>
    <h1>BUSCADOR DE PERFIL DE USUÁRIO DO GITHUB USANDO PHP</h1>
    <br>
    <form method="POST">
        <input type="text" name="txtUser" placeholder="nome de usuário">
        <button>PROCURAR</button>
    </form>

    <?php
        ini_set("display_errors", 0);
        ini_set( "user_agent", "PHP");

            $searchUser = $_POST["txtUser"];
        if ($searchUser) {
            $api_url = "https://api.github.com/users/" . $searchUser;
            $result = array(json_decode(file_get_contents($api_url)));
            
            forEach($result as $user)
            {
                echo "<br> Nome de usuário: " . $user->login . "<br><br>";
                echo "Foto de perfil:<br>" . "<img src='$user->avatar_url' loading='lazy' width='150px' height='150px'><br>";
                echo "Nome: " . $user->name; 
            }
        }

    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="./pokemon-finder.php">teste a versao com pokemons</a>

</body>
</html>