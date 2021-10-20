<html lang="ca">
<head>
    <title>LListat de categories - DISC SHOP</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/estils/categories.css' ?>"/>
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