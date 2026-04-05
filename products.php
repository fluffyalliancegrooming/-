<?php 
    $pageTitle = "Our Products";

    // In the future, this array could come from a database!
    $products = [
        [
            "name" => "Organic Pet Shampoo",
            "description" => "Gentle, tear-free formula for a happy bath time.",
            "price" => "15.00",
            "image" => "https://via.placeholder.com/200/FFC0CB/000000?Text=Shampoo"
        ],
        [
            "name" => "Durable Chew Toy",
            "description" => "Keeps your dog entertained for hours.",
            "price" => "12.00",
            "image" => "https://via.placeholder.com/200/ADD8E6/000000?Text=Toy"
        ],
        [
            "name" => "Soft Bristle Brush",
            "description" => "Perfect for sensitive skin and a shiny coat.",
            "price" => "18.00",
            "image" => "https://via.placeholder.com/200/90EE90/000000?Text=Brush"
        ]
    ];

    include 'header.php'; 
?>

<style>
    .product-gallery { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; }
    .product-item { background: #fff; border: 1px solid #ddd; border-radius: 5px; width: 250px; text-align: center; padding: 15px; }
    .product-item img { max-width: 100%; height: auto; border-bottom: 1px solid #ddd; padding-bottom: 10px; margin-bottom: 10px; }
</style>

<div class="container">
    <p style="text-align:center;">To purchase any items, please contact us directly or visit our spa!</p>
    <div class="product-gallery">
        
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p><?php echo $product['description']; ?></p>
                <p><strong>Price: $<?php echo $product['price']; ?></strong></p>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php include 'footer.php'; ?>
