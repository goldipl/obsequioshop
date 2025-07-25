<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obsequio | Send Inquiry - Custom Order</title>
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
                        <a href="#">Send Inquiry</a>
                    </li>
                </ul>
            </div>
            <div class="row__container">
                <div class="col_10__container">
                    <?php include "./components/send_request/send_request_content.php"; ?> 
                </div>
                <aside>
                    <div class="envelope-img">
                        <img src="./assets/img/send_request/envelope.jpg" width="265" height="265" alt="envelope">
                    </div>
                </aside>
            </div>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/file_upload.js"></script>
    </body>
</html>
