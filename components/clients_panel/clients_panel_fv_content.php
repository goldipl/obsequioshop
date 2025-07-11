<div class="clients_panel_fv_content">
    <div class="clients_panel_fv_content__left">
        <aside class="clients_panel_aside">
            <p class="clients_panel_aside--title">Hi!<br><span>Jan Kowalski</span></p>
            <a class="clients_panel_aside--slot orders" href="./clients-panel-orders.php">
                <p>Orders</p>
            </a>
            <a class="clients_panel_aside--slot data" href="./clients-panel-my-data.php">
                <p>Your Data</p>
            </a>
            <a class="clients_panel_aside--slot fv active" href="./clients-panel-fv.php">
                <p>Invoice Details</p>
            </a>
            <a class="clients_panel_aside--slot addresses" href="./clients-panel-addresses.php">
                <p>Shipping Address</p>
            </a>
        </aside>
    </div>
    <form class="clients_panel_fv_content__right">
        <h1 class="title">Invoice Details</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="company">Company Name</label>
                    <input type="text" name="company" id="company">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="street">Street</label>
                    <input type="text" name="street" id="street">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="nip">Tax ID</label>
                    <input type="number" name="nip" id="nip">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="zip">Postal Code</label>
                    <input type="text" name="zip" id="zip">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="city">City</label>
                    <input type="text" name="city" id="city">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <div class="full-green--btn">
                        <button>Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
