<?php

include 'header.php';

$cakes = $pdo->query('SELECT * FROM cake ORDER BY created_at DESC')->fetchAll();

?>
<section class="container">
    <h3>Cakes list</h3>
    <div class="row">
        <?php foreach ($cakes as $cake): ?>
        <div class="col-sm-3">
            <a href="cake.php?id=<?php echo $cake['id'] ?>">
                <article class="card">
                <img class="card-img-top" src="<?php echo $cake['image'] ?>" alt="<?php echo $cake['name'] ?>" style="height:300px">
                    <div class="card-body">
                        <p class="card-text"><?php echo $cake['name'] ?> - <?php echo $cake['price'] ?> €</p>
                    </div>
                </article>
            </a>
        </div>
        <?php endforeach ?>
    </div>
</section>
<?php

include 'footer.php';

?>
