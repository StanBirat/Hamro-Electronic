<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   <!-- bootstrap css link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- external css link -->
<link rel="stylesheet" href="../style.css">

</head>
<body>
    <!-- navbar -->
    <div class="container-fluid">

    <!--First child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
            <img src="../images/logo.png" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome Birat</a>
                    </li>
                </ul>
            
        </nav>
            </div>
        </nav>
<!--Second child-->
<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
<!--Third child-->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
<div class="p-3">

<a href="#"><img src="../images/birat.jpg" alt="" class="admin_image"></a>
<p class="text-light text-center">Birat Tripathee</p>
</div>
<div class="button text-center">
    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
    <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
    <button><a href="index.php?insert_products" class="nav-link text-light bg-info my-1">View Categories</a></button>
    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
    <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
</div>
    </div>
</div>
<!--Fourth child-->
<div class="container my-3">
    <?php
    if(isset($_GET['insert_categories'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brands'])){
        include("insert_brands.php");
    }
    ?>
</div>

<!--last child-->
<div class="bg-info p-3 text-center footer">
    <p>All right reserved & copy 2023. Hamro Electronics</p>
</div>
    </div>
    

   <!-- bootstrap js link-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>