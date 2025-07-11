<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obsequio | Product Card with Branding</title>
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
                        <a href="#">Office Supplies</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Office Accessories</a>
                    </li>
                    <li class="breadcrumb-item actual">
                        <a href="#">Document Clip</a>
                    </li>
                </ul>
            </div>
            <div class="row__container products-page-row">
                <div class="col__product_images">
                    <?php include "./components/products_card/products_gallery.php"; ?> 
                </div> 
                <div class="col__product_details">
                    <?php include "./components/products_card/products_details_with_branding.php"; ?> 
                </div> 
            </div>
            <?php include "./components/products_card/products_tabs.php"; ?> 
            <?php include "./components/products_card/products_mostly_view.php"; ?> 
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
         <!-- Pricing and visualisation modal -->
         <form class="products_card_modal pricing-visualisation">
            <span class="products_card_modal--close-icon"></span>
            <p class="products_card_modal--title">Pricing and Visualization by Email</p>
            <p class="products_card_modal--desc">We will provide a free pricing and visualization of the product. Please fill out the form.</p>
            <div class="products_card_modal__inputs">
                <div class="products_card_modal__inputs__left">
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="name" placeholder="First Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="company_name" placeholder="Company Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="number" name="telephone" placeholder="Phone Number">
                    </div>
                    <div class="products_card_modal__inputs__left--textarea">
                        <textarea name="message" id="message" placeholder="Message *" required></textarea>
                    </div>
                </div>
                <div class="products_card_modal__inputs__right">
                    <div class="products_card_modal__inputs__right--input">
                        <input type="text" name="surname" placeholder="Last Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__right--input">
                        <input type="email" name="email" placeholder="Email Address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <label for="files2" class="add-files" id="add-files2">
                        <p class="add-files-title">Add Files</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Drag and drop or <br>Add file</p>
                        <input class="file file-block" type="file" id="files2">
                    </label>
                </div>
            </div>
            <p class="products_card_modal--desc green">If you don't have files, no worries, our designer will assist you.</p>
            <div class="products_card_modal__btn">
                <button>Send</button>
            </div>
        </form>
        <!-- Free visualisation modal -->
        <form class="products_card_modal free-visualisation">
            <span class="products_card_modal--close-icon"></span>
            <p class="products_card_modal--title">Free Visualization by Email</p>
            <p class="products_card_modal--desc">We will provide a free visualization of the product. Please fill out the form.</p>
            <div class="products_card_modal__inputs">
                <div class="products_card_modal__inputs__left">
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="name" placeholder="First Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="company_name" placeholder="Company Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="number" name="telephone" placeholder="Phone Number">
                    </div>
                    <div class="products_card_modal__inputs__left--textarea">
                        <textarea name="message" id="message" placeholder="Message *" required></textarea>
                    </div>
                </div>
                <div class="products_card_modal__inputs__right">
                    <div class="products_card_modal__inputs__right--input">
                        <input type="text" name="surname" placeholder="Last Name *" required>
                    </div>
                    <div class="products_card_modal__inputs__right--input">
                        <input type="email" name="email" placeholder="Email Address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <label for="files3" class="add-files" id="add-files3">
                        <p class="add-files-title">Add Files</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Drag and drop or <br>Add file</p>
                        <input class="file file-block" type="file" id="files3">
                    </label>
                </div>
            </div>
            <p class="products_card_modal--desc green">If you don't have files, no worries, our designer will assist you.</p>
            <div class="free_pricing_visualisation_box">
                <p class="title">Pricing for:<span>21 pieces</span></p>
                <p class="desc">Price per piece: 1.66 €</p>
                <p class="desc">Branding: 222 €</p>
            </div>
            <div class="free_summary_visualisation_box">
                <p class="summary netto">Total net order value:<span class="price green big">100.66</span><span class="price green">€</span></p>
                <p class="desc brutto">122.88 € gross</p>
            </div>
            <div class="products_card_modal__btn">
                <button>Send</button>
            </div>
        </form>
        <!-- Added product to cart modal -->
        <form class="products_card_modal added-to-cart">
            <span class="products_card_modal--close-icon"></span>
            <p class="products_card_modal--title">You added a product to the cart</p>
            <p class="products_card_modal--desc">Here is the calculation summary, proceed to cart or continue shopping.</p>
            <div class="free_pricing_visualisation_box">
                <p class="title">Pricing for:<span>21 pieces</span></p>
                <p class="desc">Price per piece: 1.66 €</p>
                <p class="desc">Branding: 222 €</p>
            </div>
            <div class="free_summary_visualisation_box">
                <p class="summary netto">Total net order value:<span class="price green big">100.66</span><span class="price green">€</span></p>
                <p class="desc brutto">122.88 € gross</p>
            </div>
            <div class="products_card_modal_buttons">
                <div class="green-white--btn continue-shopping">
                    <button>Continue Shopping</button>
                </div>
                <div class="full-green--btn go-to-cart">
                    <button>Go to Cart</button>
                </div>
            </div>
        </form>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
        <script src="./js/products_page/pricing_visualisation_modal.js"></script>
        <script src="./js/products_page/free_visualisation_modal.js"></script>
        <script src="./js/products_page/added_to_cart_modal.js"></script>
        <script src="./js/products_page/product_colors.js"></script>
        <script src="./js/file_upload.js"></script>
    </body>
</html>
