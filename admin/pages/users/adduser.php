<?php

include "../../components/header.php";
?>

<main class="container-fluid mb-5">

  <div class="card o-hidden border-0 shadow-lg my-5 p-4">
    <h2 class="text-center"> Add new user </h2>
    <form class="user">

      <div class="form-group">
        <label for=""> Username </label>
          <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter username...">
      </div>

      <div class="form-group">
          <label for=""> Email </label>
          <input type="email" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter user email add...">
      </div>

      <div class="form-group">
          <label for=""> Password </label>
          <input type="password" class="form-control form-control-user" id="" aria-describedby="" placeholder="Password...">
      </div>

      <div class="form-group">
          <label for=""> Confirm password </label>
          <input type="password" class="form-control form-control-user" id="" aria-describedby="" placeholder="Password repeat...">
      </div>

      <div>
        <button class="btn btn-primary round"> <i class="fa fa-plus"></i> Add user </button>
      </div>

  </form>
  </div>

</main>

<?php

include "../../components/footer.php";

?>