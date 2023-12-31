<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary border-y">
  <div class="container-fluid bg-primary ">
    <a class="navbar-brand mt-2 mb-2 text-white" href="#"><span class="text-warning fs-3 ms-3"><b>Electronic Shop</b></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white fs-5 ms-5" aria-current="page" href="../home/home.php">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link text-white fs-5" href="../product/product.php">Product</a>
        </li>
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu  ">
            <li><a class="dropdown-item " href="../category/category.php?category=mobile_phone"> Mobile Phone</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=laptop"> Laptop</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=fan"> Fan</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=refrigerator"> Refrigerator</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=ac"></i> AC</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=smart_watch"></i> Smart Watch</a></li>
            <li><a class="dropdown-item " href="../category/category.php?category=smart_tv"></i> Smart TV</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5 ms-3" href="../about/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5 ms-3" href="../contact/contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fs-5 ms-3" href="../purchase/purchaseTable.php">My orders</a>
        </li>
        <?php
        if ($_SESSION['account'] == 'admin') {
          echo '
          <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item " href="../adminProduct/adminProduct.php"> Products</a></li>
            <li><a class="dropdown-item " href="../contact/contactT.php"> Contact Us messgaes</a></li>
            <li><a class="dropdown-item " href="../addToCart/cartTable.php">Cart List</a></li>

          </ul>
        </li>
        ';
        }
        ?>
      </ul>
      <div class="bg-white">
        <form class="d-flex" role="search">
          <input class="form-control " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>