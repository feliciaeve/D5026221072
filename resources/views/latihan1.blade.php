<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .border {
            border: 1px solid #ccc;
        }
    </style>
</head>

<body class="bg-dark text-light">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn btn-outline-info btn-block">+ Add New Address</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="font-weight-bold col-12 py-2"> Payment Method</div>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3">
            <div class="col-2 p-2">
                <img src="kuliah/logo mastercard.png" width="50px" height="30px">
            </div>
            <div class="col-8 py-2">Mastercard</div>
            <div class="col-2 d-flex align-items-center justify-content-center">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customRadio1" name="paymentMethod" value="mastercard">
                    <label class="custom-control-label" for="customRadio1"></label>
                </div>
            </div>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3">
            <div class="col-2 p-2">
                <img src="kuliah/logo cod.png" width="50px" height="30px">
            </div>
            <div class="col-8 py-2"> Cash On Delivery</div>
            <div class="col-2 d-flex align-items-center justify-content-center">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="paymentMethod" value="cod">
                    <label class="custom-control-label" for="customRadio2"></label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn btn-outline-info btn-block">+ Add Payment Method</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="font-weight-bold col-12 py-2"> Order Summary</div>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3">
            <div class="col-12 p-2">
                <p>Special Platter</p>
                <p>Pepperoni Pizza</p>
                <p>Burger</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="font-weight-bold col-12 py-2"> Cost Summary</div>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3">
            <div class="col-12 p-2">
                <p>Shipping</p>
                <p>Item Total</p>
                <p>Total Payment</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn btn-info btn-block">Confirm Order</button>
            </div>
        </div>
    </div>
</body>

</html>
