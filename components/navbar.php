<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky-top">
  <a class="navbar-brand" href="./index.php"> Me.Guide </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./pages/gameparks/gameparks.php">Gameparks</a>
          <a class="dropdown-item" href="./pages/mountains/mountains.php">Mountains</a>
          <a class="dropdown-item" href="./pages/lakes/lakes.php">Lakes</a>
          <a class="dropdown-item" href="../pages/beaches/beaches.php">Sand beaches</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./pages/hotels/hotels.php">Hotels</a>
          <a class="dropdown-item" href="./pages/facilities/facilities.php">Recreational Facilities</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pages/pricing.php">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pages/about.php">About us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./pages/account/signup.php"> Sign Up</a>
          <a class="dropdown-item" href="./pages/account/login.php">Login</a>
          <a class="dropdown-item" href="./pages/account/login.php">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./pages/account/profile.php">Profile</a>
          <a class="dropdown-item" href="./pages/account/bookings.php">Bookings</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More <i class="fa fa-ellipsis-h"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./#services">Our services</a>
          <a class="dropdown-item" href="./pages/account/login.php">Help</a>
        </div>
      </li>

    </ul>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '
        
          <li class="nav-item">
            <a class="nav-link" href="#contactus">Contact</a>
          </li>
        
        ';
      }
      else {
        echo '
        
          <form>
            <div class="form-row align-items-center">
              <div class="col-auto">
                <label class="sr-only" for="">Username</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-user"></i> </div>
                  </div>
                  <input type="text" class="form-control" id="" placeholder="Username">
                </div>
              </div>
              <div class="col-auto">
                <label class="sr-only" for="">Password</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fa fa-key"></i> </div>
                  </div>
                  <input type="password" class="form-control" id="" placeholder="Username">
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-secondary mb-2"> <i class="fa fa-sign-in-alt text-light" aria-hidden="true"></i> </button>
              </div>
            </div>
          </form>
        
        ';
      }
    ?>
  </div>
</nav>