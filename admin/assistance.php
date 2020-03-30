<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- Main SmartWizard CSS -->
    <link href="../smartwizard/css/smart_wizard.min.css" rel="stylesheet">

    <!-- Optional SmartWizard themes -->
    <link href="../smartwizard/css/smart_wizard_theme_circles.min.css" rel="stylesheet">
    <link href="../smartwizard/css/smart_wizard_theme_arrows.min.css" rel="stylesheet">
    <link href="../smartwizard/css/smart_wizard_theme_dots.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="#" id="btnPrint"> Print</a>
                </li>
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="family-assistance.php">Back to menu</a>
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
                          <!-- <button class="btn btn-primary" id="btnAddChildren">Add Another</button> -->
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
                                <input class="form-check-input" type="checkbox" id="tutor_cb">
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
                                <input class="form-check-input" type="checkbox" id="driver_cb">
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
                                <input class="form-check-input" type="checkbox" id="other_cb">
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
    
    <div class="container-fluid bg-darkyellow">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                <p class="text-gray font-weight-light text-center my-auto small">&copy; Copyright 2019. Chabad Food Fund | Developed by Kirshy Media Inc.</p>
            </div>
        </div>
    </div>
    <script src="../bootstrap/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/popper.min.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../smartwizard/js/jquery.smartWizard.min.js"></script>
    <script type="text/javascript">
      $('.children-row:not(:eq(0))').attr('hidden', true);

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

      const assistance = () => {
        let url = window.location.href;
        url = new URL(url);
        const params = new URLSearchParams(url.search);
        const id = params.get('id');
  
        $.ajax({
                url: '../php/getAssistanceDetails.php',
                method: 'POST',
                data: { id: id },
                success: (res) => {
                    const data = JSON.parse(res);
                    console.log(data);

                    $('#applicant_first_name').val(data['assistance'].applicant_first_name);
                    $('#applicant_last_name').val(data['assistance'].applicant_last_name);
                    $('#applicant_age').val(data['assistance'].applicant_age);
                    $('#spouse_first_name').val(data['assistance'].spouse_first_name);
                    $('#spouse_last_name').val(data['assistance'].spouse_last_name);
                    $('#spouse_age').val(data['assistance'].spouse_age);
                    $('#address').val(data['assistance'].address);
                    $('#apt').val(data['assistance'].address_apt);
                    $('#city').val(data['assistance'].address_city);
                    $('#state').val(data['assistance'].address_state);
                    $('#zip_code').val(data['assistance'].address_zip);

                    const house = data['assistance'].house;
                    const apartment = data['assistance'].appartment;
                    const rent = data['assistance'].rent;

                    if (house === 'true') {
                       $('#house_yes').attr('checked', true);
                    } else {
                      $('#house_no').attr('checked', true);
                    }

                    if (apartment === 'true') {
                       $('#apartment_yes').attr('checked', true);
                    } else {
                      $('#apartment_no').attr('checked', true);
                    }

                    if (rent === 'true') {
                       $('#rent').attr('checked', true);
                    } else {
                      $('#own').attr('checked', true);
                    }

                    $('#bedrooms').val(data['assistance'].bedrooms);
                    $('#email_address').val(data['assistance'].email_address);
                    $('#home_number').val(data['assistance'].home_number);
                    $('#mother_number').val(data['assistance'].mother_phone);
                    $('#father_number').val(data['assistance'].father_phone);
                    $('input[name=marraige_status]').filter('[value='+data['assistance'].marriage_status+']').attr('checked', true);

                    $('.child_first_name').val(data['children'].first_name);
                    $('.child_last_name').val(data['children'].last_name);
                    $('.child_middle_name').val(data['children'].middle_name);
                    $('.child_school').val(data['children'].school);
                    $('.child_age').val(data['children'].age);

                    if (data['assistance'].skills != '0') {
                        let skills = [];
                        skills = data['assistance'].skills.split(',');
                        let count = 0;

                        while (count < skills.length) {
                            $('.skills').filter('[value='+skills[count]+']').attr('checked', true);
                            count++;
                        }
                    }

                    const tutor_subject = data['assistance'].tutor_subject;
                    const driver = data['assistance'].driver;
                    const other = data['assistance'].other;

                    if (tutor_subject) {
                      $('#tutor').val(tutor_subject);
                      $('#tutor_cb').attr('checked', true);
                    }

                    if (driver) {
                      $('#driver').val(driver);
                      $('#driver_cb').attr('checked', true);
                    }

                    if (other) {
                      $('#other').val(other);
                      $('#other_cb').attr('checked', true);
                    }

                    $('#work_type').val(data['employment'].type_of_work);
                    $('#employer').val(data['employment'].employer);
                    $('#work_years').val(data['employment'].years);
                    $('#work_address').val(data['employment'].work_address);
                    $('#work_city').val(data['employment'].city);
                    $('#work_zip').val(data['employment'].zip);
                    $('#work_number').val(data['employment'].work_number);
                    $('#monthly_salary').val(data['employment'].mothly_salary);
                    $('#hourly_income').val(data['employment'].hourly_income);
                    $('#reason_unemployment').val(data['employment'].unemployment_reason);
                    $('#unemployed_since').val(data['employment'].unemployed_since);
                    $('#last_job_interview').val(data['employment'].last_interview);

                    if (data['employment'].car == 'true') {
                        $('#car_yes').attr('checked', true);
                    } else {
                        $('#car_no').attr('checked', true);
                    }

                    // data['employment'].sources_income
                    // data['employment'].invest
                    // data['employment'].others_car
                    
                    $('#other_work_type').val(data['others'].type_of_work);
                    $('#other_employer').val(data['others'].employer);
                    $('#other_work_years').val(data['others'].years);
                    $('#other_work_address').val(data['others'].work_address);
                    $('#other_city').val(data['others'].city);
                    $('#other_zip').val(data['others'].zip);
                    $('#other_number').val(data['others'].work_number);
                    $('#other_monthly_salary').val(data['others'].mothly_salary);
                    $('#other_monthly_income').val(data['others'].hourly_income);
                    $('#other_unemployment_reason').val(data['others'].unemployment_reason);
                    $('#other_unemployed_since').val(data['others'].unemployed_since);
                    $('#other_last_job_interview').val(data['others'].last_interview);

                    if (data['others'].car == 'true') {
                        $('#other_car_yes').attr('checked', true);
                    } else {
                        $('#other_car_no').attr('checked', true);
                    }

                    if (data['others'].sources_income) {
                      $('#sources_income').val(data['others'].sources_income);
                      $('#other_income_yes').attr('checked', true);
                    } else {
                      $('#other_income_no').attr('checked', true);
                    }

                    if (data['others'].investment) {
                      $('#investment').val(data['others'].investment);
                      $('#investment_yes').attr('checked', true);
                    } else {
                      $('#investment_no').attr('checked', true);
                    }
                    
                    $('#total_saving').val(data['others'].total_savings);
                    $('#total_checking').val(data['others'].current);

                    $('#welfare').val(data['government'].welfare);
                    $('#food_stamps').val(data['government'].food_stamps);
                    $('#medicaid').val(data['government'].medicaid);
                    $('#medicare').val(data['government'].medicare);
                    $('#ssi').val(data['government'].ssi);
                    $('#hud').val(data['government'].hud);
                    $('#wic').val(data['government'].wic);
                    $('#section_8').val(data['government'].sec_8);
                    $('#city_feps').val(data['government'].city_feps);
                    $('#ihss').val(data['government'].ihss);
                    $('#government_other').val(data['government'].other);

                    $('#rent_mortgage').val(data['government'].rent);
                    $('#clothing').val(data['government'].clothing);
                    $('#gas_company').val(data['government'].gas);
                    $('#medical_insurance').val(data['government'].medical_ins);
                    $('#life_insurance').val(data['government'].life_ins);
                    $('#car_payment').val(data['government'].car_payments);
                    $('#car_insurance').val(data['government'].car_ins);
                    $('#water_bill').val(data['government'].water);
                    $('#electrical_bill').val(data['government'].electrical);
                    $('#dsl_cable').val(data['government'].dsl);
                    $('#tuition').val(data['government'].tuition);
                    $('#home_maintenance').val(data['government'].maintenance);
                    $('#misc').val(data['government'].msc);
                    $('#monthly_expenses').val(data['government'].monthly_expenses);
                    $('#gap_description').val(data['government'].gap_description);

                    if (data['government'].financial_counseling == 'true') {
                        $('#counseling_yes').attr('checked', true);
                    } else {
                      $('#counseling_no').attr('checked', true);
                    }
                }
        });
      };

      assistance();

      $(document).on('click', '#btnPrint', () => {
          window.print();
      });

    </script>
  </body>
</html>