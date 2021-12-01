<html lang="ca">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
        <title>Iniciar Sessió | DISC SHOP</title>
        <link rel="stylesheet" href="/estils/form.css">
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/funcions.js"></script>
        <script src="/js/important_alerts.js"></script>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php if(!isset($_GET["id"])){ ?> <!-- Si hi ha ID, no mostris nav, apareix nav extra-->
            <header>
                <?php include_once __DIR__.'/controller/nav.php'; ?>
            </header>
        <?php }?>
        <div class="layout">
            <?php include_once __DIR__.'/controller/form_login.php'; ?>
        </div>
    </body>
</html>