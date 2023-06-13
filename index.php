<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive HTML Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <style>

    </style>
</head>

<body>
    <header>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="./img/apilogo.png" width="50" height="50" class="d-inline-block align-top mx-3" alt="">
            </a>
        </nav>
    </header>
    <section class='d-flex justify-content-center flex-wrap'>
        <div class='row'>
            <div class="col-md-4">
                <div class="card m-3  h-100" style="margin: 1rem;">
                    <div class="card-header">
                       Google Books APIs  
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">BookFinder &#x1F4DA;</h5>
                        <p class="card-text">"BookFinder": a website project powered by the Google Books API. Discover
                            your
                            next
                            book easily, search by title and explore summaries, ratings, and prices. </p>
                        <a href="./pages/books.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-3  h-100">
                    <div class="card-header">
                        PokéAPI
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">FindPoke &#x1F4F1;</h5>
                        <p class="card-text">"FindPoke": A website project that searches for Pokémon using the Pokedex
                            API.
                            Search by name, type, or region, and discover detailed
                            information on abilities, stats, and evolutions.</p>
                        <a href="./pages/pokemons.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card m-3 h-100 " >
                    <div class="card-header">
                        CoinGecko API
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">CoinWatch &#x1F4B2;</h5>
                        <p class="card-text">CoinWatch: Your Guide to Live Cryptocurrency Prices</p>
                        <a href="./pages/coindesks.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>


        </div>




    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>