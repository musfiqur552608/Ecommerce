
<?php
include_once './db/connection.php';
$object=new connection();
$connection=$object->Connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2d883123ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ecommerce</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark text-white" style="background:#2EB26E;">
            <a class="text-white navbar-brand" href="#">
                <i class="fab fa-pagelines animate flash"></i> Organic Store
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>

                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a class="text-white nav-link" href="cart.php">
                        <i class="text-warning fas fa-shopping-cart">   
                            </i> Shopping Cart

                        <i style="color:yellow" id="cart_n"></i>
                    </a>
                </form>

            </div>
        </nav>
    </header>
    


        <div class="container">
            <footer>
                <p class="float-right">
                    <a href="#">TOP</a>
                </p>
                <div class="raw">
                    BROX IT
                </div>
            </footer>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>