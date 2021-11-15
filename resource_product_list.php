<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
        <title>Llistat Productes | DISC SHOP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        <link rel="stylesheet" href="/estils/productlist.css">
        <link rel="stylesheet" href="/estils/productlist.css">
        <link rel="stylesheet" href="estils/detailproduct.css"/>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/funcions.js"></script>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
        <header>
            <?php include_once __DIR__.'/controller/nav.php'; ?>
        </header>
        <div class="layout">
            <?php include_once __DIR__.'/controller/product_list.php'; ?>
        </div>
    </body>
</html>