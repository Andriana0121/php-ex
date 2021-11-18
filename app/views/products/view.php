<div class="container">
    <? debug($vars) ?>
    <? foreach ($vars as $key => $product) : ?>
        <div class="card bg-dark text-white">
            <img src="/public/assets/img/<?= $product['Picture'] ?>" class="card-img image" alt="..." width="800" height="500">
            <div class="card-img-overlay">
                <h4 class="card-title"><?= $product['Name'] ?></h4>
                <p class="card-text">Price: <b><?= $product['Price'] ?></b></p>
                <p class="card-text">Mass: <b><?= $product['Massa'] ?></b></p>
                <a href="/account/addCart/<?= $product['ID'] ?>" class="btn btn-warning">Добавить в корзину</a>
                <a href="#" class="btn btn-success">Заказать</a>
            </div>
        </div>
    <? endforeach; ?>

</div>
<style>
    .container {
        margin-bottom: 50px;
        padding-top: 50px;
    }
</style>