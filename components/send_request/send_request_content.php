<div class="send_request">
    <div class="send_request_title">Send Inquiry - <span>special orders</span></div>
    <div class="send_request_desc">Have questions? Send us a message</div>
    <div class="send_request_box">
        <form class="send_request_form">
            <div class="send_request_form_top">
                <div class="send_request_form_top__left">
                    <div class="send_request_form_top__left--input">
                        <input type="text" name="name" placeholder="First Name *" required>
                    </div>
                    <div class="send_request_form_top__left--input">
                        <input type="text" name="company_name" placeholder="Company Name *" required>
                    </div>
                    <div class="send_request_form_top__left--input">
                        <input type="number" name="telephone" placeholder="Phone Number">
                    </div>
                    <div class="send_request_form_top__left--textarea">
                        <textarea name="message" id="message" placeholder="Message *" required></textarea>
                    </div>
                </div>
                <div class="send_request_form_top__right">
                    <div class="send_request_form_top__right--input">
                        <input type="text" name="surname" placeholder="Last Name *" required>
                    </div>
                    <div class="send_request_form_top__right--input">
                        <input type="email" name="email" placeholder="Email Address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <label for="files" class="add-files" id="add-files">
                        <p class="add-files-title">Add files</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Drag and drop or <br>Add file</p>
                        <input class="file file-block" type="file" id="files">
                    </label>
                </div>
            </div>
            <div class="send_request_form_bottom">
                <div class="send_request_form_bottom__btn">
                    <button>Send</button>
                </div>
            </div>
        </form>
    </div>
</div>
