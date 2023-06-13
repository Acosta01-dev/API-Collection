<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pokemons'])) {
            $pokemonName = $_POST['pokename'];
            $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";
            $response = @file_get_contents($url);
            $pokemonData = json_decode($response, true);

           
            if ($response === false) {
                header("location:../pages/pokemons.php?error");
                exit;
            }
            else{

            $name = $pokemonData['name'];
            if ($name === null) {       //In case name input is empty
                header("location: ../pages/pokemons.php?error");
                exit;
            }

            
            $abilities = $pokemonData['abilities'];
            $types = $pokemonData['types'];
            $sprites = $pokemonData['sprites'];
            $imageUrl = $sprites['front_default'];


            ?>




            <div class="col">
                <div class="card my-5  mx-auto" style='width:20rem;'>
                    <div class="card-image-wrapper">
                        <img src="<?php echo $imageUrl ?>" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <hr class="rounded">

                        <h5 class="card-title">
                            <?php echo "Name: $name<br>"; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo "Abilities: <br>";
                            foreach ($abilities as $ability) {
                                ?>
                            <ul class="ist-group list-group-flush">
                                <li class="list-group-item">
                                    <?php echo '- ' . $ability['ability']['name'] . '<br>'; ?>
                                </li>
                            </ul>
                            <?php

                            }

                            echo "Forms: <br>";
                            foreach ($types as $type) {

                                ?>
                            <ul class="ist-group list-group-flush">
                                <li class="list-group-item">
                                    <?php echo "- {$type['type']['name']}<br>"; ?>
                                </li>
                            </ul>
                            <?php

                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php

        }
        
    }
}
?>