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
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Google_Books_logo_2020.svg" alt="Logo"
                        class="d-inline-block align-text-top">

                </a>
                <a href='../index.html' class='btn btn-dark'>Go Back</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="container d-flex justify-content-center ">
            <div class="my-5 p-3 ">
                <h1>Book Finder: Discover Your Next Adventure</h1>
                <p>Search for any book you desire.</p>
                <form action="../pages/books.php" method="GET" class='my-5'>
                    <div class="mb-3">
                        <label for="name" class="form-label">Title</label>
                        <input type="text" class="form-control" id="name" name='name' placeholder="The Great Gatsby">
                    </div>
                    <input class='submit_button btn btn-primary' id="publish_form" type="submit" value="Search"
                        name="books">
                </form>


            </div>

           
        </div>

        <div class=''>
                <?php include '../php/book.php';
                ?>
            </div>





    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>