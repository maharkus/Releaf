<?php include "components/connection.php" ?>
<?php $product = getProduct($_GET["id"]); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Releaf - Für Körper und Seele</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icons/favicon.ico" />
</head>

<body>
    <!--Navigation-->
    <div id="nav" class="sticky">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main id="product">
        <div class="product-wrapper">
            <div class="productImage">
                <h1 class="spacer"> </h1>
                <div class="image-wrapper">
                    <img class="image" src="<?php echo $product->getImage() ?>">
                </div>
                <h1 class="spacer"> </h1>
            </div>
            <div class="productDescription">
                <h1 class="spacer productName"> <?php echo $product->name; ?> </h1>
                <div class="productBody">
                    <div class="stars">
                        <hr>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <?php if ($product->rating >= $i) : ?>
                                <img src="img/icons/ic_star_full.svg">
                            <?php else : ?>
                                <img src="img/icons/ic_star_hollow.svg">
                            <?php endif ?>
                        <?php endfor; ?>
                        <hr>
                    </div>
                    <div class="description">
                        <h3 clas="amatic">Beschreibung:</h3>
                        <p class="opensans"><?php echo $product->description ?></p>
                    </div>
                    <div class="price">
                        <p class="amatic"><?php echo $product->getPrice(); ?></p>
                    </div>
                    <div class="cart">
                        <form action="./cart.php" type="submit" method="post" onsubmit="addToCart(<?php echo ($_GET['id'] ?? null) ?>)">
                            <button type="button" class="plusminus" onclick="handleMinus()">-</button>
                            <input id="num" value="0" min="0" max="99" required />
                            <button type="button" class="plusminus" onclick="handlePlus()">+</button>
                            <button class="cartButton">
                                <img src="./img/icons/ic_shopping_cart.svg">
                            </button>
                        </form>
                    </div>
                </div>
                <h1 class="spacer"> </h1>
            </div>
        </div>
    </main>

    <!--Footer-->
    <?php include "components/footer.php"; ?>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/product.js"></script>
</body>

</html>