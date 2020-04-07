<?php
include 'stylesheet.php';
include 'script.php';
include '../php/page_count.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChabadFoodFund</title>
</head>
<style>
  tr:hover {
      background-color: #fab3389e !important;
      /* cursor: pointer; */
  }
</style>
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
        <h1 class="h4 pt-3 pb-3 text-center">Donation</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

      <div class="container-fluid justify-content-center d-flex mb-2">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
           <div class="card card_api">
                <div class="card-body">
                    <label for="">Preferred Donation</label>
                    <select id="preferredPayment">
                        <option value="0">Both</option>
                        <option value="1">Paypal</option>
                        <option value="2">Authorize.net</option>
                    </select>
                    <button class="btn bg-yellow text-dark btn-sm font-weight-bold" id="btnSave">Save</button>
                </div>
            </div>
        </div>
      </div>

      <div class="container-fluid justify-content-center d-flex">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
           <div class="card card_api">
                <div class="card-body p-5">
                    <table id="tblDonation" class="table table-bordered text-center table-sm bg-white table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
  
  <script>
    $("a[href='donation.php']").addClass('toActive');

    $(() => {
        const volunteer = () => {
            $.ajax({
                url: '../php/getDonation.php',
                method: 'GET',
                success: (res) => {
                    let data = JSON.parse(res);

                    data.map((e) => {
                        let set = '<tr><td>'+ e.full_name +'</td>' +
                                  '<td>'+ e.donation_type +'</td>' +
                                  '<td>'+ e.amount +'</td>' +
                                  '<td>'+ e.created_at +'</td></tr>';
                        $('#tblDonation tbody').append(set);
                    });
                } 
            });
        };

        volunteer();

        const payment = () => {
            $.ajax({
                url: '../php/paymentAccepting.php',
                method: 'GET',
                success: (res) => {
                    if (res == '1') {
                      $('#preferredPayment').val(res);
                    } else if (res == '2') {
                      $('#preferredPayment').val(res);
                    } else {
                      $('#preferredPayment').val(0);
                    }
                } 
            });
        };

        payment();

        $(document).on('click', '#btnSave', () => {
            const type = $('#preferredPayment').val();

            $.ajax({
                url: '../php/paymentAcceptUpdate.php',
                method: 'POST',
                data: { type: type },
                success: (res) => {
                  alert('Saved!');
                }
            });
        });
    });
  </script>
  
</body>
</html>