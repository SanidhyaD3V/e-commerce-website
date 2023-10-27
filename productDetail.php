<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            /* font-family: Arial, sans-serif; */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .product-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .product-image {
            max-width: 100%;
        }
        .product-title {
            font-size: 24px;
            margin: 10px 0;
        }
        .product-description {
            font-size: 16px;
            margin: 10px 0;
        }
        .product-price {
            font-size: 20px;
            color: #e74c3c;
        }
    </style>
</head>
<body>
<header>
        <h1>Product Detail Page</h1>
    </header>

    <div class="product-container">
        <img class="product-image" src="<?php bloginfo('template_url') ?>/images/3.png"  alt="Product Image">
        <h2 class="product-title">Product Name</h2>
        <p class="product-description">This is a description of the product. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class="product-price">$99.99</p>

        <!-- Add to Cart Button (You can link this to a shopping cart functionality) -->
        <button>Add to Cart</button>
    </div>
</body>
</html>