<html lang="ca">
    <head>
        <title>Detalls Producte - DISC SHOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detalls del Producte</title>
        <link rel="stylesheet" href="<?php echo BASE_URL . '/estils/detailproduct.css' ?>"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
        <link rel="icon" href="<?php echo BASE_URL . '/img/favicon.ico" type="image/x-icon'?>"/>
        <script src="<?php echo BASE_URL . '/js/funcions.js' ?>"></script>
        <script src="<?php echo BASE_URL . '/js/jquery-3.6.0.min.js' ?>"></script>
    </head>
    <body>
        <header>
            <?php require __DIR__ . 'controller/nav.php' ?>
        </header>
        <div class="container">
            <?php require __DIR__ . 'controller/detail_product.php'; ?>
        </div>
    </body>
</html>