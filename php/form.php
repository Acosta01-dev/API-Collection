<?php

$api_key = "AIzaSyBw0mbvfKgw00SAkQiCkE_4ft5gKUEq0MQ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define la consulta de búsqueda
    $query = $_POST['name'];

    // Construye la URL de la API con la consulta y la clave de API
    $url = 'https://www.googleapis.com/books/v1/volumes?q=' . urlencode($query) . '&key=' . $api_key;

    // Realiza la llamada HTTP a la API
    $response = file_get_contents($url);

    // Decodifica la respuesta JSON en un array asociativo
    $result = json_decode($response, true);

    // Recorre los resultados y muestra información relevante
    if (isset($result['items'])) {
        foreach ($result['items'] as $book) {
            ?>
            <div class="m-4">
                <div class="card" style="max-width: 500px; height: 250px;">
                    <div class="row g-0">
                        <div class="col-sm-5" style="background: #868e96; height: 240px;">
                            <?php if (isset($book['volumeInfo']['imageLinks']['thumbnail'])) {
                                ?>
                                <img class="card-img-top h-100" src="<?php echo $book['volumeInfo']['imageLinks']['thumbnail']; ?>"
                                    alt="Card image cap">

                                <?php
                            } else {
                                echo 'Imagen: Desconocida<br>';

                            }
                            ?>

                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo '' . $book['volumeInfo']['title'] . '<br>'; ?>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    if (isset($book['volumeInfo']['publishedDate'])) {
                                        echo 'Fecha de publicación: ' . $book['volumeInfo']['publishedDate'] . '<br>';
                                    } else {
                                        echo 'Fecha de publicación: Desconocida<br>';
                                    }
                                    if (isset($book['volumeInfo']['authors'])) {
                                        echo 'Autor(es): ' . implode(', ', $book['volumeInfo']['authors']) . '<br>';
                                    } else {
                                        echo 'Autor: Desconocido<br>';
                                    }
                                    ?>
                                </p>
                                <?php if (isset($book['volumeInfo']['previewLink'])) {
                                    echo '<a href="' . $book['volumeInfo']['previewLink'] . '" class="btn btn-primary p-1 ">More Info</a>';
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

        }
    } else {
        echo 'No se encontraron resultados.';
    }
}

?>