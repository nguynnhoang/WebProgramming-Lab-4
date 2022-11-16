<?php
    if (isset($_GET['page'])) {
        switch($_GET['page'])
        {
            case "blog":
            @include "./pages/blog.php";
            break;
    
            case "products":
            @include "./pages/products.php";
            break;
    
            default:
            @include "./pages/home.php";
        }
    }
?>
