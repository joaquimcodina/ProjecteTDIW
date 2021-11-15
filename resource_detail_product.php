<html lang="ca">
    <head>
        <title>Detalls Producte | DISC SHOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detalls del Producte</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="/estils/detailproduct.css"/>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/funcions.js"></script>
    </head>
    <body>
        <header>
            <?php include_once __DIR__.'/controller/nav.php'; ?>
        </header>
        <div class="layout">
            <?php include_once __DIR__.'/controller/detail_product.php'; ?>
        </div>
        <?php include_once __DIR__.'/controller/footer.php'; ?>
    </body>
</html>