<h1>ListAdmin</h1>

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Massa</th>
            </tr>
        </thead>
        <tbody>
            <?foreach ($vars as $key => $product):?>
                <tr>
                    <th scope="row"><?=$product['ID']?></th>
                    <td><?=$product['Name']?></td>
                    <td><?=$product['Price']?></td>
                    <td><?=$product['Massa']?></td>
                    <td><a class="btn btn-info" href="<?=$product['ID']?>">More</a></td>
                </tr>
            <?endforeach;?>
        </tbody>
    </table>
</div>
