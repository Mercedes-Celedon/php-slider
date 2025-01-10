<?php
require 'src/database/db-connection.php';
require 'src/controller/projects.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="assets/css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <section>
            <h2>Escoge tu proyecto ideal y fináncialo en cómodas cuotas² Diferentes importes, mismos servicios incluidos</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($projects as $project): ?>
                        <div class="swiper-slide">
                            <?php include 'src/template/card.php'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="swiper-pagination"></div>

            </div>
        </section>
    </main>
    <?php include 'src/template/modal.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/modal.js"></script>
</body>

</html>