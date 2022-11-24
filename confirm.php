<?php
    session_start();
    

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
    <form method="post">
        <div class="container">
            <div class="row mt-3">
                <div class="col-10">
                    <h1><i class="fa-solid fa-gun"></i>ArmYourSelf Online Shop</h1>
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
                <h4>Product Successfully Added to the Cart, what do you want to do next?</h4>
                </div>
                <a href="cart.php" class="btn btn-dark btn-lg"><i class="fa fa-shopping-cart"></i>View Cart</a>
                <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-shopping-bag"></i>Continue Shopping</a>
        </div>
    </form>
    
</body>
</html>