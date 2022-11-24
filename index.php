<?php
    session_start();
    $arrProducts = array(
        array(
            'item' => "Karambit Elite",
            'price' => "₱560",
            'img1' => "Item1A.jpg",
            'img2' => "Item1B.jpg"
        ),
        array(
            'item' => "Karambit Fang",
            'price' => "₱500",
            'img1' => "Item2A.jpg",
            'img2' => "Item2B.jpg"
        ),
        array(
            'item' => "Butterfly Knife Sapphire",
            'price' => "₱600",
            'img1' => "Item3A.jpg",
            'img2' => "Item3B.jpg"
        ),
        array(
            'item' => "Tactical Knife Foldable",
            'price' => "₱450",
            'img1' => "Item4A.jpg",
            'img2' => "Item4B.jpg"
        ),
        array(
            'item' => "Z-Hunter Sword",
            'price' => "₱800",
            'img1' => "Item5A.jpg",
            'img2' => "Item5B.jpg"
        ),array(
            'item' => "Z-Hunter Machete",
            'price' => "₱780",
            'img1' => "Item6A.jpg",
            'img2' => "Item6B.jpg"
        ),
        array(
            'item' => "Nunchucks Dragon",
            'price' => "₱300",
            'img1' => "Item7A.jpg",
            'img2' => "Item7B.jpg"
        ),
        array(
            'item' => "Tactical Knife Carbon",
            'price' => "₱480",
            'img1' => "Item8A.jpg",
            'img2' => "Item8B.jpg"
        )
    )




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/shoppingcart.css">
    <title>ArmYourSelf</title>
</head>
<body>
<div class="container">
<div class="row mt-3">
            <div class="col-10">
                <h1><i class="fa-solid fa-gun"></i>ArmYourSelf</h1>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge bg-light text-dark">0</span>
                </a>
            </div>            
        </div>
        <hr>
    
    <div class="row">

        <?php
            if(isset($arrProducts))
                foreach ($arrProducts as $key => $product) {
        ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1" src="img/<?php echo $product['img1']; ?>">
                                    <img class="pic-2" src="img/<?php echo $product['img2']; ?>">
                                </a>
                                <a class="add-to-cart" href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Add to cart
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title">
                                    <?php echo $product['item']; ?>
                                    <span class="badge bg-dark"><?php echo $product['price']; ?></span>
                                </h3>
                                
                            </div>
                        </div>
                    </div>
            <?php
                }else{
                    echo ('No Product Detected!');
                }
            ?>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>