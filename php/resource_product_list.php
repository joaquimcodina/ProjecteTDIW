<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Llista de Productes</title>
        <link rel="stylesheet" href="<?php echo BASE_URL . '../estils/productlist.css'?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="<?php echo BASE_URL . '../js/jquery-3.6.0.min.js'?>"></script>
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
        <header>
            <?php require __DIR__ . 'controller/nav.php' ?>
        </header>
        <div class="container">
            <?php require __DIR__ . 'controller/product_list.php'; ?>
        </div>
    </body>
</html>