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
        <h1 class="h4 pt-3 pb-3 text-center">Page Views</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

      <div class="container-fluid justify-content-center d-flex">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
           <div class="card card_api">
                <div class="card-body p-5">
                    <h1 class="text-center">TOTAL <br /> <?php print $page_count['total']; ?></h1>
                </div>
            </div>
        </div>
      </div>

      <br />

      <div class="container-fluid justify-content-center d-flex">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
           <div class="card card_api">
                <div class="card-body p-5">
                    <h1 class="text-center">NEW VISITOR <br /> <?php print $page_count['ip']; ?></h1>
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
    $(function(){
      $("a[href='#Analytics']").click();
      $("a[href='page_views.php']").addClass('toActive');
    });
</script>
</body>
</html>