<div class="container">
    <h2>Make order!</h2>
    <div class="row text-center">
        <? foreach ($vars as $key => $product) : ?>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="/public/assets/img/<?= $product['Picture'] ?>" class="card-img"
                        alt="<?= $product['Picture'] ?>" width="400" height="400">
                    <h4><?= $product['Name'] ?></h4>
                    <p>Price: <b><?= $product['Price'] ?></b></p>
                    <p>Massa: <b><?= $product['Massa'] ?></b></p>
                    <a href="/products/<?= $product['ID'] ?>" class="btn btn-primary">Посмотреть</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
<style>
    .container {
        margin-bottom: 50px;
    }
</style>