<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Main SmartWizard CSS -->
    <link href="smartwizard/css/smart_wizard.min.css" rel="stylesheet">

    <!-- Optional SmartWizard themes -->
    <link href="smartwizard/css/smart_wizard_theme_circles.min.css" rel="stylesheet">
    <link href="smartwizard/css/smart_wizard_theme_arrows.min.css" rel="stylesheet">
    <link href="smartwizard/css/smart_wizard_theme_dots.min.css" rel="stylesheet">
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
        <div class="row justify-content-center d-flex">
            <!-- <div class="col-sm-12 col-md-1 col-lg-1 col-xl-1"></div> -->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 pt-5 mt-5" >
              <div class="container mt-5 mb-5">
                <div id="smartwizard">
                  <ul class="justify-content-center d-flex mx-auto">
                    <!-- <li><a href="#step-1">Step 1<br /><small>Registration</small></a></li> -->
                    <li class="smartwizard-nav"><a href="#step-1">Step 1<br /><small>Personal Information</small></a></li>
                    <li class="smartwizard-nav"><a href="#step-2">Step 2<br /><small>Employment Information</small></a></li>
                    <li class="smartwizard-nav"><a href="#step-3">Step 3<br /><small>Government Assisstance</small></a></li>
                    <li class="smartwizard-nav"><a href="#step-4">Step 4<br /><small>Legal</small></a></li>
                  </ul>
                  <div>
                    <div id="step-1" class="m-5">
                      <h4  class="mb-5"><u>Personal Information</u></h4>
                      <div>
                        <form>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Applicant Name:</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="applicant_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="applicant_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="number" class="form-control sm-mb" id="applicant_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Spouse Name:</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="spouse_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="spouse_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="number" class="form-control sm-mb" id="spouse_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Address:</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control sm-mb" id="address" placeholder="Address">
                            </div>
                            <div class="col-sm-4">
                              <input type="text" class="form-control sm-mb" id="apt" placeholder="Apt">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="city" placeholder="City">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="state" placeholder="State">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb" id="zip_code" placeholder="Zip">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <label>House:</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="house_yes" name="house" value="yes">
                                <label class="form-check-label" for="house_yes">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="house_no" name="house" value="no">
                                <label class="form-check-label" for="house_no">
                                  No
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <label>Apartment:</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="apartment_yes" name="apartment" value="yes">
                                <label class="form-check-label" for="apartment_yes">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="apartment_no" name="apartment" value="no">
                                <label class="form-check-label" for="apartment_no">
                                  No
                                </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="rent" name="rent_own" value="rent">
                                <label class="form-check-label" for="rent">
                                  Rent
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="own" name="rent_own" value="own">
                                <label class="form-check-label" for="rent">
                                  Own
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">How many bedrooms? </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control sm-mb" id="bedrooms" placeholder="How many bedrooms?">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Email Address: </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control sm-mb" id="email_address" placeholder="Email Address">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Home Number: </label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control sm-mb" id="home_number" placeholder="Home Number">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Cell Phone (Mother)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control sm-mb" id="mother_number" placeholder="Cell Phone (Mother)">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Cell Phone (Father)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control sm-mb" id="father_number" placeholder="Cell Phone (Father)">
                            </div>
                          </div>
                          <div class="form-group row mt-5">
                            <div class="col-sm-3">
                              <div class="form-check form-check-inline">
                                <label>Marriage Status:</label>
                              </div>
                            </div>
                            <div class="col-sm-9">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_single" name="marraige_status" value="single">
                                <label class="form-check-label" for="status_single">
                                  Single
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_married" name="marraige_status" value="married">
                                <label class="form-check-label" for="status_married">
                                  Married
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_widow" name="marraige_status" value="widow">
                                <label class="form-check-label" for="status_widow">
                                  Widow
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_widow_with_child" name="marraige_status" value="widow with children">
                                <label class="form-check-label" for="status_widow_with_child">
                                  Widow with children
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_divorced" name="marraige_status" value="divorced">
                                <label class="form-check-label" for="status_divorced">
                                  Divorced
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_divorced_with_child" name="marraige_status" value="divorced with children">
                                <label class="form-check-label" for="status_divorced_with_child">
                                  Divorced with children
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_separated" name="marraige_status" value="separated">
                                <label class="form-check-label" for="status_separated">
                                  Separated
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input marriage_status" type="radio" id="status_separated_with_child" name="marraige_status" value="separated with children">
                                <label class="form-check-label" for="status_separated_with_child">
                                  Separated with children
                                </label>
                              </div>
                            </div>
                          </div>

                          <h6>Children</h6> 
                          <button class="btn btn-primary" id="btnAddChildren">Add Another</button>
                          <div class="form-group row mt-5 children-row">
                            <label for="" class="col-sm-1 col-form-label">1.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">2.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">3.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">4.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">5.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">6.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">7.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">8.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">9.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">10.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">11.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>
                          <div class="form-group row children-row">
                            <label for="" class="col-sm-1 col-form-label">12.</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control sm-mb child_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control sm-mb child_school" placeholder="School">
                            </div>
                            <div class="col-sm-2">
                              <input type="number" class="form-control sm-mb child_age" placeholder="Age">
                            </div>
                          </div>

                          <h6 class=" mt-5">How can you give back? Please list skills you may have. </h6>
                          <div class="form-group mt-4">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Handyman">
                              <label class="form-check-label" for="skills">
                                Handyman
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Electrician">
                              <label class="form-check-label" for="skills">
                                Electrician
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Roofer">
                              <label class="form-check-label" for="skills">
                                Roofer
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Plumber">
                              <label class="form-check-label" for="skills">
                                Plumber
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Computer Programmer">
                              <label class="form-check-label" for="skills">
                                Computer Programmer
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Writer">
                              <label class="form-check-label" for="skills">
                                Writer
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Writer">
                              <label class="form-check-label" for="skills">
                                Event Planner
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="IT Skills">
                              <label class="form-check-label" for="skills">
                                IT Skills
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Graphic Designer">
                              <label class="form-check-label" for="skills">
                                Graphic Designer
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input skills" type="checkbox" value="Bookkeeper">
                              <label class="form-check-label" for="skills">
                                Bookkeeper
                              </label>
                            </div>
                          </div>
                          <div class="form-group row mt-4">
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="">
                                  Tutor (Please specify subject.) 
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="text" class="form-control sm-mb skills" id="tutor" placeholder="Subject" >
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="">
                                  Driver (Bus, truck) 
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="text" class="form-control sm-mb skills" id="driver" placeholder="Driver">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="">
                                  Other
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="text" class="form-control sm-mb skills" id="other_skills" placeholder="Other">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div id="step-2" class="m-5">
                      <h4  class="mb-5"><u>Employment Information</u></h4>
                      <div>
                        <form>
                          <div class="form-row">
                            <div class="form-group col-sm-4">
                              <label for="">Type of Work</label>
                              <input type="text" class="form-control sm-mb" id="work_type" placeholder="Type of Work">
                            </div>
                            <div class="form-group col-sm-5">
                              <label for="">Employer</label>
                              <input type="text" class="form-control sm-mb" id="employer" placeholder="Employer">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Years on Job</label>
                              <input type="text" class="form-control sm-mb" id="work_years" placeholder="Years on Job">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-3">
                              <label for="">Work Address</label>
                              <input type="text" class="form-control sm-mb" id="work_address" placeholder="Work Address">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">City</label>
                              <input type="text" class="form-control sm-mb" id="work_city" placeholder="City">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Zip</label>
                              <input type="text" class="form-control sm-mb" id="work_zip" placeholder="Zip">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Number</label>
                              <input type="text" class="form-control sm-mb" id="work_number" placeholder="Number">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Monthly Salary</label>
                              <input type="text" class="form-control sm-mb" id="monthly_salary" placeholder="Monthly Salary">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Hourly income</label>
                              <input type="text" class="form-control sm-mb" id="hourly_income" placeholder="Hourly income">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12">
                              <label for="">If currently not employed: </label>
                              <input type="text" class="form-control sm-mb" id="reason_unemployment" placeholder="Reason for unemployment">
                            </div>
                          </div> 
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Not employed since:</label>
                              <input type="text" class="form-control sm-mb" id="unemployed_since" placeholder="Not employed since">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Last job interview date:</label>
                              <input type="text" class="form-control sm-mb" id="last_job_interview" placeholder="Last job interview date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-3">
                              <div class="form-check form-check-inline">
                                <label>Do you have a: Car </label>
                              </div>
                            </div>
                            <div class="col-sm-9">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="car_yes" class="own_car" value="yes">
                                <label class="form-check-label" for="car_yes">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="car_no" class="own_car" value="no">
                                <label class="form-check-label" for="car_no">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>

                          <!-- <h4  class="mb-5 mt-5 pt-5"><u>Employment Information (Female)</u></h4>

                          <div class="form-row">
                            <div class="form-group col-sm-4">
                              <label for="">Type of Work</label>
                              <input type="text" class="form-control sm-mb" placeholder="Type of Work">
                            </div>
                            <div class="form-group col-sm-5">
                              <label for="">Employer</label>
                              <input type="text" class="form-control sm-mb" placeholder="Employer">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Years on Job</label>
                              <input type="text" class="form-control sm-mb" placeholder="Years on Job">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-3">
                              <label for="">Work Address</label>
                              <input type="text" class="form-control sm-mb" placeholder="Work Address">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">City</label>
                              <input type="text" class="form-control sm-mb" placeholder="City">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Zip</label>
                              <input type="text" class="form-control sm-mb" placeholder="Zip">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Number</label>
                              <input type="text" class="form-control sm-mb" placeholder="Number">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Monthly Salary</label>
                              <input type="text" class="form-control sm-mb" placeholder="Monthly Salary">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Hourly income</label>
                              <input type="text" class="form-control sm-mb" placeholder="Hourly income">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12">
                              <label for="">If currently not employed: </label>
                              <input type="text" class="form-control sm-mb" placeholder="Reason for unemployment">
                            </div>
                          </div> 
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Not employed since:</label>
                              <input type="text" class="form-control sm-mb" placeholder="Not employed since">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Last job interview date:</label>
                              <input type="text" class="form-control sm-mb" placeholder="Last job interview date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-3">
                              <div class="form-check form-check-inline">
                                <label>Do you have a: Car </label>
                              </div>
                            </div>
                            <div class="col-sm-9">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="">
                                  No
                                </label>
                              </div>
                            </div>
                          </div> -->

                          <h4  class="mb-5 mt-5 pt-5">Others living with you and earning an income </h4>

                          <div class="form-row">
                            <div class="form-group col-sm-4">
                              <label for="">Type of Work</label>
                              <input type="text" class="form-control sm-mb" id="other_work_type" placeholder="Type of Work">
                            </div>
                            <div class="form-group col-sm-5">
                              <label for="">Employer</label>
                              <input type="text" class="form-control sm-mb" id="other_employer" placeholder="Employer">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Years on Job</label>
                              <input type="text" class="form-control sm-mb" id="other_work_years" placeholder="Years on Job">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-3">
                              <label for="">Work Address</label>
                              <input type="text" class="form-control sm-mb" id="other_work_address" placeholder="Work Address">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">City</label>
                              <input type="text" class="form-control sm-mb" id="other_city" placeholder="City">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Zip</label>
                              <input type="text" class="form-control sm-mb" id="other_zip" placeholder="Zip">
                            </div>
                            <div class="form-group col-sm-3">
                              <label for="">Number</label>
                              <input type="text" class="form-control sm-mb" id="other_number" placeholder="Number">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Monthly Salary</label>
                              <input type="text" class="form-control sm-mb" id="other_monthly_salary" placeholder="Monthly Salary">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Hourly income</label>
                              <input type="text" class="form-control sm-mb" id="other_monthly_income" placeholder="Hourly income">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12">
                              <label for="">If currently not employed: </label>
                              <input type="text" class="form-control sm-mb" id="other_unemployment_reason" placeholder="Reason for unemployment">
                            </div>
                          </div> 
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Not employed since:</label>
                              <input type="text" class="form-control sm-mb" id="other_unemployed_since" placeholder="Not employed since">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Last job interview date:</label>
                              <input type="text" class="form-control sm-mb" id="other_last_job_interview" placeholder="Last job interview date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-3">
                              <div class="form-check form-check-inline">
                                <label>Do you have a: Car </label>
                              </div>
                            </div>
                            <div class="col-sm-9">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="other_car_yes" name="other_car" value="yes">
                                <label class="form-check-label" for="other_car_yes">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="other_car_no" name="other_car" value="no">
                                <label class="form-check-label" for="other_car_no">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>

                          <div class="form-group row mt-5">
                            <div class="col-sm-6">
                              <div class="form-check form-check-inline">
                                <label>Do you have any other sources of income? </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="other_income_yes" name="sources_income" value="yes">
                                <label class="form-check-label" for="other_income_yes">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="other_income_no" name="sources_income" value="no">
                                <label class="form-check-label" for="other_income_no">
                                  No
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="text" class="form-control sm-mb" id="sources_income" placeholder="If yes, please specify">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row ">
                            <div class="col-sm-6">
                              <div class="form-check form-check-inline">
                                <label>Do you have money invested in real estate, stocks, etc.?  </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="investment_yes" name="investment" value="yes">
                                <label class="form-check-label" for="">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="investment_no" name="investment" value="no">
                                <label class="form-check-label" for="">
                                  No
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input type="text" class="form-control sm-mb" id="investment" placeholder="If yes, please specify">
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="">Total Savings:</label>
                              <input type="text" class="form-control sm-mb" id="total_saving" placeholder="$">
                            </div>
                            <div class="form-group col-sm-6">
                              <label for="">Total Currently in your Checking Account:</label>
                              <input type="text" class="form-control sm-mb" id="total_checking" placeholder="$">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div id="step-3" class="m-5">
                      <h4  class="mb-5"><u>Government Assistance </u></h4>
                      <div>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Welfare:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="welfare" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Food Stamps:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="food_stamps" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Medicaid:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="medicaid" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Medicare:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="medicare" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">SSI:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="ssi" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">HUD:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="hud" placeholder="$">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">WIC:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="wic" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Section 8:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="section_8" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">City Feps:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="city_feps" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">IHSS:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="ihss" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Other:</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control sm-mb" id="government_other" placeholder="$">
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <h4 class="mt-5 mb-5"><u>Expenses: <span class="font-weight-light">Please list monthly expense</span></u></h4>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Rent/Mortgage:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="rent_mortgage" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Clothing:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="clothing" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Gas Company:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="gas_company" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Medical Insurance:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="medical_insurance" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Life Insurance:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="life_insurance" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Car Payments:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="car_payment" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Car Insurance:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="car_insurance" placeholder="$">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Water Bill:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="water_bill" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Electrical Bill:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="electrtical_bill" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">DSL/Cable:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="dsl_cable" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Tuition:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="tuition" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Home Maintenance:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="home_maintenance" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Misc:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="misc" placeholder="$">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-sm-6 col-form-label">Total Monthly Expenses:</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control sm-mb" id="monthly_expenses" placeholder="$">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-row mt-5">
                            <div class="form-group col-sm-12">
                              <label for="">If there is a gap between your income and expenses, how has that been covered until now? </label>
                              <textarea class="form-control sm-mb" id="gap_description" rows="3" placeholder="Please explain"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-5">
                              <div class="form-check form-check-inline">
                                <label>Do you need financial counseling? </label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="counseling_yes" name="financial_counseling" value="yes">
                                <label class="form-check-label" for="">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="counseling_no" name="financial_counseling" value="no">
                                <label class="form-check-label" for="">
                                  No
                                </label>
                              </div>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                    <div id="step-4" class="m-5">
                      <h4  class="mb-5"><u></u> </h4>
                      <div>
                        <div class="text-justify mb-5">
                          <p>
                            By submitting this application, the applicant and his respective family members relinquish the right to take any legal recourse against Chabad Food Fund. Submitting an application and substantiating documentation is not a guarantee that services will be provided. Though Chabad Food Fund will attempt to help all individuals, in need of kosher food, in the case of limited resource, the organization will prioritize candidates based on need and first come –first serve basis.
                          </p>
                          <p>
                            By applying to Chabad Food Fund, it is understood that the program is supported with community funds. Willful misrepresentation of the family or financial situation may disqualify persons from the program. It may be required to return all funds distributed if it has been demonstrated that the funds were distributed under fraudulent intent.
                          </p>
                          <p class="text-center">
                            Upon approval, someone from our office will get back to you regarding Chabad Food Fund program
                          </p>
                          <a href="#" class="btn btn-warning form-control  sm-mbfont-weight-bold mt-5" id="submitApplication">SUBMIT</a>
                      </div>
<!--                       <div class="mb-5">
                          <form>
                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Name of Applicant:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Name of Applicant">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Applicant’s Signature:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Applicant’s Signature">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Date:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Date">
                              </div>
                            </div>

                            <br><br>

                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Name of Applicant’s Spouse:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Name of Applicant’s Spouse ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Applicant’s Spouse’s Signature:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Applicant’s Spouse’s Signature">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="" class="col-sm-6 col-form-label">Date:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control sm-mb" placeholder="Date">
                              </div>
                            </div>
                          <a href="#" class="btn btn-warning form-control  sm-mbfont-weight-bold mt-5">SUBMIT</a>
                          </form>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- <div class="col-sm-12 col-md-1 col-lg-1 col-xl-1"></div> -->
        </div>
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
    <script src="bootstrap/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="smartwizard/js/jquery.smartWizard.min.js"></script>
    <script type="text/javascript">
      $('.children-row:not(:eq(0))').attr('hidden', true);

      $(document).on('click', '#btnAddChildren', (e) => {
          let count = 0;
          $('.children-row').each(function(index){
            let isHidden = $(this).attr('hidden') || 1;

            if (isHidden === 1) {
              count = count + 1;
            }
          });

          $('.children-row:eq('+count+')').attr('hidden', false);

          return false;
      });

      $('#smartwizard').smartWizard({
        theme: 'circles',
        transitionEffect: 'fade',

        // theme: 'circles',
        // theme: 'dots',
        // transitionEffect: 'slide',
        transitionSpeed: 400
      });



      // NOTE REFERENCE ONLY
      $('#smartwizard1').smartWizard({

        // Initial selected step, 0 = first step 
        selected: 0,  

        // keyboard navigation
        // key<a href="https://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a>:true, 

        // Automatically adjust content height
        autoAdjustHeight:true, 

        // Allows to cycle the navigation of steps
        cycleSteps: false, 

        // Enable the back button support
        backButtonSupport: true, 

        // Enable selection of the step based on url hash
        useURLhash: true, 

        // Show url hash based on step 
        showStepURLhash: true, 

        // Language variables
        lang: {  
            next: 'Next', 
            previous: 'Previous'
        },

        // step bar options
        toolbarSettings: {
          toolbarPosition: 'bottom', // none, top, bottom, both
          toolbarButtonPosition: 'right', // left, right
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          toolbarExtraButtons: []
        }, 


        // anchor options
        anchorSettings: {
          anchorClickable: true, // Enable/Disable anchor navigation
          enableAllAnchors: false, // Activates all anchors clickable all times
          markDoneStep: true, // add done css
          markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
          removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
          enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },     

        // content url, Enables Ajax content loading. can set as data data-content-url on anchor
        contentURL: null, 

        // Array of disabled Steps
        disabledSteps: [],    

        // Highlight step with errors
        errorSteps: [],    

        // Hidden steps
        hiddenSteps: [], 

        // theme
        theme: 'arrows',

        // Effect on navigation, none/slide/fade
        transitionEffect: 'none', 

        // transition speed in ms
        transitionSpeed: '400'
        
      });

      // Triggers when leaving a step.
      // $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber) {
      //   return confirm("Do you want to leave the step "+stepNumber+"?");
      // });

      // Triggers when showing a step.
      // $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber) {
      //   alert("You are on step "+stepNumber+" now");
      // });

      const familyApplication = () => {
        const applicantFirstName = $('#applicant_first_name').val() || null;
        const applicantLastName = $('#applicant_last_name').val() || null;
        const applicantAge = $('#applicant_age').val() || null;
        const spouseFirstName = $('#spouse_first_name').val() || null;
        const spouseLastName = $('#spouse_last_name').val() || null;
        const spouseAge = $('#spouse_age').val() || null;
        const address = $('#address').val() || null;
        const apt = $('#apt').val() || null;
        const city = $('#city').val() || null;
        const state = $('#state').val() || null;
        const zipCode = $('#zip_code').val() || null;

        let house;
        let apartment;
        let isRent;

        $('#house_yes:checked').length > 0 ? house = true : house = false;
        $('#apartment_yes:checked').length > 0 ? apartment = true : apartment = false;
        $('#rent:checked').length > 0 ? isRent = true : isRent = false;

        const bedrooms = $('#bedrooms').val() || null;
        const emailAddress = $('#email_address').val() || null;
        const homeNumber = $('#home_number').val() || null;
        const motherNumber = $('#mother_number').val() || null;
        const fatherNumber = $('#father_number').val() || null;
        const marriageStatus = $('.marriage_status:checked').val() || null;

        const childrenArray = [];

        $('.children-row').each(function(index) {
          const isHidden = $(this).attr('hidden') || 1;
          if (isHidden === 1) {
            const childFirstName = $('.children-row').eq(index).find('.child_first_name').val() || null;
            const childLastName = $('.children-row').eq(index).find('.child_last_name').val() || null;
            const childMiddleName = $('.children-row').eq(index).find('.child_middle_name').val() || null;
            const childSchool = $('.children-row').eq(index).find('.child_school').val() || null;
            const childAge = $('.children-row').eq(index).find('.child_age').val() || null;

            const json = {
              childFirstName,
              childLastName,
              childMiddleName,
              childSchool,
              childAge
            };

            if (childFirstName) {
              childrenArray.push(json);
            }
          }
        });

        let skillsArray = [];
        const skillsCount = $('.skills:checked').length;

        for (let x = 0; x < skillsCount; x++) {
          const skills = $('.skills:checked').eq(x).val();
          skillsArray.push(skills);
        }

        const tutor = $('#tutor').val() || null;
        const driver = $('#driver').val() || null;
        const otherSkills = $('#other_skills').val() || null;
        skillsArray.length > 0 ? false : skillsArray = [0];

        // PERSONAL INFORMATION
        const personalInformation = {
            applicantFirstName,
            applicantLastName,
            applicantAge,
            spouseFirstName,
            spouseLastName,
            spouseAge,
            address,
            apt,
            city,
            state,
            zipCode,
            house,
            apartment,
            isRent,
            bedrooms,
            emailAddress,
            homeNumber,
            motherNumber,
            fatherNumber,
            marriageStatus,
            childrenArray,
            skillsArray,
            tutor,
            driver,
            otherSkills
        };

        // console.log(personalInformation);

        // EMPLOYMENT INFORMATION
        const workType = $('#work_type').val() || null;
        const employer = $('#employer').val() || null;
        const workYears = $('#work_years').val() || null;
        const workAddress = $('#word_address').val() || null;
        const workCity = $('#work_city').val() || null;
        const workZip = $('#work_zip').val() || null;
        const workNumber = $('#work_number').val() || null;
        const monthlySalary = $('#monthly_salary').val() || null;
        const hourlyIncome = $('#hourly_income').val() || null;
        const reasonUnemployment = $('#reason_unemployment').val() || null;
        const unemployedSince = $('#unemployed_since').val() || null;
        const lastJobInterview = $('#last_job_interview').val() || null;
        let hasCar;

        $('#car_no:checked').length > 0 ? hasCar = true : hasCar = false;

        const otherWorkType = $('#other_work_type').val() || null;
        const otherEmployer = $('#other_employer').val() || null;
        const otherWorkYear = $('#other_work_years').val() || null;
        const otherWorkAddress = $('#other_work_address').val() || null;
        const otherCity = $('#other_city').val() || null;
        const otherZip = $('#other_zip').val() || null;
        const otherNumber = $('#other_number').val() || null;
        const otherMonthlySalary = $('#other_monthly_salary').val() || null;
        const otherMonthlyIncome = $('#other_monthly_income').val() || null;
        const otherEmploymentReason = $('#other_unemployment_reason').val() || null;
        const otherUnemployedSince = $('#other_unemployed_since').val() || null;
        const otherLastInterview = $('#other_last_job_interview').val() || null;
        let otherHasCar;
        
        $('#other_car_yes:checked').length > 0 ? otherHasCar = true : otherHasCar = false;
        
        const otherSourcesIncome = $('#sources_income').val() || null;
        const otherInvestment = $('#investment').val() || null;
        const totalSaving = $('#total_saving').val();
        const totalChecking = $('#total_checking').val();

        const employmentInformation = {
            workType,
            employer,
            workYears,
            workAddress,
            workCity,
            workZip,
            workNumber,
            monthlySalary,
            hourlyIncome,
            reasonUnemployment,
            unemployedSince,
            lastJobInterview,
            hasCar,
            otherWorkType,
            otherEmployer,
            otherWorkYear,
            otherWorkAddress,
            otherCity,
            otherZip,
            otherNumber,
            otherMonthlySalary,
            otherMonthlyIncome,
            otherEmploymentReason,
            otherLastInterview,
            otherHasCar,
            otherSourcesIncome,
            otherInvestment,
            totalSaving,
            totalChecking
        };

        // console.log(employmentInformation);

        // GOVERNMENT ASSISTANCE
        const welfare = $('#welfare').val() || null;
        const wic = $('#wic').val() || null;
        const foodStamps = $('#food_stamps').val() || null;
        const section8 = $('#section_8').val() || null;
        const medicAid = $('#medicaid').val() || null;
        const cityFeps = $('#city_feps').val() || null;
        const medicare = $('#medicare').val() || null;
        const ihss = $('#ihss').val() || null;
        const ssi = $('#ssi').val() || null;
        const governmentOther = $('#government_other').val() || null;
        const hud = $('#hud').val() || null;
        const rentMortgage = $('#rent_mortgage').val() || null;
        const waterBill = $('#water_bill').val() || null;
        const clothing = $('#clothing').val() || null;
        const electricalBill = $('#electrical_bill').val() || null;
        const gasCompany = $('#gas_company').val() || null;
        const dsl = $('#dsl_cable').val() || null;
        const medicalInsurance = $('#medical_insurance').val() || null;
        const tuition = $('#tuition').val() || null;
        const lifeInsurance = $('#life_insurance').val() || null;
        const homeMaintenance = $('#home_maintenance').val() || null;
        const carPayments = $('#car_payment').val() || null;
        const misc = $('#misc').val() || null;
        const carInsurance = $('#car_insurance').val() || null;
        const monthlyExpenses = $('#monthly_expenses').val() || null;
        const gapDescription = $('#gap_description').val() || null;
        let counseling;

        $('#counseling_yes:checked').length > 0 ? counseling = true : counseling = false;

        const governmentAssistance = {
            welfare,
            wic,
            foodStamps,
            section8,
            medicAid,
            cityFeps,
            medicare,
            ihss,
            ssi,
            governmentOther,
            hud,
            rentMortgage,
            waterBill,
            clothing,
            electricalBill,
            gasCompany,
            dsl,
            medicalInsurance,
            tuition,
            lifeInsurance,
            homeMaintenance,
            carPayments,
            misc,
            carInsurance,
            monthlyExpenses,
            gapDescription,
            counseling
        };

        // console.log(governmentAssistance);
        
        const assistanceDetails = {
          personalInformation,
          employmentInformation,
          governmentAssistance
        };

        // console.log(assistanceDetails);

        $.ajax({
            url: 'php/family_assistance_insert.php',
            type: 'POST',
            data: assistanceDetails,
            success: (res) => {
                console.log(res);
                $.ajax({
                  url: 'assistance_sms.php',
                  type: 'POST',
                  data: assistanceDetails,
                  success: (res) => {
                    console.log(res);
                  }
              });
            }
        });
      };

      $(document).on('click', '#submitApplication', () => familyApplication());
    </script>
  </body>
</html>