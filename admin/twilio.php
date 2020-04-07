<?php
include 'stylesheet.php';
include 'script.php';
require '../php/session.php';
include '../model/Database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChabadFoodFund</title>
</head>
<body>
   <nav class=" navbar-expand-lg navbar-dark bg-yellow p-4 fixed-top">
      <div class="container-fluid">
          <div class="row">
             <div class="col-sm-6 col-6 col-md-6 col-lg-6">
                <a class="h2 font-weight-bold text-uppercase text-white text-decoration-none" href="../index#" id="nav-title">Chabad<span class="text-dark">FoodFund</span></a>
              </div>
            <div class="col-sm-6 col-6 col-md-6 col-lg-6 justify-content-end d-flex">
                <button  id="sidebarCollapse" class="btn text-white navbar-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <button  id="sidebarCollapse1" class="btn text-white navbar-btn">
                   <i class="fas fa-bars"></i>
                </button>
            </div>
          </div>
      </div>
  </nav>

  <div class="wrapper">
    <?php
      include 'nav.php';
    ?>

    <div id="content" class="content1 container-fluid">
      <div class=" align-items-center pt-3 pb-2 mb-3 border-bottom flex-md-nowrapap flex-md-nowrap">
        <h1 class="h4 pt-3 pb-3 text-center">Twilio API</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

      <div class="container-fluid justify-content-center d-flex">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
           <div class="card card_api">
                <div class="card-body p-5">
                    <form id="api_form">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" id="mobile_number" >
                        </div>
                        <span id="number_result"></span>
                        <a href="#" class="btn btn-warning btn-block mt-4 font-weight-bold" id="btnUpdate">Update</a>
                    </form>
                </div>
            </div>
        </div>
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
   <script type="text/javascript">
    $(() => {

      $("a[href='#Administrative']").click();
      $("a[href='twilio.php']").addClass('toActive');

      $.ajax({
        url: '../php/getNumber.php',
        method: 'GET',
        success: (res) => {
            const data  = JSON.parse(res);
            $('#mobile_number').val(data.mobile_number);
        }
    });

      $(document).on('click', '#btnUpdate', () => {
          const mobile_number = $('#mobile_number').val();

          $.ajax({
              url: '../php/update_mobile.php',
              method: 'POST',
              data: { mobile_number:mobile_number },
              success: (res) => {

                  $.ajax({
                    url:'../php/send_verification.php',
                    method:'POST',
                    data:{mobile_number:mobile_number},
                    success: (res) =>{
                    window.location.replace('verify_twilio.php');

                    }
                  });
              }
          })
      });

    })
  </script>
</body>
</html>