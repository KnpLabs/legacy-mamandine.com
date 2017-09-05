<?php

include 'header.php';

$cake = $pdo->query('SELECT * FROM cake WHERE id = ' . $_GET['id'])->fetch();
$categories = $pdo->query('SELECT * FROM category INNER JOIN cake_category ON category.id = cake_category.category_id WHERE cake_category.cake_id = ' . $_GET['id'])->fetchAll();

?>

<section class="container">
    <article>
        <h1><?php echo $cake['name'] ?></h1>
        <a class="btn btn-light" href="index.php"> &crarr; Back to list</a>
        <div class="media">
            <img class="d-flex align-self-start mr-3" src="/<?php echo $cake['image'] ?>" alt="<?php echo $cake['name'] ?>" style="height:500px">
            <div class="media-body">
                <p><button class="btn btn-primary">Purchase for <strong><?php echo $cake['price'] ?> €</strong></button></p>
                <p>
                    <?php foreach ($categories as $category): ?>
                        <span class="badge badge-secondary"><?php echo $category['name'] ?></span>
                    <?php endforeach ?>
                </p>
                <p><?php echo $cake['description'] ?></p>
            </div>
        </div>
    </article>
</section>

<?php

include 'footer.php';

?>
