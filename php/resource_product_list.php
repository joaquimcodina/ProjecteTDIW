<html lang="ca">
<head>
    <title>LListat de produstes - DISC SHOP</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '../estils/productlist.css' ?>"/>
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