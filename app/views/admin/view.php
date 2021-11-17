<div class="container">
    <h1>OneProductInAdminPanel</h1>
    <? debug($vars) ?>
    <? foreach ($vars as $key => $product) : ?>
        <div class="card bg-dark text-white">
            <img src="/public/assets/img/<?= $product['Picture'] ?>" class="card-img" alt="..." width="800" height="500">
            <div class="card-img-overlay">
                <h4 class="card-title"><?= $product['Name'] ?></h4>
                <p class="card-text">Категория: <b><?= $product['Categoria'] ?></b></p>
                <p class="card-text">Цена: <b><?= $product['Price'] ?></b></p>
                <p class="card-text">Масса: <b><?= $product['Massa'] ?></b></p>
                <p class="card-text">Дата создания: <b><?= $product['Date_create'] ?></b></p>
                <p class="card-text">Дата модификации: <b><?= $product['Date_modif'] ?></b></p>
                <a href="edit/<?= $product['ID'] ?>" class="btn btn-warning">Модифицировать</a>
                <a href="delete/<?= $product['ID'] ?>" class="btn btn-danger">Удалить</a>
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