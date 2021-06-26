<?php

include __DIR__ . '/classes/Movie.php';

$movies = [
    new Movies('The Avengers', 'Fantascienza/Azione', 'https://pad.mymovies.it/filmclub/2009/03/107/locandina.jpg'),
    new Movies('Saw', 'Horror/Triller', 'https://images-na.ssl-images-amazon.com/images/I/41J9mRV5AUL._SY445_.jpg'),
    new Movies('The Amazing Spider-Man', 'Fantascienza/Azione', 'https://images-na.ssl-images-amazon.com/images/I/91zDgUhTW6L._SY679_.jpg'),
    new Movies('Transformers', 'Animazione/Fantastico', 'https://pad.mymovies.it/filmclub/2006/08/027/locandina.jpg'),

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pirate Bay</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Header -->
    <header>
        <img src="./assets/img/pirate_logo.png" alt="Site logo" class="logo">
        <h1>The Pirate Bay</h1>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <div class="container">

            <?php foreach ($movies as $movie) : ?>
                <?php $number = rand(0, 2);
                if ($number == 1) : ?>
                    <?php $movie->setDownloaded(true); ?>
                <?php endif; ?>

                <div class="card">
                    <img src="<?= $movie->img ?>" alt="<?= $movie->title ?>">
                    <h2><?= $movie->title ?></h2>
                    <h3><?= $movie->genre ?></h3>

                    <?php if ($movie->downloaded) : ?>
                        <h4>Just Downloaded</h4>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>
        </div>
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <footer>

    </footer>
    <!-- /Footer -->

</body>

</html>