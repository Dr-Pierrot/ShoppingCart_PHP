<?php
    session_start();
    require'products.php';
    $_SESSION['totalAmount'] = 0;

    if(isset($_POST['btnUpdate'])) {
        
        // fetch all the input data and store them on variables
        // these variables will become arrays since the input types are declared as arrays
        $cartKeys = $_POST['hdnKey'];
        $cartSize = $_POST['hdnSize'];
        $cartQuantities = $_POST['txtQuantity'];

        // test if all of the array variables are set, this is just a precaution and a good programming practice        
        if(isset($cartKeys) && isset($cartSize) && isset($cartQuantities)) {
            // when we update we should consider that the value of session total quantity will change
            // with that we should reinitialize its value to 0 to prepare it for the computation below

            $_SESSION['totalQuantity'] = 0;

            foreach($cartKeys as $index => $key) {
                // $index is the index of the form array element and has nothing to do with the flow of our program except to extract the values from these arrays
                // $key is the index of the item from the arrProducts
                // we are simply performing a loop and updates the quantity of the session cartItems based on the coordinates that are dynamically produced using this loop
                $_SESSION['cartItems'][$key][$cartSize[$index]] = $cartQuantities[$index];

                // then we re compute the value of the session totalQuantity
                $_SESSION['totalQuantity'] += $cartQuantities[$index];
            }
        }
    }

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
                <h1><i class="fa-solid fa-gun"></i>ArmYourSelf Online Shop</h1>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge bg-light text-dark">
                        <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                </a>
            </div>            
        </div>
        <hr>
    
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-1"></th>
                            <th class="col-4">Product</th>
                            <th class="col-2">Color</th>
                            <th class="col-2">Quantity</th>
                            <th class="col-2">Price</th>
                            <th class="col-2">Total</th>
                            <th class="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if (isset($_SESSION['cartItems'])) {
                                foreach ($_SESSION['cartItems'] as $key => $cartitem) {
                                    foreach ($cartitem as $color => $quantity) {
                                        $_SESSION['totalAmount'] += ($arrProducts[$key]['price'] * $quantity);
                                    ?>
                                        <tr>
                                            <td><img src="img/<?php echo $arrProducts[$key]['img1'] ?>" class="img-thumbnail"></td>
                                            <td><h4 ><?php echo $arrProducts[$key]['item']; ?></h4></td>
                                            <td><?php echo $color; ?></td>
                                            <td class="col-1">
                                                <input type="number" name="upqty" value="<?php echo $quantity; ?>" class="form-control text-center" style="width: 150px;">
                                            </td>
                                            <td><?php echo '₱ '.$arrProducts[$key]['price']; ?></td>
                                            <td><?php echo $arrProducts[$key]['price'] * $quantity ?></td>
                                            
                                            <td class="col-sm-1 col-md-1">
                                            <a href="remove-confirm.php" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                        <?php       }
                                }
                            }else{ ?>
                                <tr>
                                    <td colspan="7">
                                        No item has been add to cart yet!
                                    </td>
                                </tr>  
                    <?php   }

                            ?>
                        <tr>
                            <?php if(isset($_SESSION['totalQuantity'])): ?>
                            <td colspan="2">   </td>
                            <td><h3>Total</h3></td>
                            
                            <td class="text-center"><?php echo $_SESSION['totalQuantity']; ?></td>
                            <td> ---- </td>
                            <td><?php echo $_SESSION['totalAmount']; ?></td>
                        </tr>
                        <?php endif;?>

                    </tbody>
                </table>
                    <div class="row">
                        <div class="col-4">
                            <a href="index.php" class="btn btn-danger form-control">
                                <i class="fa fa-shopping-bag"></i>
                                Continue Shopping
                            </a> 
                        </div>
                        
                        <div class="col-4">
                            <button type="button" class="btn btn-success form-control">
                                <i class="fa fa-edit"></i>
                                Update cart
                                <span class="glyphicon glyphicon-play"></span>
                            </button> 
                        </div>

                        <div class="col-4">
                            <a href="clear.php" class="btn btn-primary form-control">
                                <i class="fa fa-sign-out-alt"></i>
                                Checkout
                            </a>  
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>