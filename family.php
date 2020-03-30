<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Chabad Food Fund</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-yellow p-4 fixed-top">
        <a class="h2 font-weight-bold text-uppercase text-white text-decoration-none" href="index" id="nav-title">Chabad<span class="text-dark">FoodFund</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase text-dark ">
                <li class="nav-item active pr-2 pl-2">
                    <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="about">About</a>
                </li>
                <!-- <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="#services">Services</a>
                </li> -->
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="application">Applications</a>
                </li>
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="contact">Contact Us</a>
                </li>
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="donation.html">Donate</a>
                    <!-- https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZS38LRZ5CTJNG&source=url -->
                </li> 
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-5">
                <form id="family_form">
                    <div class="text-justify">
                      <h5>
                        Family
                      </h5> 
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" name="" class="form-control" id="first_name" placeholder="First name">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <input type="text" name="" class="form-control" id="last_name" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" name="" class="form-control" id="address_line1" placeholder="Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <input type="number" name="" class="form-control" id="phone_number" placeholder="Phone number">
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <input type="number" name="" class="form-control" id="adults" placeholder="How many adults?">
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <input type="number" name="" class="form-control" id="children" placeholder="How many children?">
                        </div>
                    </div>
                    <span id="result_family" class="font-weight-bold"></span>
                    <a href="#" class="btn btn-warning form-control font-weight-bold" id="btn_submit_family">SUBMIT</a>
                </form>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>
<!-- 
-Needy
*Name
*Address
*Phone number
*How many adults
*How many children
*Create a code for each family
*Data for everytime someone gets stuff 

-Donors
*Name
*Address
*Birthday
*Donation
*List of donations
*Recurring donation
*Letter : send thank you via email, with option to choose which letter
--> 
    <div class="container-fluid bg-yellow p-5" id="contact">
        <div class="text-center text-dark p-3">
              <h6 class="font-weight-400">Chabad Food Fund is a non for profit 501(c)3 federally tax exempt charitable organization.</h6>
              <h6 class="font-weight-400">(Tax ID: 88-8888888)</h6>
              <h6 class="font-weight-400">Make Tax Deductible Donations Payable to: </h6>
              <h6 class="font-weight-400">CHABAD FOOD FUND 9500 NW 38th street coral springs, FL 33065</h6>
              <h6 class="font-weight-400"><i class="fas fa-phone"></i> &nbsp;213-465-8288 &nbsp;&nbsp;&nbsp;<i class="fas fa-envelope"></i>&nbsp; Chabadfoodfund@gmail.com</h6>
        </div>
    </div>
    <div class="container-fluid bg-darkyellow">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                <p class="text-gray font-weight-light text-center my-auto small">&copy; Copyright 2019. Chabad Food Fund | Developed by Kirshy Media Inc.</p>
            </div>
        </div>
    </div>
<script src="bootstrap/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
$(() => {

    // Validation and saving of family form.
    const familyForm = () => {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let address = $('#address_line1').val();
        let phone_number = $('#phone_number').val();
        let adults = $('#adults').val();
        let children = $('#children').val();

        let json = {
            first_name: first_name,
            last_name: last_name,
            address: address,
            phone_number: phone_number,
            adults: adults,
            children: children
        };

        if (first_name != '' && last_name != '' && address != '' && adults != '' && children != '') {
          savingFamily(json);
        } else {
          resultFamily(false);
        }
    };

    // Family form saving
    const savingFamily = (json) => {
        $.ajax({
            url: 'php/family_insert.php',
            type: 'POST',
            data: json,
            success: (res) => {
                resultFamily(true);
                $('#family_form').trigger('reset');
            }
        });
    };

    // Message when submitting a family form.
    const resultFamily = (status) => {
        $('#result_family').removeClass('text-success text-danger').html('');
        
        if (status == true) {
          $('#result_family').addClass('text-success').html('You have successfully added a family.');
        } else {
          $('#result_family').addClass('text-danger').html('Please complete the form.');
        }

        setTimeout(() => {
            $('#result_family').removeClass('text-success text-danger').html('');
        }, 3000);
    };

    // Submit Family form button click.
    $(document).on('click', '#btn_submit_family', () => familyForm());
});
</script>
</body>
</html>