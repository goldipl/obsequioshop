<div class="contact_container">
    <h1 class="title">Write to us</h1>
    <p class="desc">Contact form</p>
    <form class="contact_form_box">
        <div class="top_container">
            <div class="contact_form_box__left">
                <div class="contact_form_box__left_top">
                    <div class="contact_form_box__left_top__col">
                        <div class="contact_form_box__left_top__col--input">
                            <input type="text" name="name" placeholder="First Name *" required>
                        </div>
                        <div class="contact_form_box__left_top__col--input">
                            <input type="text" name="company_name" placeholder="Company Name *" required>
                        </div>
                        <div class="contact_form_box__left_top__col--input">
                            <input type="number" name="nip_code" placeholder="VAT Number *" required>
                        </div>
                    </div>
                    <div class="contact_form_box__left_top__col second">
                        <div class="contact_form_box__left_top__col--input">
                            <input type="text" name="surname" placeholder="Last Name *" required>
                        </div>
                        <div class="contact_form_box__left_top__col--input">
                            <input type="email" name="email" placeholder="Email Address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        </div>
                        <div class="contact_form_box__left_top__col--input">
                            <input type="number" name="tel" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="contact_form_box__left_bottom">
                    <textarea name="msg" id="msg_box" placeholder="Message *" required></textarea>
                </div>
            </div>
            <div class="contact_form_box__right">
                <label for="files" class="add-files" id="add-files">
                    <p class="add-files-title">Add files</p>
                    <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                    <p class="add-files-text">Drag and drop or <br>Add file</p>
                    <input class="file file-block" type="file" id="files">
                </label>
            </div>
        </div>
        <div class="bottom-container">
            <div class="send_request_form_bottom__btn">
                <button>Send</button>
            </div>
        </div>
    </form>
    <h2 class="second-title">Contact details</h2>
    <div class="contact_box">
        <div class="contact_box__slot left">
            <div class="contact_box__slot_top">
                <div class="contact_box__slot_top--title">
                    <h3>Head office in Wrocław:</h3>
                </div>
            </div>
            <div class="contact_box__slot_bottom">
                <div class="contact_box__slot_bottom--text">
                    <p class="desc location">1A St. George Street</p>
                    <p class="desc">50-518 Wrocław</p>
                    <p class="desc telephone">tel. <a class="gtm-phone" href="tel:+48 71 326 74 10">+48 71 326 74 10</a></p>
                    <p class="desc mail">e-mail: <a class="gtm-mail" href="mailto:wroclaw@sparkpromotions.pl">wroclaw@sparkpromotions.pl</a></p>
                </div>
            </div>
        </div>
        <div class="contact_box__slot right">
            <div class="contact_box__slot_top">
                <div class="contact_box__slot_top--title">
                    <h3>Billing details:</h3>
                </div>
            </div>
            <div class="contact_box__slot_bottom">
                <div class="contact_box__slot_bottom--text">
                    <p class="desc">Obsequio Sp. z o.o. Sp. k.</p>
                    <p class="desc">1A St. George Street</p>
                    <p class="desc">50-518 Wrocław</p>
                    <p class="desc">VAT No: 8951788428</p>
                </div>
            </div>
        </div>
    </div>
</div>
