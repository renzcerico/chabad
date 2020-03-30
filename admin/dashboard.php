<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChabadFoodFund</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-yellow p-4 fixed-top">
        <a class="h2 font-weight-bold text-uppercase text-white text-decoration-none" href="../index#" id="nav-title">Chabad<span class="text-dark">FoodFund</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="m-5 pt-5">
        <h1 class="mt-5 text-center">Dashboard </h1>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card card_api">
                    <div class="card-header text-center pt-3">
                    <h5> Authorize.net API </h5>
                    </div>
                    <div class="card-body p-5">
                        <form id="api_form">
                            <div class="form-group">
                                <label for="">Login ID</label>
                                <input type="text" class="form-control" id="login_id" placeholder="Enter Login ID">
                            </div>
                            <div class="form-group">
                                <label for="">Transaction Key</label>
                                <input type="text" class="form-control" id="trans_key" placeholder="Enter Transaction Key">
                            </div>
                            <span id="api_result"></span>
                            <a href="#" class="btn btn-warning btn-block mt-4 font-weight-bold" id="btn_api_update">Save</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card card_api">
                    <div class="card-header text-center pt-3">
                        <h5> Twilio Number</h5>
                    </div>
                    <div class="card-body p-5">
                        <form id="api_form">
                            <div class="form-group">
                                <label for="">Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter Number">
                            </div>
                            <span id="number_result"></span>
                            <a href="#" class="btn btn-warning btn-block mt-4 font-weight-bold" id="">Save</a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-yellow p-5" id="contact">
        <div class="text-center text-dark p-3">
              <h6 class="font-weight-400">Chabad Food Fund is a non for profit 501(c) (3) federally tax exempt charitable organization.</h6>
              <h6 class="font-weight-400">(Tax ID: 88-8888888)</h6>
              <h6 class="font-weight-400">Make Tax Deductible Donations Payable to: </h6>
              <h6 class="font-weight-400">CHABAD FOOD FUND 9500 NW 38th street coral springs, FL 33065</h6>
              <h6 class="font-weight-400">213-465-8288 <br />Chabadfoodfund@gmail.com</h6>
        </div>
    </div>
    <div class="container-fluid bg-darkyellow">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                <p class="text-gray font-weight-light text-center my-auto small">&copy; Copyright 2019. Chabad Food Fund.</p>
            </div>
        </div>
    </div>
    <script src="../bootstrap/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/popper.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
        $(() => {
            const updateAPI = () => {
                let login_id = $('#login_id').val(); // 37M2JhjV
                let trans_key = $('#trans_key').val(); // 7E23aWeq2rP6U4k2

                if (login_id  != '' && trans_key  != '') {
                    let json = {
                        login_id: login_id,
                        trans_key: trans_key
                    };

                    $.ajax({
                        url: '../php/authorize_update.php',
                        method: 'POST',
                        data: json,
                        success: (res) => {
                            apiResult(true);
                            $('#api_form').trigger('reset');
                        }
                    });
                } else {
                    apiResult(false);
                }
            };

            const apiResult = (status) => {
                $('#api_result').removeClass('text-success text-danger').html('');
                
                if (status == true) {
                    $('#api_result').addClass('text-success').html('API successfully updated.');
                } else {
                    $('#api_result').addClass('text-danger').html('Please complete the form.');
                }

                setTimeout(() => {
                    $('#api_result').removeClass('text-success text-danger').html('');
                }, 3000);
            };

            $(document).on('click', '#btn_api_update', () => {
                updateAPI();
            });
        })
    </script>
</body>
</html>