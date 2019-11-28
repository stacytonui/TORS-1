<?php
include '../includes/connection.php';
include '../includes/head.php'; 
?>


<body class="h-100">

    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <?php include '../includes/sidenav.php'; ?>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <?php include '../includes/navbar.php'; ?>
                <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
                            <span class="text-uppercase page-subtitle">The Kenyan Police</span>
                            <h3 class="page-title">Abstract from police on a road accident</h3>

                        </div>
                    </div>
                <div class="row">
                   <!-- Input & Button Groups -->
                <div class="card card-small mb-4 col-lg-9">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Fill in the incident details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                      <form>
                        <!-- Button Groups -->
                        <strong class="text-muted d-block mb-2">Police Info</strong>
                        <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
                          <label class="btn btn-white active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Fizz </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Buzz </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Foo </label>
                          <label class="btn btn-white">
                            <input type="radio" name="options" id="option4" autocomplete="off"> Bar </label>
                        </div>
                        <!-- / Button Groups -->
                        <!-- Input Groups -->
                        <strong class="text-muted d-block mb-2">Input Groups</strong>
                        <strong class="text-muted d-block mb-2">I/We understand that your Police Station received a report of an accident involving...of(address)...which occurred on(date)...at(time and place)...involving vehicle(s)Reg.No...make...and...make</strong>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2" value="contact">
                          <div class="input-group-append">
                            <span class="input-group-text">@designrevision.com</span>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="1000">
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                        <!-- Input Groups -->
                        <!-- Seamless Input Groups -->
                        <strong class="text-muted d-block mb-2">Seamless Input Groups</strong>
                        <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder="Username" value="design.revision"> </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <input type="password" class="form-control" id="form2-password" placeholder="Password" value="mySuperSecretPa$$word">
                            <span class="input-group-append">
                              <span class="input-group-text">
                                <i class="material-icons">lock</i>
                              </span>
                            </span>
                          </div>
                        </div>
                        <!-- / Seamless Input Groups -->
                        <!-- Input/Button Group -->
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-white" type="button">Button</button>
                          </div>
                        </div>
                        <!-- / Input/Button Group -->
                        <!-- Input/Button Group -->
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-white" type="button">Button</button>
                          </div>
                          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> </div>
                        <!-- / Input/Button Group -->
                      </form>
                    </li>
                  </ul>
                </div>
                <!-- / Input & Button Groups -->  
              
          </div>
          </div>

                  
                <?php 
    include '../includes/footer.php'; 
   
    ?>