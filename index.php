    <?php 
        include 'head.php';

        include 'loader.php';

        include 'header.php';

        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include 'page/home.php';
                break;
                case 'orderChickenCombo':
                    include 'page/orderChickenCombo.php';
                break;
                case 'product':
                    include 'page/product.php';
                break;
                
                
            }
        } else {
            include 'page/home.php';
        }
        include 'footer.php';

        include 'js.php';
    ?>


  
</body>
</html>