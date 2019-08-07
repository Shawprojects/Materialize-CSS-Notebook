<?php include('includes/header.php'); ?>

    <!-- Section: Body -->
    <section>
        <div class="container">
          <h3 class="center brown-text">Navbar</h3>
          <div class="divider"></div>
          
          <!-- START HERE -->

              <!-- STANDARD MENU -->
              <div class="buttons_icons">
                  <nav>
                    <div class="nav-wrapper">
                      <div class="container">
                        <a href="#" class="brand-logo white-text">Logo</a>
                        <ul id="nav-mobile" class="right hide-on-small-and-down">
                          <li class="active">
                            <a href="#" class="white-text">Home</a>
                          </li>
                          <li>
                            <a href="#" class="white-text">About</a>
                          </li>
                          <li>
                            <a href="#" class="white-text">Contact</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
              </div>

              <div class="divider"></div>

              <!-- RESPONSIVE WITH SIDE MENU -->
              <div class="buttons_icons">
                  <nav class="blue darken-4">
                      <div class="container">
                          <div class="nav-wrapper">
                              <a href="#" class="brand-logo white-text">Logo</a>
                               <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                                  <i class="material-icons white-text">menu</i>
                               </a>
                              <ul class="right hide-on-med-and-down">
                                  <li>
                                      <a href="#" class="white-text">Home</a>
                                  </li>
                                  <li>
                                      <a href="#" class="white-text">About</a>
                                  </li>

                                  <!-- DROPDOWN TRIGGER -->
                                  <li>
                                      <a href="#" class="dropdown-trigger white-text" data-target='dropdown-1'>Dropdown <i class="material-icons right">arrow_drop_down</i>
                                      </a>
                                  </li>

                                  <!-- BUTTON LINK -->
                                  <li>
                                      <a class="btn waves-effect waves-light">Login</a>
                                  </li>

                                  <!-- ICON LINK -->
                                  <li>
                                      <a href="#">
                                          <i class="material-icons white-text">person</i>
                                      </a>
                                  </li>
                              </ul>

                              <!-- Sidenav -->
                              <ul class="sidenav" id="mobile-demo">
                                  <li>
                                      <a href="#">Home</a>
                                  </li>
                                  <li>
                                      <a href="#">About</a>
                                  </li>
                                  <li>
                                      <a href="#">Contact</a>
                                  </li>
                              </ul>
                          </div> <!-- ./nav-wrapper -->
                      </div> <!-- ./container -->
                  </nav>
              </div>

              <!-- DROPDOWN MENU -->
              <ul id='dropdown-1' class='dropdown-content'>
                <li>
                  <a href="#">Link 1</a>
                </li>
                <li>
                  <a href="#">Link 2</a>
                </li>
                <li>
                  <a href="#">Link 3</a>
                </li>
              </ul>

              <div class="divider"></div>

              <!-- FIXED NAVBAR -->
              <div >
                  <nav class="black">
                    <div class="nav-wrapper">
                      <div class="container">
                        <a href="#" class="brand-logo white-text">Logo</a>
                        <ul class="right  hide-on-med-and-down">
                          <li class="active">
                            <a href="#" class="white-text">Home</a>
                          </li>
                          <li>
                            <a href="#" class="white-text">About</a>
                          </li>
                          <li>
                            <a href="#" class="white-text">Contact</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
              </div>

              <div class="divider"></div>

              <!-- SEARCH BAR -->
              
              <div class="buttons_icons">
                  <nav class="green">
                      <div class="nav-wrapper">
                          <form>
                              <div class="input-field">
                                <input id="search" type="search" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                              </div>
                          </form>
                      </div>
                  </nav>
              </div>

          <!-- END HERE -->

        </div> <!-- ./container -->

        <!-- MOVES CONTENT UP -->
        <div style="margin-top: 200px;"></div>
    </section>
  </main>

<?php include('includes/footer.php'); ?>