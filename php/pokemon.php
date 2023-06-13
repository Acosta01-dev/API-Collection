<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pokemons'])) {
            // Get the Pokemon name from the form
            $pokemonName = $_POST['pokename'];
            // Get the Pokemon name from the form
            $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";

            // Fetching data from the API
            $response = @file_get_contents($url);
                
             // Fetching data from the API
            $pokemonData = json_decode($response, true);

            // Check if the API request was successful
            if ($response === false) {
                header("location:../pages/pokemons.php?error");
                exit;
            }
            else{

            $name = $pokemonData['name']; //In case name input is empty
            if ($name === null) {       
                header("location: ../pages/pokemons.php?error");
                exit;
            }//

            
            $abilities = $pokemonData['abilities'];
            $types = $pokemonData['types'];
            $sprites = $pokemonData['sprites'];
            $imageUrl = $sprites['front_default'];


            ?>




            <div class="col">
                <div class="card my-5  mx-auto" style='width:20rem;'>
                    <!-- Display the Pokemon image -->
                    <div class="card-image-wrapper">
                        <img src="<?php echo $imageUrl ?>" class="card-img-top img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <hr class="rounded">

                        <h5 class="card-title">
                            <?php echo "Name: " . ucfirst($name) . "<br>"; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo "Abilities: <br>";
                            foreach ($abilities as $ability) {
                                 $name = $ability['ability']['name']
                                ?>
                                
                            <ul class="ist-group list-group-flush">
                                <li class="list-group-item">
                                    <?php // echo '- ' . $ability['ability']['name'] . '<br>';
                                        echo "● " . ucfirst($name) . "<br>";         
                                    
                                    ?>
                                </li>
                            </ul>
                            <?php

                            }

                            echo "Types: <br>";
                            foreach ($types as $type) {
                                $name = $type['type']['name'];
                                ?>
                            <ul class="ist-group list-group-flush">
                                <li class="list-group-item">
                                    <?php // echo "- {$type['type']['name']}<br>";
                                             echo "● " . ucfirst($name) . "<br>";                                    
                                             ?>
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