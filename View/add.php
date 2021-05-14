<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Add product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Line</label>
                        <select name="line" id="" class="from-control" required>
                            <option value="fruit">Fruit</option>
                            <option value="candy">Candy</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Day Create</label>
                        <input type="date" class="form-control" name="day" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div><?php
