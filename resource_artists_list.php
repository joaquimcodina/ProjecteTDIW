<html lang="ca">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
        <title>Llistat Artistes | DISC SHOP</title>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/estils/artist.css"/>
        <link rel="stylesheet" href="/estils/detailproduct.css"/>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/funcions.js"></script>
    </head>
    <body>
        <?php if(!isset($_GET["id"])){ ?> <!-- Si hi ha ID, no mostris nav, apareix nav extra-->
            <header>
                <?php include_once __DIR__.'/controller/nav.php'; ?>
            </header>
        <?php }?>
        <div class="layout">
            <?php include_once __DIR__.'/controller/artists_list.php'; ?>
        </div>
        <?php if(!isset($_GET["id"])){ ?> <!-- Si hi ha ID, no mostris nav, apareix nav extra-->
            <?php include_once __DIR__.'/controller/footer.php'; ?>
        <?php }?>
    </body>
</html>