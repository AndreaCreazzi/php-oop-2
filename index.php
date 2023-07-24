<?php
include __DIR__ . '/data/db.php';
require_once __DIR__ . '/Model/products.php';
require_once __DIR__ . '/Model/food.php';
require_once __DIR__ . '/Model/games.php';
require_once __DIR__ . '/Model/accessories.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <!-- fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
</head>

<body class="bg-dark">
    <main>
        <h1 class="text-white text-center py-5">Boolshop</h1>
        <div class="container">
            <div class="row">
                <h2 class="text-white py-3 ms-3">I Nostri Prodotti</h2>
                <div class="col-12 d-flex flex-wrap justify-content-center">
                    <?php foreach ($products as $product) : ?>
                        <div class="card mx-3 my-2" style="width: 18rem;">
                            <img src="<?= $product->image ?>" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->title ?></h5>
                                <p>Tipo : <?= $product->type ?></p>
                                <p>Prezzo : € <?= $product->price ?></p>
                                <?php if (isset($product->weight)) : ?>
                                    <p>Peso : <?= $product->weight ?></p>
                                <?php endif ?>
                                <?php if (isset($product->ingredients)) : ?>
                                    <p>Ingredienti : <?= $product->ingredients ?></p>
                                <?php endif ?>
                                <?php if (isset($product->material)) : ?>
                                    <p>Materiali : <?= $product->material ?></p>
                                <?php endif ?>
                                <?php if (isset($product->features)) : ?>
                                    <p>Caratteristiche : <?= $product->features ?></p>
                                <?php endif ?>
                                <?php if (isset($product->size)) : ?>
                                    <p>Dimensioni : <?= $product->size ?></p>
                                <?php endif ?>
                                <?php if (isset($product->dimension)) : ?>
                                    <p>Dimensioni : <?= $product->dimension ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>