<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>LListat de categories - DISC SHOP</title>
        <link rel="stylesheet" href="<?php echo BASE_URL . '/estils/categories.css' ?>"/>
        <link rel="stylesheet" href="<?php echo BASE_URL . 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'?>">
        <link href="<?php echo BASE_URL . 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="<?php echo BASE_URL . '/js/jquery-3.6.0.min.js' ?>"></script>
        <link rel="icon" href="<?php echo BASE_URL .'../img/favicon.ico'?>" type="image/x-icon">
    </head>
    <body>
        <header>
            <?php require __DIR__ . 'controller/nav.php' ?>
        </header>
        <div class="container">
            <?php require __DIR__ . 'controller/category_list.php'; ?>
        </div>
    </body>
</html>