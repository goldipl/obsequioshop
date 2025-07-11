<form class="cart_step_two_container inputs">
    <div class="cart_step_two_container__left">
        <div class="cart_step_two_container__box">
            <div class="cart_step_two_container__box__left">
                <div class="title">
                    <p>Personal Information</p>
                </div>
                <div class="input-slot">
                    <input type="text" name="name" placeholder="First Name *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="surname" placeholder="Last Name *" required>
                </div>
                <div class="input-slot">
                    <input type="email" name="email" placeholder="Email Address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="telephone" placeholder="Phone Number *" required>
                </div>
            </div>
            <div class="cart_step_two_container__box__right">
                <div class="input-slot radio-btns">
                    <input type="radio" id="company" name="buyer-radiobtn" value="Invoice Data" checked>&nbsp;<label for="company">Invoice Data</label>
                    <input type="radio" id="person" name="buyer-radiobtn" value="Private Individual">&nbsp;<label for="person">Private Individual</label>
                </div>
                <div class="input-slot company">
                    <input type="text" name="company" placeholder="Company Name *" required>
                </div>
                <div class="input-slot nip">
                    <input type="number" name="nip" placeholder="VAT ID (NIP) *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="street" placeholder="Street *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="zipcode" placeholder="Postal Code *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="city" placeholder="City *" required>
                </div>
                <div class="input-slot checkbox-slot">
                    <input type="checkbox" name="address_checkbox" id="address_checkbox" required>
                    <label class="checkbox" for="address_checkbox">Shipping address different from invoice address</label>
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="company" placeholder="Company Name">
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="name" placeholder="First Name">
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="surname" placeholder="Last Name">
                </div>
                <div class="input-slot other-address">
                    <input type="number" name="nip" placeholder="VAT ID (NIP) *" required>
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="street" placeholder="Street *" required>
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="zipcode" placeholder="Postal Code *" required>
                </div>
                <div class="input-slot other-address">
                    <input type="text" name="city" placeholder="City *" required>
                </div>
            </div>
        </div>
        <div class="cart_bottom_button_container">
            <a class="back-btn" href="">Back</a>
        </div>
    </div>
    <div class="cart_step_two_container__right">
        <div class="cart_pay_box">
            <div class="cart_pay_box__content">
                <p class="desc each-price">Price per unit: €1.66</p>
                <p class="desc branding-price">Branding: €222</p>
                <p class="desc netto-price"><span>Net total:</span> €100.66</p>
                <p class="desc vat"><span>VAT 23%:</span> €10.66</p>
                <p class="desc delivery"><span>Courier Delivery:</span> €20.00</p>
                <p class="desc brutto">Gross amount <br>(to pay):</p>
                <p class="desc brutto-price"><span class="big green">100.66</span><span class="large green">€</span></p>
            </div>
            <div class="cart_pay_box__button">
                <button class="next-btn">Next</button>
            </div>
        </div>
    </div>
</form>
