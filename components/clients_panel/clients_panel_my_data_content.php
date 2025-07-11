<div class="clients_panel_my_data_content">
    <div class="clients_panel_my_data_content__left">
        <aside class="clients_panel_aside">
            <p class="clients_panel_aside--title">Hello!<br><span>Jan Kowalski</span></p>
            <a class="clients_panel_aside--slot orders" href="./clients-panel-orders.php">
                <p>Orders</p>
            </a>
            <a class="clients_panel_aside--slot data active" href="./clients-panel-my-data.php">
                <p>Your Data</p>
            </a>
            <a class="clients_panel_aside--slot fv" href="./clients-panel-fv.php">
                <p>Invoice Data</p>
            </a>
            <a class="clients_panel_aside--slot addresses" href="./clients-panel-addresses.php">
                <p>Shipping Address</p>
            </a>
        </aside>
    </div>
    <form class="clients_panel_my_data_content__right">
        <h1 class="title">Personal Data</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="name">First Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="surname">Last Name</label>
                    <input type="text" name="surname" id="surname">
                </div>
            </div>
        </div>
        <h1 class="title">Login Data</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="email">Email Address</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="password">Current Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-slot confirm-new-pass">
                    <label class="label-slot" for="confirm_new_password">Confirm New Password</label>
                    <input type="password" name="confirm_new_password" id="confirm_new_password">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot pass-btn">
                    <div class="full-green--btn">
                        <button>Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
