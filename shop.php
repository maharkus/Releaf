<?php include "components/connection.php" ?>

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
    <div id="nav">
        <?php include "components/nav.php"; ?>
    </div>

    <!--Main Content-->
    <main>
        <form class="search" action="./shop.php">
            <input class="opensans" id="search" name="search" type="text" placeholder="Suche...">
            <button class="button opensans">Suche</button>
        </form>

        <div class="categoryContainer">
            <?php foreach (getCategories() as $key => $category) : ?>
                <form action="./shop.php">
                    <button type="submit" name="category" value="<?php echo $category->id ?>">
                        <div class="category">
                            <div class="image-wrapper">
                                <img class="image" src="<?php echo $category->getImage() ?>">
                            </div>
                            <h3 class="amatic"><?php echo $category->name; ?></h3>
                        </div>
                    </button>
                </form>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>