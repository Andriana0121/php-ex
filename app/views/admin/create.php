<img src="/public/assets/img/2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
<div class="container">

    <div id="band" class="container text-center">
        <h3>WELCOME ADMIN!</h3>
        <p><em>Here's a pronuntation</em></p>
        <p>We have created a fictional food website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exerc Ut enim ad minim veniam, quis nostrud exerc. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Possimus earum iusto aspernatur voluptates est repudiandae
            Iste consectetur, ex quos necessitatibus dignissimos cumque quasi minima?</p>
        <br>
    </div>
    <form class="form-signin" method="post" enctype="multipart/form-data">
        <h3>Create new product</h3>
        <div class="form-group">
            <label for="exampleFormControlSelect">Category</label>
            <select class="form-control" id="exampleFormControlSelect" name="idCategory">
                <? foreach ($vars as $key => $category) : ?>
                    <option value="<?= $category['ID'] ?>"><?= $category['Categoria'] ?></option>
                <? endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Name</label>
            <input class="form-control" type="text" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Price</label>
            <input class="form-control" type="text" placeholder="Price" name="price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Massa</label>
            <input class="form-control" type="text" placeholder="Massa" name="massa">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="photo">
            <label class="custom-file-label" for="customFile">Choose photo</label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">Create</button>
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