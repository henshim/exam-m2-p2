<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Update product information
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=update&id=<?php echo $product['id']; ?>"
                      enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $product['id']; ?>" name="id">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" value="<?php echo $product['name']; ?>"
                               class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Line</label>
                        <input type="text" class="form-control" value="<?php echo $product['productLine']; ?>"
                               name="line">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo $product['price']; ?>" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" name="amount" value="<?php echo $product['amount']?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Day Create</label>
                        <input type="date" name="day" class="form-control"
                               value="<?php echo $product['dayCreate']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control"
                               value="<?php echo $product['description']; ?>"
                               name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" href="index.php?page=product" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
