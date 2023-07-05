<?php
include '../config/config.php';



include '../header/header.php';
include '../navbar/navbar.php';

?>

<div class="row ms-2 me-2">
    <div class="col-md-8 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-4">Billing address</h2>
                        <label for="text" class="form-label">Full Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" id="username" idaria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">E mail</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Email" id=email name="email" aria-label="email" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">Address</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-address-card"></i></span>
                            <input type="text" class="form-control" placeholder="address" id="address" name="address" aria-label="address" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">City</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-city"></i></span>
                            <input type="text" class="form-control" placeholder="city" id="city" name="city" aria-label="city" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="text" class="form-label">State</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="state" name="state" aria-label="state" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="form-label">Zip</label>
                                <div class="input-group mb-3">
                                    <input type="city" class="form-control" id="zip" name="zip" aria-label="zip" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switch" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Shipping Address same as billing</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Payment</h2>
                        <label for="text" class="form-label">Accepted Cards</label>
                        <div class="mt-3 mb-3">
                            <a href="#"><i class="fa-brands fa-google-pay"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-visa"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-discover"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-amex"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-mastercard"></i></a>
                        </div>
                        <label for="text" class="form-label">Name on card</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="card" id="card" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Credit Card Number</label>
                        <div class="input-group mb-3">
                            <input type="tel" class="form-control" name="credit" id="credit" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Exp month</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="month" id="month" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Exp Year</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="year" id="year" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                    </div>
                    <button type="submit" id="checkout" class="btn btn-success mt-3" required>Continue to checkout</button>
                </div>   
                </form>
               
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-8 col-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="float-start">Cart</h3>

                    </div>
                    <div class="col-md-6">
                        <span class="float-end me-2"> <i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row ms-2 me-2 mt-4" id="shipping_address">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-4">Shipping address</h2>
                        <label for="text" class="form-label">Full Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" id="username" idaria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">E mail</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="Email" id=email name="email" aria-label="email" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">Address</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-address-card"></i></span>
                            <input type="text" class="form-control" placeholder="address" id="address" name="address" aria-label="address" aria-describedby="basic-addon1" required>
                        </div>
                        <label for="text" class="form-label">City</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-city"></i></span>
                            <input type="text" class="form-control" placeholder="city" id="city" name="city" aria-label="city" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="text" class="form-label">State</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="state" name="state" aria-label="state" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="form-label">Zip</label>
                                <div class="input-group mb-3">
                                    <input type="city" class="form-control" id="zip" name="zip" aria-label="zip" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="switch" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Shipping Address same as billing</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="mb-4">Payment</h2>
                        <label for="text" class="form-label">Accepted Cards</label>
                        <div class="mt-3 mb-3">
                            <a href="#"><i class="fa-brands fa-google-pay"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-visa"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-discover"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-amex"></i></a>
                            <a href="#"><i class="fa-brands fa-cc-mastercard"></i></a>
                        </div>
                        <label for="text" class="form-label">Name on card</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="card" id="card" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Credit Card Number</label>
                        <div class="input-group mb-3">
                            <input type="tel" class="form-control" name="credit" id="credit" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Exp month</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="month" id="month" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                        <label for="text" class="form-label">Exp Year</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="year" id="year" aria-label="state" aria-describedby="basic-addon1"required>
                        </div>
                    </div>
                    <button type="submit" id="checkout" class="btn btn-success mt-3" required>Continue to checkout</button>
                </div>   
                </form>
               
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="float-start">Cart</h3>

                    </div>
                    <div class="col-md-6">
                        <span class="float-end me-2"> <i class="fa-solid fa-cart-shopping"></i></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>








<?php
include '../footer/footer.php';
?>