<?php
    if (isset($_GET['page'])) {
        switch($page)
        {
            case "blog":
            header("Location:/Project/pages/blog.php");
            break;
    
            case "products":
            header("Location:/Project/pages/products.php");
            break;
    
            default:
            header("Location:/Project/pages/home.php");
        }
    }
    else {
        header("Location:/Project/pages/home.php");
    }
?>
