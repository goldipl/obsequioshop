<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obsequio | Category</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/nav.php"; ?> 
        </header>
        <div id="main-wrapper">
            <div class="breadcrumbs">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Alladin</a>
                    </li>
                    <li class="breadcrumb-item actual">
                        <a href="#">Office Accessories</a>
                    </li>
                </ul>
            </div>

            <?php include "./components/category/category_top_categories.php"; ?>

            <div class="row__container category">
                <aside>
                    <?php include "./components/category/category_filters.php"; ?> 
                    <?php include "./components/common/aside_boxes.php"; ?> 
                </aside>
                <div class="col_10__container">
                    <?php include "./components/category/category_main.php"; ?> 
                    <?php include "./components/common/pagination.php"; ?>  
                </div>
            </div>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/accordion_title.js"></script>
        <script src="./js/category/category-range-zip.js"></script>
    </body>
</html>