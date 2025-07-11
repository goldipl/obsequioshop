<form class="register_container">
    <div class="register_container__top">
        <p class="info-text">Register to gain access to additional site features</p>
    </div>
    <div class="register_container__bottom">
        <h1 class="title">Register</h1>
        <div class="register_container__bottom__middle">
            <div class="register-slot">
                <div class="input-slot">
                    <input type="email" name="email" id="email" placeholder="Email address *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                </div>
                <div class="input-slot">
                    <input type="password" name="password" id="password" placeholder="Password *" required>
                </div>
                <div class="input-slot">
                    <input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat password *" required>
                </div>
            </div>
            <div class="register-slot">
                <div class="input-slot">
                    <input type="text" name="name" id="name" placeholder="First name *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="surname" id="surname" placeholder="Last name *" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="telephone" id="telephone" placeholder="Phone number">
                </div>
            </div>
            <div class="register-slot">
                <div class="input-slot">
                    <input type="text" name="company" id="company" placeholder="Company name *" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="nip" id="nip" placeholder="Tax ID (NIP) *">
                </div>
                <div class="input-slot">
                    <input type="text" name="street" id="street" placeholder="Street *">
                </div>
                <div class="input-slot">
                    <input type="text" name="zipcode" id="zipcode" placeholder="Postal code *">
                </div>
                <div class="input-slot">
                    <input type="text" name="city" id="city" placeholder="City *">
                </div>
            </div>
            <div class="register-checkbox-slot">
                <div class="input-slot checkbox-slot">
                    <input type="checkbox" name="register_checkbox" id="register_checkbox" required>
                    <label class="checkbox" for="register_checkbox">I have read and accept the Terms and Conditions and Privacy Policy</label>
                </div>
            </div>
        </div>
        <div class="full-green--btn register-btn-container">
            <button class="register-btn">Register</button>
        </div>
    </div>
</form>
