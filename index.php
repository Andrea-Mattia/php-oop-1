<?php
require_once __DIR__ . '/film.php';
require_once __DIR__ . '/films-data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <header class="df aic">
        <div class="header-logo">
            <a 
                target="_blank" 
                title="Self made., Public domain, via Wikimedia Commons" 
                href="https://commons.wikimedia.org/wiki/File:Harry_Potter_wordmark.svg"
            >
                <img 
                    width="128" 
                    alt="Harry Potter wordmark" 
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Harry_Potter_wordmark.svg/128px-Harry_Potter_wordmark.svg.png"
                >
            </a>
        </div>
        <div class="header-music">
            <audio controls autoplay>
                <source src="./audio/harry-potter-theme-ogg.ogg" type="audio/ogg">
                <source src="./audio/harry-potter-theme-mp3.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </header>

    <main>
        <section class="container">
            <?php // Posts list
                foreach ($films as $film) { 
                    $new_film = new Film($film['title'], $film['description'], $film['year']); ?>
                    <article>
                        <h2>TITLE: <?php echo $new_film->title; ?></h2>
                        <p>DESCRIPTION (exerpt): <?php echo $new_film->getExerpt(); ?>...</p>
                        <div>YEAR: <?php echo $new_film->year; ?></div>
                    </article>
            <?php } ?>
        </section>
    </main>

</body>
</html>