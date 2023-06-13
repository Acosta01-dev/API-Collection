<?php

$api_key = "AIzaSyBw0mbvfKgw00SAkQiCkE_4ft5gKUEq0MQ"; //Api Key Google Books
$startIndex = 0; // Start index of the displayed results
$resultsPerPage = 10;  // Maximum number of results per page

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'next') {
        $startIndex = $_GET['startIndex'] + $resultsPerPage;
    } elseif ($_GET['page'] === 'back') {
        $startIndex = $_GET['startIndex'] - $resultsPerPage;
        if ($startIndex < 0) {
            $startIndex = 0;
        }
    }
} else {
    $startIndex = 0;
}


if (isset($_GET['name'])) {

     // Define the search query
    $query = $_GET['name'];


    // Build the API URL with the query and API key
    $url = 'https://www.googleapis.com/books/v1/volumes?q=' . urlencode($query) . '&startIndex=' . $startIndex . '&maxResults=' . $resultsPerPage . '&key=' . $api_key;

    // Make the HTTP call to the API
    $response = file_get_contents($url);

    // Decode the JSON response into an associative array
    $result = json_decode($response, true);

    // Iterate through the results and display relevant information
    if (isset($result['items'])) {
        foreach ($result['items'] as $book) {
            ?>
            <div class="container mt-5 mb-5 ">
                <div class="d-flex justify-content-center row card-book">
                    <div class="col-md-10">


                        <div class="row p-2 bg-white border rounded ">
                            <div class="col-md-3 mt-1">

                                <?php if (isset($book['volumeInfo']['imageLinks']['thumbnail'])) {
                                    ?>
                                    <img class="img-fluid img-responsive rounded product-image"
                                        src="<?php echo $book['volumeInfo']['imageLinks']['thumbnail']; ?>" alt="Card image cap">

                                    <?php
                                } else {
                                    echo 'Image: Unknown<br>';

                                }
                                ?>

                            </div>
                            <div class="col-md-6 mt-1">
                                <h5>
                                    <?php echo '' . $book['volumeInfo']['title'] . ''; ?>
                                </h5>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></div><span>
                                        <?php
                                        if (isset($book['volumeInfo']['publishedDate'])) {
                                            echo 'Date: ' . $book['volumeInfo']['publishedDate'] . '<br>';
                                        } else {
                                            echo 'Date: Unknown<br>';
                                        }
                                        if (isset($book['volumeInfo']['authors'])) {
                                            echo 'Author(s): ' . implode(', ', $book['volumeInfo']['authors']) . '<br>';
                                        } else {
                                            echo 'Author: Unknown<br>';
                                        }
                                        ?>
                                    </span>
                                </div>

                                <p class="text-justify text-truncate para mb-0">
                                    <?php
                                    if (isset($book['volumeInfo']['description'])) {
                                        echo 'Description: ' . $book['volumeInfo']['description'];
                                    } else {
                                        echo 'Description: None';
                                    }
                                    ?>
                                    <br><br>
                                </p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">
                                        <?php
                                        if (isset($book['saleInfo']['listPrice']['amount'])) {
                                            $price = $book['saleInfo']['listPrice']['amount'];
                                            $currency = $book['saleInfo']['listPrice']['currencyCode'];

                                            echo "Price: " . $price . " " . $currency;
                                        } else {
                                            echo 'Price: Unknown';
                                        }


                                        ?>
                                    </h4><span class="strike-text"> </span>
                                </div>
                                <h6 class="text-success">
                                    <?php
                                    if (isset($book['volumeInfo']['averageRating'])) {
                                        $averageRating = $book['volumeInfo']['averageRating'];
                                        $ratingCount = $book['volumeInfo']['ratingsCount'];

                                        echo "Average Rating: " . $averageRating . "<br>";
                                        echo "Rating Count: " . $ratingCount;
                                    } else {
                                        echo "No rating information available for the book.";
                                    } ?>
                                </h6>
                                <div class="d-flex flex-column mt-4">

                                    <?php if (isset($book['volumeInfo']['previewLink'])) {
                                        echo '<a href="' . $book['volumeInfo']['previewLink'] . '" class="btn btn-primary btn-sm">More Info</a>';
                                    } ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>



            </div>

            <?php


        }



        ?>
        <div class="d-flex align-items-center justify-content-center ">
            <?php
            if ($startIndex > 0) {
                echo '<a href="../pages/books.php?page=back&startIndex=' . $startIndex . '&name=' . urlencode($query) . '" class="btn btn-primary">Back</a>';
            }

            if ($startIndex + $resultsPerPage < $result['totalItems']) {
                echo '<a href="../pages/books.php?page=next&startIndex=' . $startIndex . '&name=' . urlencode($query) . '" class="btn btn-primary " style="margin-left: 20px;">Next</a>';
            }

            ?>
        </div>
        
        <?php
                echo "<br>";

    } else {
        echo 'No Data.';
    }
}




?>