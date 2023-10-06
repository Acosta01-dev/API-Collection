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
                    <img src="https://cdn-icons-png.flaticon.com/512/2272/2272825.png" alt="Logo"
                        class="d-inline-block align-text-top" style='height:3rem;'>

                </a>
                <a href='../index.html' class='btn btn-dark'>Go Back</a>
            </div>
        </nav>
    </header>
    <div class="container">
    <div class="container d-flex justify-content-center ">
            <div class="my-5 p-3 ">
                <h1>CoinWatch: Your Guide to Live Cryptocurrency Prices</h1>
             
            </div>

           
        </div>

        <div class=' d-flex align-items-center justify-content-center'>
                <?php include '../php/coindesk.php';
                ?>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>