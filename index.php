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
                case 'about':
                    include 'page/about.php';
                break;
                case 'career':
                    include 'page/career.php';
                break;
                case 'news':
                    include 'page/berita.php';
                break;
                case 'contact':
                    include 'page/contact.php';
                break;
                case 'testimony':
                    include 'page/testimoni.php';
                break;
                case 'cartProduct':
                    include 'page/cartProduct.php';
                break;
                case 'gallery':
                    include 'page/gallery.php';
                break;
                case 'shoppingCart':
                    include 'page/shoppingCart.php';
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