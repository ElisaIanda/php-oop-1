<?php
// imposto file
require_once "db/arrayMovie.php";
require_once "Models/Movie.php";

$movies = [];

foreach ($moviesList as $singleMovie) {
    $movie = new Movie(
        $singleMovie["title"],
        $singleMovie["director"],
        $singleMovie["year"],
        $singleMovie["genres"],
        $singleMovie["language"]
    );
    $movies[] = $movie;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Php-oop-1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row my-4">
                    <?php
                    foreach ($movies as $movie) {
                        echo "<div class='col-4 py-4'>";
                        echo $movie->getInfoMovie();
                        echo "</div>";
                    }
                    ?>
            </div>
        </div>
    </div>

</body>

</html>