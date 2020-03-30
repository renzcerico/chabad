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
    <title>Chabad Food Fund</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-yellow p-4 fixed-top">
        <a class="h2 font-weight-bold text-uppercase text-white text-decoration-none nav-title" href="index" id="nav-title">Chabad<span class="text-dark">FoodFund</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase text-dark ">
                <li class="nav-item active pr-2 pl-2">
                    <a class="nav-link" href="#" id="print">Print</a>
                </li>
                <li class="nav-item pr-2 pl-2">
                    <a class="nav-link" href="volunteer.php">Back to menu</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-5 mt-5" id="volunteer_form">
                <div class="text-justify mt-5">
                  <h5>
                    Welcome to Chabad Food Fund volunteer registration, thank you for your desire to serve as part of the Chabad Food Fund team.
                  </h5> 
                  <br />
                  <h6 class="small">
                    Please complete the information requested below to submit your application for review. If you are with a specific group please indicate so below!
                  </h6>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control sm-mb" id="first_name" placeholder="First name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control sm-mb" id="last_name" placeholder="Last name">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="date" name="" class="form-control sm-mb" id="birthdate" placeholder="Date of birth">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="number" name="" class="form-control sm-mb" id="phone_number" placeholder="Phone number">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="email" name="" class="form-control sm-mb" id="email_address" placeholder="Email address">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <input type="text" name="" class="form-control sm-mb" id="address_line1" placeholder="Address Line 1">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <input type="text" name="" class="form-control sm-mb" id="address_line2" placeholder="Address Line 2">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="" class="form-control sm-mb" id="city_town" placeholder="City / Town">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="" class="form-control sm-mb" id="state" placeholder="State">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <input type="number" name="" class="form-control sm-mb" id="zip_code" placeholder="Zip code">
                    </div>
                </div>

                <div class="mt-5 mb-4">
                  <strong>Volunteer Availability:</strong>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Availability:
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="availability" id="avl_year" value="year">
                    <label class="form-check-label" for="avl_year">
                      Year Round
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="availability" id="avl_seasonal" value="seasonal">
                    <label class="form-check-label" for="avl_seasonal">
                      Seasonal
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="availability" id="avl_weekends" value="weekend">
                    <label class="form-check-label" for="avl_weekends">
                      Weekends
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="availability" id="avl_evenings" value="evening">
                    <label class="form-check-label" for="avl_evenings">
                      Evenings
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Are you completing Community Services Hours?
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="services_hours" id="services_yes" value="yes">
                    <label class="form-check-label" for="services_yes">
                      Yes
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="services_hours" id="services_no" value="no">
                    <label class="form-check-label" for="services_no">
                      No
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Do you have any physical restrictions or special needs?
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="special_needs" id="special_yes" value="yes">
                    <label class="form-check-label" for="special_yes">
                      Yes
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="special_needs" id="special_no" value="no">
                    <label class="form-check-label" for="special_no">
                      No
                    </label>
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control sm-mb" id="emergency_name" placeholder="Emergency Contact Name">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="text" name="" class="form-control sm-mb" id="emergency_number" placeholder="Emergency Contact Phone">
                    </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Are you interested in being an event team leader?
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="team_leader" id="leader_yes" value="yes">
                    <label class="form-check-label" for="leader_yes">
                      Yes
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="team_leader" id="leader_no" value="no">
                    <label class="form-check-label" for="leader_no">
                      No
                    </label>
                  </div>
                </div>

                <!-- <div class="custom-file">
                  <input type="file" class="custom-file-input" id="profile_photo">
                  <label class="custom-file-label" for="profile_photo">Upload Volunteer Profile Photo</label>
                </div> -->

                <div class="mt-5 mb-4">
                  <strong>Volunteer Skills:</strong>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    Language:
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_hebrew" value="hebrew">
                    <label class="form-check-label" for="lang_hebrew">
                      Hebrew
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_yiddish" value="yiddish">
                    <label class="form-check-label" for="lang_yiddish">
                      Yiddish
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_french" value="french">
                    <label class="form-check-label" for="lang_french">
                      French
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_spanish" value="spanish">
                    <label class="form-check-label" for="lang_spanish">
                      Spanish
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_creole" value="creole">
                    <label class="form-check-label" for="lang_creole">
                      Creole
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_ukrainian" value="ukrainian">
                    <label class="form-check-label" for="lang_ukrainian">
                      Ukrainian
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_russian" value="russian">
                    <label class="form-check-label" for="lang_russian">
                      Russian
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="language" id="lang_portuguese" value="portuguese">
                    <label class="form-check-label" for="lang_portuguese">
                      Portuguese
                    </label>
                  </div>
                </div>

                <div class="form-group mb-5">
                  <div class="form-check form-check-inline">
                    Other Skills:
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="other_skills" id="skill_culinary" value="culinary">
                    <label class="form-check-label" for="skill_culinary">
                      Culinary Experience
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="other_skills" id="skill_teaching" value="teaching">
                    <label class="form-check-label" for="skill_teaching">
                      Teaching Experience
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="other_skills" id="skill_computer" value="computer">
                    <label class="form-check-label" for="skill_computer">
                      Computer/Database
                    </label>
                  </div>
                  <div class="form-check form-check-inline inline-margin">
                    <input class="form-check-input" type="radio" name="other_skills" id="skill_speaking" value="speaking">
                    <label class="form-check-label" for="skill_speaking">
                      Public Speaking
                    </label>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
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
    <script>
        $(() => {
            $(document).on('click', '#print', () => {
                window.print();
            })

            const getVolunteerDetails = () => {
                let url = window.location.href;
                url = new URL(url);
                let params = new URLSearchParams(url.search);
                let id = params.get('id');
                $('input').attr('readonly', true);
                
                $.ajax({
                    url: '../php/getVolunteerDetails.php',
                    method: 'POST',
                    data: { id: id },
                    success: (res) => {
                        const data = JSON.parse(res);

                        $('#first_name').val(data.first_name);
                        $('#last_name').val(data.last_name);
                        $('#birthdate').val(data.birthdate);
                        $('#phone_number').val(data.phone_number);
                        $('#email_address').val(data.email_address);
                        $('#address_line1').val(data.address_1);
                        $('#address_line2').val(data.address_2);
                        $('#city_town').val(data.city_town);
                        $('#state').val(data.state);
                        $('#zip_code').val(data.zip_code);
                        $('#emergency_number').val(data.emergency_phone);
                        $('#emergency_name').val(data.emergency_name);
                        $('input[name=availability]').filter('[value='+data.availability+']').attr('checked', true);
                        $('input[name=services_hours]').filter('[value='+data.services_hours+']').attr('checked', true);
                        $('input[name=special_needs]').filter('[value='+data.special_needs+']').attr('checked', true);
                        $('input[name=team_leader]').filter('[value='+data.team_leader+']').attr('checked', true);
                        // $('#profile_photo').val();
                        $('input[name=language]').filter('[value='+data.language+']').attr('checked', true);
                        $('input[name=other_skills]').filter('[value='+data.other_skills+']').attr('checked', true);
                    }
                });
            };

            getVolunteerDetails();
        });
    </script>
  </body>
</html>