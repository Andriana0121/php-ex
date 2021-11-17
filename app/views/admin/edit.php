<div class="container">
    <h1>Page Modific</h1>
    <? debug($_POST) ?>
    <form class="form-signin" method="post" enctype="multipart/form-data">
        <h3>Modificate product</h3>
        <? foreach ($vars as $key => $product) : ?>
            <div class="form-group">
                <label for="exampleFormControlSelect">Category</label>
                <select class="form-control" id="exampleFormControlSelect" name="idCategory">
                    <option value="<?= $product['id_c'] ?>"><?= $product['Categoria'] ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Name</label>
                <input class="form-control" type="text" placeholder="Name" name="name" value="<?= $product['Name'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Price</label>
                <input class="form-control" type="text" placeholder="Price" name="price" value="<?= $product['Price'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Massa</label>
                <input class="form-control" type="text" placeholder="Massa" name="massa" value="<?= $product['Massa'] ?>">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="photo" value="/public/assets/img/<?= $product['Picture'] ?>">
                <label class="custom-file-label" for="customFile">Choose photo</label>
            </div>
        <? endforeach; ?>
        <button class="btn btn-lg btn-info btn-block" type="submit">Edit</button>
    </form>
</div>
<style>
    .container {
        margin-top: 1%;
    }

    .form-signin {
        width: 100%;
        max-width: 830px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 15px;
        font-size: 16px;
    }
</style>