<?php

include 'header.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $createdAt = (new \DateTime())->format(\DateTime::RFC3339);

    $pdo->query('INSERT INTO cake(`name`, `description`, `price`, `created_at`, `image`) VALUES ("'.$name.'", "'.$description.'", "'.$price.'", "'.$createdAt.'", "'.$image.'");');

    header('Location: index.php');exit;
}

?>
<section class="container">
    <article>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Cake name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Cake name" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <input type="number" name="price" class="form-control" id="price" placeholder="32.00" />
                    <span class="input-group-addon">€</span>
                </div>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" name="image" id="image">
            </div>

            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </article>
</section>
<?php

include 'footer.php';

?>
