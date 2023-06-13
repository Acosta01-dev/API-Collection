<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive HTML Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <style>

    </style>
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand  mr-auto" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/International_Pok%C3%A9mon_logo.svg" alt="Logo"
                        class="d-inline-block align-text-top " style='height:3rem;'>

                </a>
                <a href='../index.html' class='btn btn-dark'>Go Back</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="container d-flex flex-row flex-wrap ">
            <div class="col-md-8 my-5 p-3 ">
                <h1>FindPoke</h1>
                <p>Search for any Pokemon you desire.</p>
                <form action="../pages/pokemons.php" method="POST" class='my-5'>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name='pokename' placeholder="Ex: Charizard">
                    </div>
                    <input class='submit_button btn btn-primary' id="publish_form" type="submit" value="Search"
                        name="pokemons">
                </form>
                <?php
                if (isset($_GET["error"])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show"> 
                    <strong>Error!</strong> An error occurred: The requested Pokémon could not be found. <button type="button" 
                    class="btn-close" data-bs-dismiss="alert"></button> </div>';
                }
                ?>
            </div>
            <div class="container col-md-3">
                <?php include '../php/pokemon.php' ?>
            </div>


        </div>






    </div>


    <div class=''>
        <?php include '../php/book.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>