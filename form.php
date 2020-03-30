<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Chabad Food Fund</title>
  </head>
  <style>
      .bg-yellow {
        background: #fab338;
        color: white;
      }

      .bg-darkyellow{
        background: #E0A031;
      }

      #nav-title {
        letter-spacing: 3px;
      }

      .text-dark {
        color: black !important;
      }

      .text-dark a {
        color: black !important;
      }

      .nav-item:hover a {
        color: white !important;
      }

      .text-gray {
        /*color: #262625 !important;*/
        color: #212120 !important;
      }

      .font-weight-regular {
        font-weight: 350 !important;
      }

      .btn-no-radius {
        border-radius: 0px !important;
      }     }

      .nav-link {
        font-weight: 500 !important;
      }

      .font-weight-400 {
        font-weight: 400 !important;
      }

      .inline-margin{
        margin-right:.20rem;
      }

      /************
      *  NEW CSS  *
      ************/

      #volunteer_form input {
          border-radius: 0;
      }
  </style>
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
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-5" id="volunteer_form">
                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control" id="first_name" placeholder="First name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control" id="last_name" placeholder="Last name">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="date" name="" class="form-control" id="birthdate" placeholder="Date of birth">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="number" name="" class="form-control" id="phone_number" placeholder="Phone number">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="email" name="" class="form-control" id="email_address" placeholder="Email address">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <input type="text" name="" class="form-control" id="address_line1" placeholder="Address Line 1">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <input type="text" name="" class="form-control" id="address_line2" placeholder="Address Line 2">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="" class="form-control" id="city_town" placeholder="City / Town">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="" class="form-control" id="state" placeholder="State">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="number" name="" class="form-control" id="zip_code" placeholder="Zip code">
                    </div>
                </div>
                <div class="mt-5 mb-4">
                  <strong>Volunteer Availability:</strong>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Availability:
                  </div>
                  <!-- <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Year Round
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Seasonal
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Weekends
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Evenings
                    </label>
                  </div> -->
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Year Round</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Seasonal</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">Weekends</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline4">Evenings</label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Are you completing Community Services Hours?
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline5">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline6" name="customRadioInline2" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline6">No</label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Do you have any physical restrictions or special needs?
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline7" name="customRadioInline3" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline7">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline8" name="customRadioInline3" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline8">No</label>
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control" id="first_name" placeholder="Emergency Contact Name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control" id="last_name" placeholder="Emergency Contact Phone">
                    </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Are you interested in being an event team leader?
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline9" name="customRadioInline4" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline9">Yes</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline10" name="customRadioInline4" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline10">No</label>
                  </div>
                </div>

                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Upload Volunteer Profile Photo</label>
                </div>

                <div class="mt-5 mb-4">
                  <strong>Volunteer Skills:</strong>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Language:
                  </div>
                  <!-- <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Hebrew
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Yiddish
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      French
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Spanish
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Creole
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Ukrainian
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Russian
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Portuguese
                    </label>
                  </div> -->
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline11" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline11">Hebrew</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline12" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline12">Yiddish</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline13" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline13">French</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline14" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline14">Spanish</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline15" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline15">Creole</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline16" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline16">Ukrainian</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline17" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline17">Russian</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline18" name="customRadioInline5" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline18">Portuguese</label>
                  </div>
                </div>

                <div class="form-group mb-5">
                  <div class="form-check form-check-inline">
                    Other Skills:
                  </div>
                  <!-- <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Culinary Experience
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Teaching Experience
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Computer/Database
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" id="">
                    <label class="form-check-label" for="">
                      Public Speaking
                    </label>
                  </div> -->
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline19" name="customRadioInline6" class="custom-control-input ">
                    <label class="custom-control-label" for="customRadioInline19">Culinary Experience</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline20" name="customRadioInline6" class="custom-control-input ">
                    <label class="custom-control-label" for="customRadioInline20">Teaching Experience</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline21" name="customRadioInline6" class="custom-control-input ">
                    <label class="custom-control-label" for="customRadioInline21">Computer/Database</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline inline-margin">
                    <input type="radio" id="customRadioInline22" name="customRadioInline6" class="custom-control-input ">
                    <label class="custom-control-label" for="customRadioInline22">Public Speaking</label>
                  </div>
                </div>

                <a href="" class="btn btn-warning form-control">SUBMIT</a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>

        </div>
    </div>
    
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>