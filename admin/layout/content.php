<div class="colRight col-lg-10">
    <?php
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'product':
                include "../view/products/list.php";
                break;
            case 'category':
                include "../view/categories/list.php";
                break;
            case 'customer':
                include "../view/customer/user.php";
                break;
            case 'comment':
                include "../view/comment/blog.php";
                break;
            case 'statistical':
                include "../view/statistical/data.php";
                break;
            default:
                include "../view/admin_dashboard.php";
                break;
        }
    }
    ?>
</div>
</div>
</div>