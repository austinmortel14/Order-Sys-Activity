<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome</h1>
    <p>Menu:</p>
    <ul>
        <li>Burger (Php 50)</li>
        <li>Fries (Php 75)</li>
        <li>Steak (Php 150)</li>
    </ul>

    <form action="handlesform.php" method="post">
        <div class="mb-3">
            <label for="foodItem" class="form-label">Select Food Item:</label>
            <select class="form-select" id="foodItem" name="foodItem" required>
                <option value="">Select...</option>
                <option value="burger">Burger (Php 50)</option>
                <option value="fries">Pizza (Php 75)</option>
                <option value="steak">Fries (Php 150)</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Add to Order</button>
    </form>
</body>
</html>