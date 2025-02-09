<ul id="dropdown2" class="dropdown-content">
    <li><a class="blue-text" href="editprofile.php">Edit</a></li>
    <li><a class="blue-text" href="orders.php">Orders</a></li>
    <li><a class="blue-text" href="includes/logout.php">Log out</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="navblack">
        <div class="nav-wrapper nav-wrapper-2 container white">
            <ul class="left hide-on-med-and-down">
                <li><img src="users/logo.png" alt="VK E-Store Logo" class="responsive-img" style="height: 50px; max-width: 180px; padding-top:10px;"></li>
                <li><a href="index.php" class="dark-text">VK E-Store</a></li>

            </ul>

            <ul class="center hide-on-large-only">
                <li><a href="index.php" class="dark-text">E-Commerce</a></li>

            </ul>

            <ul  class="right hide-on-med-and-down">
                <li><a href="index.php" class="dark-text">Home</a></li>
                <li><a href="cart.php" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
                        <span class="badge <?php if(!isset($_SESSION['item']) OR $_SESSION['item'] == 0) echo'hide'; ?>"><?= $_SESSION['item']; ?></span></a></li>
                <li><a href="editprofile.php" class="nohover dropdown-button" class="dropdown-button" data-activates="dropdown2"><img class="responsive-img" src="users/default.jpg">
                        <i class="fa fa-angle-down dark-text right"></i></a></li>
            </ul>
        </div>
    </nav>
</div>
