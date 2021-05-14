<a href="index.php?page=add">Add product</a>
<div style="margin-left: 800px">
    <form class="d-flex" method="post" action="index.php?page=search">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Product Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Line</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">Day Create</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $product) : ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><a href="index.php?page=product&id=<?php echo $product['id'] ?>">
                <?php echo $product['id'] ?>
            </a>
        </td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['productLine'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td><?php echo $product['amount'] ?></td>
        <td><?php echo $product['dayCreate'] ?></td>
        <td><?php echo $product['description'] ?></td>
        <td>
            <a href="./index.php?page=update&id=<?php echo $product['id']; ?>"
               class="btn btn-primary btn-sm">Update</a>
            <a href="./index.php?page=delete&id=<?php echo $product['id']; ?>"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Are you sure about that?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
