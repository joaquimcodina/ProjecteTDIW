<html lang="ca">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
        <title>Disc Shop | Tienda Musical</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '../estils/index.css' ?>"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="<?php echo BASE_URL . '../js/funcions.js' ?>"></script>
        <script src="<?php echo BASE_URL . '../js/jquery-3.6.0.min.js' ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <?php require __DIR__ . 'controller/nav.php' ?>
        </header>
        <div class="container">
            <?php require __DIR__ . 'controller/home.php'; ?>
        </div>
    </body>
</html>