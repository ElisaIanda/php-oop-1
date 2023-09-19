<?php
/* importo file */
require_once __DIR__ . "/Movie.php";

/*istanza 1 */
$movie1 = new Movie(
    "Titanic",
    "James Cameron",
    "1997",
    "Inglese",
    "Romantico"
);

// var_dump($movie1);
echo $movie1->getInfoMovie();

/* istanza 2 */
$movie2 = new Movie(
    "Inception",
    "Christopher Nolan",
    "2010",
    "Inglese",
    "Fantascienza",
);

// var_dump($movie2);
echo $movie2->getInfoMovie();


/* istanza 3 */
$movie3 = new Movie(
    "The Shawshank Redemption",
    "Frank Darabont",
    "1994",
    "Inglese",
    "Drammatico"
);
// var_dump($movie3);
echo $movie3->getInfoMovie();

/*istanza 4 */
$movie4 = new Movie(
    "La La Land",
    "Damien Chazelle",
    "2016",
    "Inglese",
    "Musical"
);

// var_dump($movie4);
echo $movie4->getInfoMovie();

/* istanza 5 */
$movie5 = new Movie(
    "La vita è bella",
    "Roberto Benigni",
    "1997",
    "Italiano",
    "Commedia"
);

// var_dump($movie5);
echo $movie5->getInfoMovie();


/* istanza 6 */
$movie6 = new Movie(
    "Water for Elephants",
    "Francis Lawrence",
    "2011",
    "Inglese",
    "Drammatico"
);

// var_dump($movie6);
echo $movie6->getInfoMovie();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
    <title>Php-oop-1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>